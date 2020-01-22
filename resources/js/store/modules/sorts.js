// state
import * as types from '../mutation-types'

export const state = {
  sortsLoaded: false,
  sortedList: {},
  activeTab: ''
}

// getters
export const getters = {
  loaded: state => state.sortsLoaded,
  sortedList: state => state.sortedList,
  activeTab: state => state.activeTab
}

// actions
export const actions = {

  confirmload ({ commit }) {
    state.sortsLoaded = true
  },

  getsortedlist ({ commit }, data) {
    data.forEach((item) => {
      let firstLetter = item.title[0]

      state.activeTab = state.activeTab == '' ? firstLetter : state.activeTab

      if ((state.sortedList[firstLetter] === undefined)) {
        state.sortedList[firstLetter] = []
      }



      item.images = item.images != '' ? JSON.parse(item.images) : {}

      state.sortedList[firstLetter].push(item)
    })
  }

}
