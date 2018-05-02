<template lang="html">
  <div class="container">

    <div class="columns notification">
      <div class="column is-half">

        <div class="field is-horizontal">
          <div class="field-label is-normal">
            <label class="label">Peso</label>
          </div>
          <div class="field-body">
            <div class="field">
              <div class="control">
                <input :class="{'is-danger':errors.weight}" v-on:blur="IMC()" v-model="list.weight" class="input" type="text">
              </div>
            </div>
          </div>
        </div>

        <div class="field is-horizontal">
          <div class="field-label is-normal">
            <label class="label">T <sup>2</sup> </label>
          </div>
          <div class="field-body">
            <div class="field">
              <div class="control">
                <input :class="{'is-danger':errors.size_t2}" v-on:blur="IMC()" v-model="list.size_t2" class="input" type="text">
              </div>
            </div>
          </div>
        </div>

        <div class="field is-horizontal">
          <div class="field-label is-normal">
            <label class="label">IMC</label>
          </div>
          <div class="field-body">
            <div class="field">
              <div class="control">
                <input :class="{'is-danger':errors.imc}" v-model="list.imc" class="input" type="text">
              </div>
            </div>
          </div>
        </div>

        <div class="field is-horizontal">
          <div class="field-label is-normal">
            <label class="label">Digestión</label>
          </div>
          <div class="field-body">
            <div class="field">
              <div class="control">
                <input :class="{'is-danger':errors.anxiety}" v-model="list.digestion" class="input" type="text">
              </div>
            </div>
          </div>
        </div>

        <div class="field is-horizontal">
          <div class="field-label is-normal">
            <label class="label">Ejercicio</label>
          </div>
          <div class="field-body">
            <div class="field">
              <div class="control">
                <input :class="{'is-danger':errors.exercise}" v-model="list.exercise" class="input" type="text">
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="column notification">

        <div class="field is-horizontal">
          <div class="field-label is-normal">
            <label class="label">Liquidos</label>
          </div>
          <div class="field-body">
            <div class="field">
              <div class="control">
                <input :class="{'is-danger':errors.liquids}" v-model="list.liquids" class="input" type="text">
              </div>
            </div>
          </div>
        </div>

        <div class="field is-horizontal">
          <div class="field-label is-normal">
            <label class="label">Ansiedad</label>
          </div>
          <div class="field-body">
            <div class="field">
              <div class="control">
                <input :class="{'is-danger':errors.anxiety}" v-model="list.anxiety" class="input" type="text">
              </div>
            </div>
          </div>
        </div>

        <div class="field is-horizontal">
          <div class="field-label is-normal">
            <label class="label">Peso deseado</label>
          </div>
          <div class="field-body">
            <div class="field">
              <div class="control">
                <input :class="{'is-danger':errors.desired_weight}" v-model="list.desired_weight" class="input" type="text">
              </div>
            </div>
          </div>
        </div>

        <div class="field is-horizontal">
          <div class="field-label is-normal">
            <label class="label">Mg normal</label>
          </div>
          <div class="field-body">
            <div class="field">
              <div class="control">
                <input :class="{'is-danger':errors.mg_normal}" v-model="list.mg_normal" class="input" type="text">
              </div>
            </div>
          </div>
        </div>
<!--
        <div class="field is-horizontal">
          <div class="field-label is-normal">
            <label class="label">Kg/Km</label>
          </div>
          <div class="field-body">
            <div class="field">
              <div class="control">
                <input :class="{'is-danger':errors.kg_km}" v-model="list.kg_km" class="input" type="text">
              </div>
            </div>
          </div>
        </div> -->

        <div class="field is-horizontal">
          <div class="field-label is-normal">
            <label class="label">Proyección de tratamiento</label>
          </div>
          <div class="field-body">
            <div class="field">
              <div class="control">
                <input :class="{'is-danger':errors.projection_treatment}" v-model="list.projection_treatment" class="input" type="text">
              </div>
            </div>
          </div>
        </div>

      </div>


    </div>
    <div style="background-color:lightgreen;">

      <div class="tile is-parent">
        <article class="tile is-child notification">
          <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth" >
            <thead>
              <tr>
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
            <tbody>
              <tr>
                <td> <input :class="{'is-danger':errors.se}" v-on:blur="TOTAL()" v-model="list.se" class="input" type="text"> </td>
                <td> <input :class="{'is-danger':errors.tri}" v-on:blur="TOTAL()" v-model="list.tri" class="input" type="text"> </td>
                <td> <input :class="{'is-danger':errors.bi}" v-on:blur="TOTAL()" v-model="list.bi" class="input" type="text"> </td>
                <td> <input :class="{'is-danger':errors.si}" v-on:blur="TOTAL()" v-model="list.si" class="input" type="text"> </td>
                <td class="is-success" > <input :class="{'is-danger':errors.total}" v-model="list.total" class="input" type="text" data-value="asd"> </td>
                <td> <input :class="{'is-danger':errors.mg}" v-model="list.mg" class="input" type="text"> </td>
                <td> <input :class="{'is-danger':errors.waist}" v-model="list.waist" class="input" type="text"> </td>
                <td> <input :class="{'is-danger':errors.hip}" v-model="list.hip" class="input" type="text"> </td>
                <td> <input :class="{'is-danger':errors.thigh}" v-model="list.thigh" class="input" type="text"> </td>
                <td> <input :class="{'is-danger':errors.braq}" v-model="list.braq" class="input" type="text"> </td>
                <td> <input :class="{'is-danger':errors.wrist}" v-model="list.wrist" class="input" type="text"> </td>
              </tr>
            </tbody>
          </table>
        </article>
      </div>

    </div>

    <div class="field is-grouped is-grouped-centered">
      <p class="control">
        <a class="button is-primary" @click="save" >
          Guardar
        </a>
      </p>
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
          weight: '',
          imc: '',
          anxiety: '',
          exercise: '',
          digestion: '',
          liquids: '',
          size_t2: '',
          desired_weight: '',
          mg_normal: '',
          kg_km: '',
          projection_treatment: '',
          se: '',
          tri: '',
          bi: '',
          si: '',
          total: '',
          mg: '',
          waist: '',
          hip: '',
          thigh: '',
          braq: '',
          wrist: ''
        },

        errors: {

        }
      }
    },
    methods:{
      save(){
        axios.post('/search/patients', this.$data.list).then((response) => {
          alert('Datos ingresados correctamente')
          this.list = [];
        })
          .catch((error) => {
            this.errors = error.response.data.errors
            alert('Datos incorrectos.')
          })

      },
      IMC(){
        //ARREGLAR
          this.list.imc = parseInt(this.list.weight)
           * (parseInt(this.list.size_t2)
          //  * parseInt(this.list.size_t2)
         )
      },
      TOTAL(){
        this.list.total =
          parseInt(this.list.se) +
          parseInt(this.list.tri) +
          parseInt(this.list.bi) +
          parseInt(this.list.si)
      }
    }
  }
</script>
