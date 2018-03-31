<template lang="html">

  <div class="container">

    <hr>
    <p class="subtitle is-4">#NOMBRE</p>
    <h6 class="is-pulled-left" > <strong>Run: </strong> #11.111.111-1 </h6>
    <div class="field is-grouped is-grouped-centered">
      <h6 class="is-pulled-left" > <strong>Fono:</strong> #+56911111111 </h6> <br>
    </div>
    <h6 class="is-pulled-left" > <strong>Dirección:</strong> #laguna 123 </h6>
    <div class="field is-grouped is-grouped-centered">
      <h6 class="is-pulled-left" > <strong> Previsión:</strong> #Ninguna </h6>
    </div>
      <h6 class="is-pulled-left" > <strong> Ocupación:</strong> #Cantante</h6>
    <div class="field is-grouped is-grouped-centered">
      <h6 class="is-pulled-left" > <strong> Mail:</strong> #prueba@prueba.cl </h6>
    </div> <br>
    <h6 class="is-pulled-left" > <strong> Sra: </strong> #la cantante</h6> <br> <br>

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
        <h6>Referencia: </h6>
      </div>

      <div class="">
        <p class="">Edad: #10 </p>
        <p class="">Talla:  #50  t<sup>2</sup>:  </p>
        <p class="">Peso aceptable: # Pd:#20 </p>
        <p class="">IMC 25: #  </p>
      </div>
  </div>
  <hr>

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
          <tbody>
            <tr  >
              <th>1</th>
              <td>aksdfjasdf</td>
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
              <td>aksdfjasdf</td>
            </tr>

          </tbody>
        </table>
        <div class="field is-grouped is-grouped-centered">
          <p class="control is-pulled-center">
            <a class="button is-success" @click="openAdd" >
               <i class="fas fa-plus-square fa-2x"></i>
            </a>
          </p>
      </div>
      </article>
    </div>

    <div class="tile is-parent">
      <article class="tile is-child notification">
        <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth" >
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
            <tr  >
              <th>1</th>
              <td>aksdfjasdf</td>
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
              <td>aksdfjasdf</td>
            </tr>

          </tbody>
        </table>
        <div class="field is-grouped is-grouped-centered">
          <p class="control is-pulled-center">
            <a class="button is-success" @click="openAdd" >
               <i class="fas fa-plus-square fa-2x"></i>
            </a>
          </p>
      </div>
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
              <th>Total</th>
              <th>%Mg</th>
              <th>Cintura</th>
              <th>Cadera</th>
              <th>Muslo</th>
              <th>Braq</th>
              <th>muñeca</th>
            </tr>
          </thead>
          <tbody>
            <tr  >
              <th>1</th>
              <td>aksdfjasdf</td>
              <td>aksdfjasdf</td>
              <td>aksdfjasdf</td>
              <td>aksdfjasdf</td>
              <td>aksdfjasdf</td>
              <td>aksdfjasdf</td>
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
              <td>aksdfjasdf</td>
              <td>aksdfjasdf</td>
              <td>aksdfjasdf</td>
              <td>aksdfjasdf</td>
              <td>aksdfjasdf</td>
              <td>aksdfjasdf</td>
            </tr>

          </tbody>
        </table>
        <div class="field is-grouped is-grouped-centered">
          <p class="control is-pulled-center">
            <a class="button is-success" @click="openAdd" >
               <i class="fas fa-plus-square fa-2x"></i>
            </a>
          </p>
      </div>
      </article>
    </div>

    <Add_1 :openmodal='AddActive' @closeRequest='close'> </Add_1>

  </div>

</template>

<script>
export default {
  data(){
    return{
      AddActive: ''
    }
  },
  methods:{
    openAdd(){
      this.AddActive = 'is-active';
    },
    close(){
      this.AddActive = '';
    }
  }
}
</script>

<style lang="css">
</style>
