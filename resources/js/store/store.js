window.$ = window.jQuery = require('jquery')
import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

//States
export const store = new Vuex.Store({
    state: {
        message: 'Hello World',
        test:''
    },
    getters: {
        upperCaseMessage: state => {
            return state.message.toUpperCase();
        }
    },
    mutations: {
        changeMessage: state => {
            state.message = 'Hello Vuex'
        },
        getTestTitle: state => {
            $.ajax({
                method: "GET",
                url: "https://jsonplaceholder.typicode.com/todos/1",
                dataType: "json",
                success: function (data) {
                    state.test = data.title;
                },
            });
        }
    },
    actions: {
        getTestTitle: context => {
            context.commit('getTestTitle');
        }
    }
});

// console.log(store.state.message)
// store.commit('changeMessage')
// console.log(store.state.message)