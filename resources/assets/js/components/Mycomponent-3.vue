<template lang="html">

  <div class="container">

    <h1 class="subtitle is-3" > Observaciones </h1>

    <div class="field is-horizontal">
      <div class="field-body">
        <div class="field">
          <div class="control ">
            <textarea v-model="list.body" class="textarea"></textarea>
          </div>
        </div>
      </div>
    </div>

    <div class="field is-horizontal">
      <div class="field-body">
        <div class="field">
          <div class="control">
            <button class="button is-primary" @click="save">
              Guardar
            </button>
          </div>
        </div>
      </div>
    </div>

  </div>

</template>

<script>
export default {
  props:['iden'],
  data(){
    return{
      list: {
        patient_id: this.iden,
        body:''
      },
      errors: {

      }
    }
  },
  methods:{
    save(){
      axios.post('/search/patients/comment', this.$data.list).then((response) => {
        alert('Datos ingresados correctamente')
        this.list = [];
      })
        .catch((error) => {
          this.errors = error.response.data.errors
          alert('Datos incorrectos.')
        })

    },
  }
}
</script>
