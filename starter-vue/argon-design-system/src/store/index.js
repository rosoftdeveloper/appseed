import Vue from "vue";
import Vuex from "vuex";

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        user: false
    },
    mutations: {
        LOGIN: (state, user) => Vue.set(state, 'user',user),
        LOGOUT: state => (state.user = null)
    },
    actions: {
        LOGIN({ commit }, payload) {
            commit("LOGIN", payload);
        },
        LOGOUT({ commit }) {
            commit("LOGOUT");
        }
    }
});
