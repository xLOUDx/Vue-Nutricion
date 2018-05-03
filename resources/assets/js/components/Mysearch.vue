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
        <input class="input" type="text" placeholder="Buscar" v-model="search">
        <span class="icon is-small is-left">
          <i class="fas fa-search"></i>
        </span>
      </p>
    </div>
    <a class="panel-block is-active" v-for="item, key in temp.slice(0, 10)"  @click="details(item.id)" >
      <span class="panel-icon">
        <i class="fas fa-address-card fa-1x"></i>
      </span>
      {{ item.name }}
    </a>


    <Mycomponent-0 :openmodal='AddActive' @closeRequest='close'> </Mycomponent-0>

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
      search: '',
      temp: '',

    }
  },
  mounted(){
    axios.post('/getDataPatient')
    .then((response) => this.patient = this.temp = response.data)
      .catch((error) => this.errors = error.response.data.errors)
  },

  watch: {
    search(){
      if(this.search.length > 0){
        this.temp = this.patient.filter((item)=>{
          return Object.keys(item).some((key)=>{
            let string = String(item[key])
            return string.toLowerCase().indexOf(this.search.toLowerCase())>-1

          })
        });
      }
      else{
        this.temp = this.patient
      }
    }

  },
  methods:{
    openAdd(){
      this.AddActive = 'is-active';
    },
    close(){
      this.AddActive = '';
    },
    details(iden){
        this.$router.push({ name: 'MyPatients', params: { iden: iden }});
    },
  }
}
</script>
