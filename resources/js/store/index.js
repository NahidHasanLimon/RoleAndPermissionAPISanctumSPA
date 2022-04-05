// import Vue from 'vue'
import { createApp } from "vue";
import Vuex from 'vuex'
import createPersistedState from 'vuex-persistedstate'
import auth from './auth'

// Vue.use(Vuex)
const app = createApp();
app.use(Vuex)

export default new Vuex.Store({
    plugins:[
        createPersistedState()
    ],
    modules:{
        auth
    }
})