import Vue from "vue";
import Vuex from "vuex";

Vue.use(Vuex);

const store = new Vuex.Store({
    state: {
        films: null
    },
    mutations: {
        SET_INIT_DATA(state, data) {
            state.films = data;
        }
    },
    actions: {
        async fetchFilms({ commit }) {
            const response = await fetch(window.location.origin + "/api/init");

            const { data } = await response.json();

            commit("SET_INIT_DATA", data);
        }
    },
    getters: {
        getPopularViews: state => {
            if (!state.films) return [];

            return state.films.sort((a, b) => a.views - b.views);
        },
        getFilms: state => {
            return state.films ? state.films : [];
        },
        getFirstFilm: state => {
            if (!state.films) return null;

            return state.films[0];
        }
    }
});

export default store;
