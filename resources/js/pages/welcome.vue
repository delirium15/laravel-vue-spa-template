<template>
  <div>
    <div class="top-right links">
      <template v-if="authenticated">
        <router-link :to="{ name: 'home' }">
          {{ $t('home') }}
        </router-link>
      </template>

      <template v-else>
        <router-link :to="{ name: 'login' }">
          {{ $t('login') }}
        </router-link>
        <router-link :to="{ name: 'register' }">
          {{ $t('register') }}
        </router-link>
      </template>
    </div>

    <div class="text-center">
      <div class="title mb-4">
        {{ title }}
      </div>

      <div class="links" />


      <!-- Button trigger modal -->
<!--      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">-->
<!--        Launch demo modal-->
<!--      </button>-->
      <!-- Modal -->
<!--      <div id="exampleModalCenter" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">-->
<!--        <div class="modal-dialog modal-dialog-centered" role="document">-->
<!--          <div class="modal-content">-->
<!--            <div class="modal-header">-->
<!--              <h5 id="exampleModalCenterTitle" class="modal-title">-->
<!--                Modal title-->
<!--              </h5>-->
<!--              <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--                <span aria-hidden="true">&times;</span>-->
<!--              </button>-->
<!--            </div>-->
<!--            <div class="modal-body">-->
<!--              ...-->
<!--            </div>-->
<!--            <div class="modal-footer">-->
<!--              <button type="button" class="btn btn-secondary" data-dismiss="modal">-->
<!--                Close-->
<!--              </button>-->
<!--              <button type="button" class="btn btn-primary">-->
<!--                Save changes-->
<!--              </button>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->

<!--      <button type="button" class="btn btn-primary">-->
<!--        Primary-->
<!--      </button>-->
<!--      <button type="button" class="btn btn-secondary">-->
<!--        Secondary-->
<!--      </button>-->
<!--      <button type="button" class="btn btn-success">-->
<!--        Success-->
<!--      </button>-->
<!--      <button type="button" class="btn btn-danger">-->
<!--        Danger-->
<!--      </button>-->
<!--      <button type="button" class="btn btn-warning">-->
<!--        Warning-->
<!--      </button>-->
<!--      <button type="button" class="btn btn-info">-->
<!--        Info-->
<!--      </button>-->
<!--      <button type="button" class="btn btn-light">-->
<!--        Light-->
<!--      </button>-->
<!--      <button type="button" class="btn btn-dark" @click="showSweet">-->
<!--        showSweet-->
<!--      </button>-->
<!--      <v-button>ЗАГРУЗИТЬ</v-button>-->

      <!-- SORTS LIST -->
      <transition
        name="slide-fade">
      <sorts-list />
      </transition>


    </div>
  </div>
</template>

<script>
import { mapGetters } from 'vuex'
import Swal from 'sweetalert2'
import SortsList from '../Components/SortsList'

export default {
  layout: 'basic',

  metaInfo () {
    return { title: this.$t('home') }
  },

  components: {
    SortsList
  },

  data: () => ({
    title: window.config.appName
  }),

  methods: {
    showSweet () {
      // https://sweetalert2.github.io/#download
      Swal.fire({
        title: 'Удалить?',
        text: 'Данное действие невозможно отменить.',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#ССС',
        confirmButtonText: 'Удалить',
        cancelButtonText: 'Отмена'
      }).then((result) => {
        if (result.value) {
          // if user confirms an action, do smth here

          Swal.fire(
            'Готово!',
            'Файл успешно удален.',
            'success'
          )
        }
      })
    }
  },

  computed: mapGetters({
    authenticated: 'auth/check'
  })

}
</script>

<style scoped>
.top-right {
  position: absolute;
  right: 10px;
  top: 18px;
}

.title {
  font-size: 85px;
}

</style>
