<template>
  <div v-if="sortsLoaded">

      <div class="container">
        <ul id="pills-tab" class="nav nav-pills nav-fill mb-5" role="tablist">
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

        <transition
          name="slide-fade">
        <div id="pills-tabContent" class="tab-content">

          <div v-for="value, key, index in sortsList" :id="key" class="tab-pane fade" role="tabpanel" aria-labelledby="pills-home-tab">
            <div v-for="sort, key, index in value" class="row no-gutters row-cols-1 row-cols-md-3">
              <div class="col mb-4">

                <div class="card h-100">
                  <img :src="sort.title" class="card-img-top card__img" :alt="sort.title">
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
        </transition>

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

  .card {
    text-align: left;
    flex-direction: row;
  }
  .card-body {
    flex: 1;
  }
  .card__img {
    width: 300px;
  }

  /** INTERIORDOOR CARD APPEAR ANIMATION */
  .slide-fade-enter-active {
    transition: all .5s ease;
  }
  .slide-fade-leave-active {
    transition: all .8s cubic-bezier(1.0, 0.5, 0.8, 1.0);
  }
  .slide-fade-enter, .slide-fade-leave-to
    /* .slide-fade-leave-active до версии 2.1.8 */ {
    transform: translateY(10px);
    opacity: 0;
  }



  .tab-pane.fade {
    transition: all 0.2s;
    transform: translateY(1rem);
  }

  .tab-pane.fade.show {
    transform: translateY(0rem);
  }

</style>
