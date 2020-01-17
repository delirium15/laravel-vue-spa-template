// state
import * as types from '../mutation-types'
import axios from 'axios'
import Cookies from "js-cookie";

export const state = {
  sortsLoaded: false
}

// getters
export const getters = {
  loaded: state => state.sortsLoaded

}



// mutations
export const mutations = {
  [types.SET_LOADED] (state) {
    state.sortsLoaded = true
  }
}

// actions
export const actions = {

  confirmload ({ commit }) {
    commit(types.SET_LOADED)
  }

}
