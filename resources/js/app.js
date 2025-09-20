import './bootstrap';
import { createApp } from 'vue';
import ExampleComponent from './components/ExampleComponent.vue';
import MontarFormulario from './components/MontarFormulario.vue';

const app = createApp({});
app.component('example-component', ExampleComponent);
app.component('montar-formulario', MontarFormulario);
app.mount('#app');
