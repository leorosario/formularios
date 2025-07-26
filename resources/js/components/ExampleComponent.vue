<template>
  <div>
    <h1>{{ mensagem }}</h1>
    <button @click="mudarMensagem">Clique aqui</button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      mensagem: "Olá mundo teste"
    }
  },
  methods: {
    mudarMensagem() {
      this.mensagem = 'Você clicou no botão!'
    }
  }
}
</script>