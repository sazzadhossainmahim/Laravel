// import { appendFile } from "fs";
import { createStore } from "vuex";

const store = createStore({
    state: {
        user: {
            data: { name: 'mahim' },
            token: '123'
        }
    },
    getters: {},
    actions: {},
    modules: {},
    mutations: {}


})

export default store;