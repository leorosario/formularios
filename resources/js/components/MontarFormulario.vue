<template>
  <div>
    <h1>{{ formulario.nome }}</h1>    
  </div>
</template>

<script>
import axios from "axios";
axios.defaults.baseURL = "http://127.0.0.1:8000"; // sua URL do Laravel

export default {
    data() {
        return {
        mensagem: "Teste montar",
        formulario: {}
        }
    },
    methods: {
    async buscarFormulario(idFormulario) {
      try {
        const response = await axios.get(`/api/buscar-formulario/${idFormulario}`);
        this.formulario = response.data;
      } catch (error) {
        alert("Produto não encontrado");
        this.produto = null;
      }
    }
  },
    created() {
        const url = window.location.pathname; 
        const id = url.split("/").pop();  // pega o último pedaço da URL -> "1"

        this.buscarFormulario(id);
    }   

}
</script>