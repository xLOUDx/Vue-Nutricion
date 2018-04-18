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
        <li @click="prueba(1)" :class="isActive[0]" ><a>Evaluación</a></li>
        <li @click="prueba(2)" :class="isActive[1]" ><a>Nuevo</a></li>
        <li @click="prueba(3)" :class="isActive[2]" ><a>Observaciones</a></li>
      </ul>
    </div> <br>

    <div id="app">
      <Mycomponent-1 v-show="isOpen == 1" :iden="this.iden"> </Mycomponent-1>
      <Mycomponent-2 v-show="isOpen == 2" :iden="this.iden"> </Mycomponent-2>
      <Mycomponent-3 v-show="isOpen == 3" :iden="this.iden"> </Mycomponent-3>
    </div>

  </div>

</template>

<script>
export default {
  props:['iden'],
  data(){
    return{
      isOpen: 1,
      isActive: {

      },
      errors:{
      },
      patient: {
      },
    }
  },

  mounted(){
    this.isActive[0] = 'is-active'

    axios.post('/getData', {iden: this.iden})
    .then((response) => this.lists = response.data)
      .catch((error) => this.errors = error.response.data.errors)

      axios.post('/getDataPatient', {iden: this.iden})
      .then((response) => this.patient = response.data)
        .catch((error) => this.errors = error.response.data.errors)

  },
  methods:{
    prueba(element){
      if (element == 1) {
        this.isOpen = 1
        this.isActive = []
        this.isActive[0] = 'is-active'
      }
      if(element == 2){
        this.isOpen = 2
        this.isActive = []
        this.isActive[1] = 'is-active'
        // console.log('este es el 2')
      }
      if(element == 3){
        this.isOpen = 3
        this.isActive = []
        this.isActive[2] = 'is-active'
        // console.log('este es el 3')
      }
    },
  }
}
</script>
