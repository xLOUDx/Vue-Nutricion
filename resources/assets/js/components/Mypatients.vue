<template lang="html">

  <div class="container">
    <hr>

    <p class="subtitle is-2" v-for="item, key in patient" >
       <strong>
         {{ item.name }} {{ item.last_name_pat }} {{ item.last_name_mat }}
       </strong>
    </p>

    <div class="notification columns" v-for="item, key in patient">
      <div class="column is-two-fifths is-horizontal">
       <h6 class="is-pulled-left" > <strong>Fono: </strong> {{ item.phone }} </h6> <br>
       <h6 class="is-pulled-left" > <strong>Previsión: </strong> {{ item.prevision }} </h6> <br>
       <h6 class="is-pulled-left" > <strong>Mail: </strong> {{ item.email }} </h6> <br> <br>
       <p> <h6 class="is-pulled-left" > <strong>Sra: </strong> {{ item.sra }}</h6>
      </div>

      <div class="column is-horizontal">
        <h6 class="is-pulled-left" > <strong>Run: </strong> {{ item.run }} </h6> <br>
        <h6 class="is-pulled-left" > <strong>Dirección:</strong> {{ item.phone }} </h6> <br>
        <h6 class="is-pulled-left" > <strong> Ocupación: </strong> {{ item.job }} </h6> <br>
      </div>
    </div>

    <div class="tabs">
      <ul>
        <li class="is-active"><a>Evaluación</a></li>
        <li><a>Observaciones</a></li>
        <li><a>Otro</a></li>
      </ul>
    </div> <br>

    <div id="app">
      <Mycomponent-1 v-show="FALSE" :iden="this.iden" > </Mycomponent-1>
      <Mycomponent-2  > </Mycomponent-2>
    </div>

  </div>

</template>

<script>
export default {
  props:['iden'],
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
    axios.post('/getData', {iden: this.iden})
    .then((response) => this.lists = response.data)
      .catch((error) => this.errors = error.response.data.errors)

      axios.post('/getDataPatient', {iden: this.iden})
      .then((response) => this.patient = response.data)
        .catch((error) => this.errors = error.response.data.errors)

  },
  methods:{
    close(){
      this.AddActive = '';
    },
  }
}
</script>


GRAFICO E PROYECCIÓN DE TRATAMIENTO
