import './bootstrap';
import '../../css/app.css';
import { createApp } from 'vue';
import router from './route/index.js';
import App  from './App.vue';


const app = createApp(App);
app.use(router);
app.mount('#app');