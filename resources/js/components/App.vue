<template>
  <div id="app">
    <loading ref="loading" />

    <transition name="page" mode="out-in">
      <component :is="layout" v-if="layout" />
    </transition>
  </div>
</template>

<script>
import Loading from './Loading'
import { mapGetters } from 'vuex'
import axios from 'axios'

// Load layout components dynamically.
const requireContext = require.context('~/layouts', false, /.*\.vue$/)

const layouts = requireContext.keys()
  .map(file =>
    [file.replace(/(^.\/)|(\.vue$)/g, ''), requireContext(file)]
  )
  .reduce((components, [name, component]) => {
    components[name] = component.default || component
    return components
  }, {})

export default {
  el: '#app',

  components: {
    Loading
  },

  data: () => ({
    layout: null,
    defaultLayout: 'default',
    sorts: []
  }),

  metaInfo () {
    const { appName } = window.config

    return {
      title: appName,
      titleTemplate: `%s · ${appName}`
    }
  },

  mounted () {
    this.$loading = this.$refs.loading
  },

  created () {
    this.getsortlist()
  },

  methods: {
    /**
             * Set the application layout.
             *
             * @param {String} layout
             */
    setLayout (layout) {
      if (!layout || !layouts[layout]) {
        layout = this.defaultLayout
      }

      this.layout = layouts[layout]
    },

    async getsortlist () {
      const { data } = await axios.post('/api/sorts') // 'data' contains all of grape sorts from DB
      this.sorts = data
    }

  },

  computed: mapGetters({
    sortsLoaded: 'sorts/isloaded'

  })

}
</script>
