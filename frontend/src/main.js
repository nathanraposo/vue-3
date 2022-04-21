import { createApp } from 'vue/dist/vue.esm-bundler.js'
// import { createApp } from 'vue'
import App from './App.vue'
import router from './router'

const app = createApp(App);

app.component('teste',{
    template:'<h2>Teste</h2>'
})

app.use(router)

app.mount('#app')
