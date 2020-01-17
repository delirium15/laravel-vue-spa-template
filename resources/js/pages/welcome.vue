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
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        Launch demo modal
      </button>

      <!-- Modal -->
      <div id="exampleModalCenter" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 id="exampleModalCenterTitle" class="modal-title">
                Modal title
              </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">
                Close
              </button>
              <button type="button" class="btn btn-primary">
                Save changes
              </button>
            </div>
          </div>
        </div>
      </div>

      <button type="button" class="btn btn-primary">
        Primary
      </button>
      <button type="button" class="btn btn-secondary">
        Secondary
      </button>
      <button type="button" class="btn btn-success">
        Success
      </button>
      <button type="button" class="btn btn-danger">
        Danger
      </button>
      <button type="button" class="btn btn-warning">
        Warning
      </button>
      <button type="button" class="btn btn-info">
        Info
      </button>
      <button type="button" class="btn btn-light">
        Light
      </button>
      <button type="button" class="btn btn-dark" @click="showSweet">
        showSweet
      </button>

      <v-button>ЗАГРУЗИТЬ</v-button>

      <!--      <div v-if="sortsLoaded">-->
      <!--        <ul>-->
      <!--          <li v-for="sort in $root.sorts">-->
      <!--            {{ sort.id + ' ' + sort.title }}-->
      <!--          </li>-->
      <!--        </ul>-->
      <!--      </div>-->

      <ul id="pills-tab" class="nav nav-pills mb-3" role="tablist">
        <li class="nav-item">
          <a id="pills-home-tab" class="nav-link active" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
        </li>
        <li class="nav-item">
          <a id="pills-profile-tab" class="nav-link" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
        </li>
        <li class="nav-item">
          <a id="pills-contact-tab" class="nav-link" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
        </li>
      </ul>
      <div id="pills-tabContent" class="tab-content">
        <div id="pills-home" class="tab-pane fade show active" role="tabpanel" aria-labelledby="pills-home-tab">
          ...
        </div>
        <div id="pills-profile" class="tab-pane fade" role="tabpanel" aria-labelledby="pills-profile-tab">
          ...
        </div>
        <div id="pills-contact" class="tab-pane fade" role="tabpanel" aria-labelledby="pills-contact-tab">
          ...
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapGetters } from 'vuex'
import Swal from 'sweetalert2'

export default {
  layout: 'basic',

  metaInfo () {
    return { title: this.$t('home') }
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
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Все равно удалить!',
        cancelButtonText: 'Отмена'
      }).then((result) => {
        if (result.value) {
          Swal.fire(
            'Удалено!',
            'Файл успешно удален.',
            'success'
          )
        }
      })
    }
  },

  computed: mapGetters({
    authenticated: 'auth/check',
    sortsLoaded: 'sorts/loaded'
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
