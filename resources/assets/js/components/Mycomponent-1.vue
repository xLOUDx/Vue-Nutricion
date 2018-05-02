<template lang="html">

  <div class="container" id="toPdf">

    <div class="columns notification" v-for="item in patient" >

      <button
        @click="makePdf(item.name, item.last_name_pat)"
        class="button is-warning" type="button" name="button">
        Generar PDF
      </button>

      <div class="column is-three-quarters ">
        <p class="subtitle is-4">Evaluación periodica</p>
        <h6> <strong> Referencia: </strong> </h6> <br>
        <p> {{ item.reference }} </p>
      </div>

      <div>
        <p> <strong> Edad: </strong> {{ item.age }} </p>
        <p> <strong> Talla: </strong>  {{ item.size }}  t<sup>2</sup>: {{ item.t2 }} </p>
        <p> <strong> Peso aceptable: </strong> {{ item.acept_size }}</p>
        <p> <strong> IMC 25: </strong> {{ item.imc_25 }} </p>
      </div>
  </div>
  <hr>

    <!-- <div class="tile is-parent">
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
    </div> -->

    <div id="prueba" class="tile is-parent">
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

  </div>

</template>

<script>
import jsPDF from 'jspdf'
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
  mounted(){

    axios.post('/getData', {iden: this.iden})
    .then((response) => this.lists = response.data)
      .catch((error) => this.errors = error.response.data.errors)

      axios.post('/getDataPatient', {iden: this.iden})
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
    makePdf(name, lastname) {
      var specialElementHandlers = {
                 '#toPdf': function(element, renderer){
                     return true;
                 },
             };

             let doc = new jsPDF('p', 'pt', 'ledger');
             var source = document.getElementById('toPdf'); //$('#HTMLtoPDF')[0];
             doc.fromHTML(
                 source, 100, 15, {
                   'elementHandlers': specialElementHandlers
                 }
             );
             doc.save( name + ' ' + lastname + '.pdf');
    }
  }
}
</script>
