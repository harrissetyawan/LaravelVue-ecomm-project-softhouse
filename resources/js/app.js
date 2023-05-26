import './bootstrap';
import { createApp } from 'vue';
import App from './App.vue';
import NavBar from './vue/NavBar.vue';

createApp(App).mount("#app")
createApp(NavBar).mount("#nav")

