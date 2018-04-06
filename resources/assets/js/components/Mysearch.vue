<template lang="html">
  <nav class="panel column is-offset-2 is-8">

    <p class="panel-heading field is-grouped is-grouped-centered">
      Busqueda de pacientes
    </p>
    <div class="panel-heading">
      <button class="button is-link is-outlined" @click="openAdd">
        Agregar nuevo
      </button>
    </div>

    <div class="panel-block">
      <p class="control has-icons-left">
        <input class="input" type="text" placeholder="Buscar">
        <span class="icon is-small is-left">
          <i class="fas fa-search"></i>
        </span>
      </p>
    </div>
    <a class="panel-block is-active" v-for="item, key in patient" @click="details" >
      <span class="panel-icon">
        <i class="fas fa-address-card fa-1x"></i>
      </span>
      {{ item.name }}
    </a>

    <div class="panel-block">
      <button class="button is-link is-fullwidth">
        <h1 class="subtitle is-5" style="color:white;" >Buscar</h1>
      </button>
    </div>

    <Add-2 :openmodal='AddActive' @closeRequest='close'> </Add-2>

  </nav>

</template>

<script>
export default {
  data(){
    return{
      AddActive: '',
      errors:{

      },
      patient: {

      },
    }
  },
  mounted(){
    axios.post('/getDataPatient')
    .then((response) => this.patient = response.data)
      .catch((error) => this.errors = error.response.data.errors)
  },
  methods:{
    openAdd(){
      this.AddActive = 'is-active';
    },
    close(){
      this.AddActive = '';
    },
    details(){
      console.log('esta biemm')
    }
  }
}
</script>
