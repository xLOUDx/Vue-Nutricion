<template lang="html">

  <div class="container">
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
       <p> <h6 class="is-pulled-left" > <strong>Acompañante: </strong> {{ item.sra }}</h6>
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
        <li @click="prueba(4)" :class="isActive[3]" ><a>Gráfico</a></li>
      </ul>
    </div> <br>

    <div id="app">

      <!-- <keep-alive> -->
        <component
          :is="active"
          :iden="this.iden"
          :bin="this.lists"
          :pat="this.patient" >
        </component>
      <!-- </keep-alive> -->

    </div>

  </div>

</template>

<script>
export default {
  props:['iden'],
  data(){
    return{
      isOpen: 1,
      active: 'Mycomponent-1',
      isActive: {
      },
      lists: {

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
        this.active = 'Mycomponent-1'
        this.isActive = []
        this.isActive[0] = 'is-active'
      }
      if(element == 2){
        this.active = 'Mycomponent-2'
        this.isActive = []
        this.isActive[1] = 'is-active'
      }
      if(element == 3){
        this.active = 'Mycomponent-3'
        this.isActive = []
        this.isActive[2] = 'is-active'
      }
      if(element == 4){
        this.active = 'MycomponentChart'
        this.isActive = []
        this.isActive[3] = 'is-active'
      }
    },
  }
}
</script>
