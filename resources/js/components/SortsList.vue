<template>
  <div v-if="sortsLoaded">
    <div class="container">

      <ul id="sorts-tabs" class="nav nav-pills nav-fill mb-5" role="tablist">
        <li v-for="(value, key, index) in sortsList" class="nav-item">
          <a id="pills-home-tab"
             :class="['nav-link', { active: key == activeTab }]"
             data-toggle="pill"
             :href="`#${key}`"
             role="tab"
             aria-controls="pills-home"
             aria-selected="true"
          >{{ key }}</a>
        </li>
      </ul>

      <transition name="slide-fade">
        <div id="pills-tabContent" class="tab-content">
          <div v-for="(value, key, index) in sortsList" :id="key"
               :class="['tab-pane fade', { 'active show': key == activeTab }]"
               role="tabpanel"
               aria-labelledby="pills-home-tab">
            <div v-for="(sort, key, index) in value" class="row no-gutters row-cols-1 row-cols-md-3">
              <div class="col mb-4">
                <div class="card h-100">

                  <div
                    class="card__image_wrapper"
                    :style="{'background-image': `url(/images/${sort.images[0]}`}">
<!--                    <img :src="`/images/${sort.images[0]}`" class="card-img-top card__img" :alt="sort.title">-->
                  </div>

                  <div class="card__body card-body">
                    <h5 class="card__title card-title">
                      {{ sort.title }}
                    </h5>

                      <h6>
                          {{ sort.selection }}
                      </h6>
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
    // sorts: []
  }),

  mounted () {
    this.getsortslist()
  },

  computed: mapGetters({
    sortsLoaded: 'sorts/loaded',
    sortsList: 'sorts/sortedList',
    activeTab: 'sorts/activeTab'
  }),

  methods: {
    async getsortslist () {
      const { data } = await axios.post('/api/sorts') // 'data' contains all of grape sorts from DB

      this.$store.dispatch('sorts/confirmload')
      this.$store.dispatch('sorts/getsortedlist', data)
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
    overflow: hidden;
    border-radius: 5px;
  }
  @media screen and (min-width: 768px){
    .card {
      flex-direction: row;
    }
  }
  .card-body {
    flex: 1;
  }
  .card__image_wrapper {
    width: 300px;
    min-height: 200px;
    overflow: hidden;
    background-size: cover;
    background-position: center;
  }
  .card__img {

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
