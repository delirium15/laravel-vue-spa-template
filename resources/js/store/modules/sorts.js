// state
import * as types from '../mutation-types'

export const state = {
  sortsLoaded: false,
  sortedList: {}
}

// getters
export const getters = {
  loaded: state => state.sortsLoaded,
  sortedList: state => state.sortedList
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
  },

  getsortedlist ({ commit }, data) {
    if (Object.entries(state.sortedList).length === 0 && state.sortedList.constructor === Object) {
      data.forEach((item) => {
        let firstLetter = item.title[0]

        if ((state.sortedList[firstLetter] === undefined)) {
          state.sortedList[firstLetter] = []
        }

        state.sortedList[firstLetter].push(item)
      })
    }
  }

}
