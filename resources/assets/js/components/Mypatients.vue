<template lang="html">

  <div class="container">
    <hr>

    <p class="subtitle is-2">
       <strong>
         {{ patient.name }} {{ patient.last_name_pat }} {{ patient.last_name_mat }}
       </strong>
    </p>

    <div class="notification">
    <h6 class="is-pulled-left" > <strong>Run: </strong> {{ patient.run }} </h6>
    <div class="field is-grouped is-grouped-centered">
      <h6 class="is-pulled-left" > <strong>Fono: </strong> {{ patient.phone }} </h6> <br>
    </div>
    <h6 class="is-pulled-left" > <strong>Dirección:</strong> {{ patient.phone }} </h6>
    <div class="field is-grouped is-grouped-centered">
      <h6 class="is-pulled-left" > <strong> Previsión: </strong> {{ patient.prevision }} </h6>
    </div>
      <h6 class="is-pulled-left" > <strong> Ocupación: </strong> {{ patient.job }} </h6>
    <div class="field is-grouped is-grouped-centered">
      <h6 class="is-pulled-left" > <strong> Mail: </strong> {{ patient.email }} </h6>
    </div> <br>
    <h6 class="is-pulled-left" > <strong> Sra: </strong> #la cantante</h6> <br> <br>
  </div>

    <div class="tabs">
      <ul>
        <li class="is-active"><a>Evaluación</a></li>
        <li><a>Observaciones</a></li>
        <li><a>Otro</a></li>
      </ul>
    </div>

    <div class="columns notification">

      <div class="column is-three-quarters ">
        <p class="subtitle is-4">Evaluación periodica</p>
        <h6> <strong> Referencia: </strong> </h6>
      </div>

      <div>
        <p> <strong> Edad: </strong> {{ patient.age }} </p>
        <p> <strong> Talla: </strong>  {{ patient.size }}  t<sup>2</sup>: {{ patient.t2 }} </p>
        <p> <strong> Peso aceptable: </strong> {{ patient.acept_size }}</p>
        <p> <strong> IMC 25: </strong> {{ patient.imc_25 }} </p>
      </div>
  </div>
  <hr>

<div class="field is-grouped is-grouped-centered">
  <p class="control">
    <a class="button is-success" @click="openAdd" >
      <i class="fas fa-plus-square fa-2x"></i>
    </a>
  </p>
</div>

    <div class="tile is-parent">
      <article class="tile is-child notification">
        <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
          <thead>
            <tr>
              <th>Edad</th>
              <th>Talla/T2 </th>
              <th>Peso deseado</th>
              <th>%Mg normal</th>
              <th>Kg/ Km</th>
              <th>Proyección de tratamiento</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>1</th>
              <td>aksdfjasdf</td>
              <td>aksdfjasdf</td>
              <td>aksdfjasdf</td>
              <td>aksdfjasdf</td>
              <td>aksdfjasdf</td>
            </tr>
            <tr>
              <th>2</th>
              <td>aksdfjasdf</td>
              <td>aksdfjasdf</td>
              <td>aksdfjasdf</td>
              <td>aksdfjasdf</td>
              <td>aksdfjasdf</td>
            </tr>

          </tbody>
        </table>
      </article>
    </div>

    <div class="tile is-parent">
      <article class="tile is-child notification">
        <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth" >
          <thead>
            <tr>
              <th>Fecha</th>
              <th>Peso</abbr></th>
              <th>IMC</th>
              <th>Ansiedad</th>
              <th>Ejercicio</th>
              <th>Digestión</th>
              <th>Liquidos</th>
            </tr>
          </thead>
          <tbody v-for="item, key in lists" >
            <tr>
              <th>{{ moment(item.created_at).format('MMMM Do YYYY') }}</th>
              <td>{{ item.weight }}</td>
              <td>{{ item.imc }}</td>
              <td>{{ item.anxiety }}</td>
              <td>{{ item.exercise }}</td>
              <td>{{ item.digestion }}</td>
              <td>{{ item.liquids }}</td>
            </tr>
          </tbody>
        </table>
      </article>
    </div>

    <div class="tile is-parent">
      <article class="tile is-child notification">
        <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth" >
          <thead>
            <tr>
              <th>Fecha</th>
              <th>SE</abbr></th>
              <th>TRI</th>
              <th>BI</th>
              <th>SI</th>
              <th class="is-success" >Total</th>
              <th>%Mg</th>
              <th>Cintura</th>
              <th>Cadera</th>
              <th>Muslo</th>
              <th>Braq</th>
              <th>muñeca</th>
            </tr>
          </thead>
          <tbody v-for="item, key in lists">
            <tr>
              <th>{{ moment(item.created_at).format('MMMM Do YYYY') }}</th>
              <td>{{ item.se }}</td>
              <td>{{ item.tri }}</td>
              <td>{{ item.bi }}</td>
              <td>{{ item.si }}</td>
              <td class="is-success" > <strong>{{ item.total }}</strong> </td>
              <td>{{ item.mg }}</td>
              <td>{{ item.waist }}</td>
              <td>{{ item.hip }}</td>
              <td>{{ item.thigh }}</td>
              <td>{{ item.braq }}</td>
              <td>{{ item.wrist }}</td>
            </tr>
          </tbody>
        </table>
      </article>
    </div>

    <Add-1 :openmodal='AddActive' @closeRequest='close'> </Add-1>
  </div>

</template>

<script>
import moment from 'moment'
export default {
  props:['iden'],
  data(){
    return{
      AddActive: '',
      lists: {

      },
      errors:{

      },
      patient: {

      },
    }
  },
  created(){
    console.log(this.iden)
  },
  mounted(){
    axios.post('/getData')
    .then((response) => this.lists = response.data)
      .catch((error) => this.errors = error.response.data.errors)

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
    moment(date) {
      moment.locale('es');
      return moment(date);
    },
  }
}
</script>


GRAFICO E PROYECCIÓN DE TRATAMIENTO
