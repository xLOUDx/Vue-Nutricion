<template lang="html">
  <div class="modal" :class='openmodal' >
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Formulario de paciente</p>
      <button class="delete" aria-label="close" @click='close'></button>
    </header>
    <section class="modal-card-body">

      <div class="field">
        <label class="label">Titulo</label>
        <div class="control has-icons-right">
          <input class="input" type="text" v-model="list.title" placeholder="Ingrese aquí">          
        </div>
      </div>

      <div class="field">
        <label class="label">Sub titulo</label>
        <div class="control has-icons-right">
          <input class="input" type="text" v-model="list.subtitle" placeholder="Ingrese aquí">          
        </div>
      </div>

      <div class="field">
        <label class="label">Comentario</label>
        <div class="control has-icons-right">
          <input class="input" type="text" v-model="list.body" placeholder="Ingrese aquí">          
        </div>
      </div>

      <div class="field">
        <label class="label">Link ppt</label>
        <div class="control has-icons-right">
          <input class="input" type="text" v-model="list.ppt" placeholder="Ingrese aquí">          
        </div>
      </div>

    </section>
    <footer class="modal-card-foot">
      <button class="button is-success" @click="save">Guardar</button>
      <button class="button" @click='close'>Cancelar</button>
    </footer>
  </div>
</div>
</template>

<script>
export default {
  props:['openmodal'],
  data(){
    return{
      list: {
        title: '',
        subtitle: '',
        body: '',
        ppt:''
      },
      errors: {
      }
    }
  },
  methods: {
    close(){
      this.$emit('closeRequest')
    },
    save(){
      axios.post('/newblog', this.$data.list).then((response) => {
        this.close()
        alert('Has creado un nuevo post!')
      })
        .catch((error) => {
          this.errors = error.response.data.errors
          alert('Datos incorrectos')
        })
    },
  }
}
</script>
