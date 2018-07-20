import Vue from 'vue'
import VueRouter from 'vue-router'
// import Vuetify from 'vuetify'
import App from './App.vue'

import {routes} from './routes'
// import 'vuetify/dist/vuetify.min.css'

Vue.use(VueRouter)
// Vue.use(Vuetify)

const router = new VueRouter({routes})

new Vue({
  el: '#app',
  router,
  render: h => h(App)
})
