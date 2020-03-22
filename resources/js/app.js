window.$ = window.jQuery = require('jquery')
import Vue from 'vue'
import { store } from './store/store'
import router from './router'

//Components
import App from "./App.vue"
import Header from "./components/Header.vue"
import Footer from "./components/Footer.vue"

//Views
import Home from './views/Home.vue'
import About from './views/About.vue'
import Category from './views/Category.vue'

//Instance
new Vue({
    store: store,
    router,
    el: '#app',
    components: {
        App,
        Header,
        Footer,
        Home,
        About,
        Category
    }
});


// $('body').prepend('<p>Test!</p>');