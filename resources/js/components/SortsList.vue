<template>
  <div v-if="sortsLoaded">
    <div class="container">
      <ul id="pills-tab" class="nav nav-pills mb-5" role="tablist">
        <li v-for="value, key, index in sortsList" class="nav-item">
          <a id="pills-home-tab"
             class="nav-link"
             data-toggle="pill"
             :href="getUrlKey(key)"
             role="tab"
             aria-controls="pills-home"
             aria-selected="true"
          >{{ key }}</a>
        </li>
      </ul>

      <div id="pills-tabContent" class="tab-content">
        <div v-for="value, key, index in sortsList" :id="key" class="tab-pane fade show" role="tabpanel" aria-labelledby="pills-home-tab">
          <div v-for="sort, key, index in value" class="row no-gutters row-cols-1 row-cols-md-3">
            <div class="col mb-4">
              <div class="card h-100">
                <img :src="sort.title" class="card-img-top" :alt="sort.title">
                <div class="card-body">
                  <h5 class="card-title">
                    {{ sort.title }}
                  </h5>
                  <p class="card-text">
                    {{ sort.description }}
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- TABS -->
  </div>
</template>

<script>
import { mapGetters } from 'vuex'
import axios from 'axios'

export default {
  props: {
  },

  data: () => ({
    sorts: []
  }),

  mounted () {
    this.getsortslist()
  },

  computed: mapGetters({
    sortsLoaded: 'sorts/loaded',
    // sortsLoaded: false
    sortsList: 'sorts/sortedList'
  }),

  methods: {
    async getsortslist () {
      const { data } = await axios.post('/api/sorts') // 'data' contains all of grape sorts from DB
      this.sorts = data

      this.$store.dispatch('sorts/confirmload')
      this.$store.dispatch('sorts/getsortedlist', this.sorts)
    },

    getUrlKey (key) {
      return '#' + key
    },

    getSortKey (key) {
      return '#' + key
    }
  }

}
</script>

<style scoped>
  .nav-pills .nav-link {
    font-weight: 600;
  }
</style>
