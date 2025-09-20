<template>
  <div>
    <h1 class="text-center">{{ formulario.nome }}</h1>
    <div class="container d-flex align-items-end justify-content-end">
      <div class="col d-flex align-items-start justify-content-start">
        <h2 v-if="paginas.length > 0">
          {{ paginas[0].nome }}
        </h2>
      </div>
      <div class="col d-flex align-items-end justify-content-end">
        <button type="submit" data-bs-toggle="modal" data-bs-target="#modalCadastrarPagina"
          class="btn btn-outline-success d-flex align-items-center justify-content-center"><span class="material-symbols-outlined">add</span>
        </button>
      </div>      
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="modalCadastrarPagina" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nova Página</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" @submit.prevent="cadastrarPagina">
                        <input type="hidden" name="id_formulario" v-model="pagina.id_formulario">                   
                        <div class="mb-3">
                            <label class="form-label">Nome:</label>
                            <input type="text" name="nome" minlength="3" class="form-control" v-model="pagina.nome">                
                        </div>                        
                        <div class="d-flex justify-content-end align-items-end">
                            <button type="submit" class="btn btn-outline-success">Salvar</button>
                        </div>      
                    </form>
                </div>           
            </div>
        </div>
    </div>
    <!-- Fim da Modal -->
  </div>
</template>

<script>
import axios from "axios";
axios.defaults.baseURL = "http://127.0.0.1:8000"; // sua URL do Laravel

export default {
    data() {
        return {
          mensagem: "Teste montar",
          formulario: {},
          pagina: {            
            nome: '',
            id_formulario: '',
          },
          paginas: []          
        }
    },
    methods: {
      async buscarFormulario(idFormulario) {
        try {
          const response = await axios.get(`/api/buscar-formulario/${idFormulario}`);
          this.formulario = response.data;
        } catch (error) {
          alert("Formulário não encontrado");
          this.formulario = null;
        }
      },
      async buscarPaginas(idFormulario) {
        try {
          const response = await axios.get(`/api/buscar-paginas/${idFormulario}`);
          this.paginas = response.data;
        } catch (error) {
          alert("Paginas não encontrado");
          this.paginas = [];
        }
      },
      async cadastrarPagina() {
        try {
          const response = await axios.post('/api/cadastrar-pagina', this.pagina);
          
          // se o backend retornar o formulário recém-criado
          this.pagina = response.data;

          alert("Página cadastrada com sucesso!");
        } catch (error) {
          console.error(error.response?.data || error.message);
         
          alert("Erro ao cadastrar o formulário");
        }
      }

  },
    created() {
        const url = window.location.pathname; 
        const id = url.split("/").pop();  // pega o último pedaço da URL -> "1"

        this.buscarFormulario(id);
        this.buscarPaginas(id);
        this.pagina.id_formulario = id;
    }   

}
</script>