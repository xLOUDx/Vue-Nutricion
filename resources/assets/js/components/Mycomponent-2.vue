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
                <input :class="{'is-danger':errors.weight}" v-model="list.weight" class="input" type="text">
                <span class="icon is-small is-right">
                  <i v-if="errors.weight" class="fas fa-exclamation-triangle"></i>
                </span>
              </div>
            </div>
          </div>
          <small v-if="errors.weight" class="has-text-danger">{{ errors.weight[0] }}</small>
        </div>

        <div class="field is-horizontal">
          <div class="field-label is-normal">
            <label class="label">IMC</label>
          </div>
          <div class="field-body">
            <div class="field">
              <div class="control">
                <input :class="{'is-danger':errors.imc}" v-model="list.imc" class="input" type="text">
                <span class="icon is-small is-right">
                  <i v-if="errors.imc" class="fas fa-exclamation-triangle"></i>
                </span>
              </div>
            </div>
          </div>
          <small v-if="errors.imc" class="has-text-danger">{{ errors.imc[0] }}</small>
        </div>

        <div class="field is-horizontal">
          <div class="field-label is-normal">
            <label class="label">Ansiedad</label>
          </div>
          <div class="field-body">
            <div class="field">
              <div class="control">
                <input :class="{'is-danger':errors.anxiety}" v-model="list.anxiety" class="input" type="text">
                <span class="icon is-small is-right">
                  <i v-if="errors.anxiety" class="fas fa-exclamation-triangle"></i>
                </span>
              </div>
            </div>
          </div>
          <small v-if="errors.anxiety" class="has-text-danger">{{ errors.anxiety[0] }}</small>
        </div>

        <div class="field is-horizontal">
          <div class="field-label is-normal">
            <label class="label">Digestión</label>
          </div>
          <div class="field-body">
            <div class="field">
              <div class="control">
                <input :class="{'is-danger':errors.digestion}" v-model="list.digestion" class="input" type="text">
                <span class="icon is-small is-right">
                  <i v-if="errors.digestion" class="fas fa-exclamation-triangle"></i>
                </span>
              </div>
            </div>
          </div>
          <small v-if="errors.digestion" class="has-text-danger">{{ errors.digestion[0] }}</small>
        </div>

        <div class="field is-horizontal">
          <div class="field-label is-normal">
            <label class="label">Ejercicio</label>
          </div>
          <div class="field-body">
            <div class="field">
              <div class="control">
                <input :class="{'is-danger':errors.exercise}" v-model="list.exercise" class="input" type="text">
                <span class="icon is-small is-right">
                  <i v-if="errors.exercise" class="fas fa-exclamation-triangle"></i>
                </span>
              </div>
            </div>
          </div>
          <small v-if="errors.exercise" class="has-text-danger">{{ errors.exercise[0] }}</small>
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
                <span class="icon is-small is-right">
                  <i v-if="errors.liquids" class="fas fa-exclamation-triangle"></i>
                </span>
              </div>
            </div>
          </div>
          <small v-if="errors.liquids" class="has-text-danger">{{ errors.liquids[0] }}</small>
        </div>

        <div class="field is-horizontal">
          <div class="field-label is-normal">
            <label class="label">Talla/T2 </label>
          </div>
          <div class="field-body">
            <div class="field">
              <div class="control">
                <input :class="{'is-danger':errors.size_t2}" v-model="list.size_t2" class="input" type="text">
                <span class="icon is-small is-right">
                  <i v-if="errors.size_t2" class="fas fa-exclamation-triangle"></i>
                </span>
              </div>
            </div>
          </div>
          <small v-if="errors.size_t2" class="has-text-danger">{{ errors.size_t2[0] }}</small>
        </div>

        <div class="field is-horizontal">
          <div class="field-label is-normal">
            <label class="label">Peso deseado</label>
          </div>
          <div class="field-body">
            <div class="field">
              <div class="control">
                <input :class="{'is-danger':errors.desired_weight}" v-model="list.desired_weight" class="input" type="text">
                <span class="icon is-small is-right">
                  <i v-if="errors.desired_weight" class="fas fa-exclamation-triangle"></i>
                </span>
              </div>
            </div>
          </div>
          <small v-if="errors.desired_weight" class="has-text-danger">{{ errors.desired_weight[0] }}</small>
        </div>

        <div class="field is-horizontal">
          <div class="field-label is-normal">
            <label class="label">Mg normal</label>
          </div>
          <div class="field-body">
            <div class="field">
              <div class="control">
                <input :class="{'is-danger':errors.mg_normal}" v-model="list.mg_normal" class="input" type="text">
                <span class="icon is-small is-right">
                  <i v-if="errors.mg_normal" class="fas fa-exclamation-triangle"></i>
                </span>
              </div>
            </div>
          </div>
          <small v-if="errors.mg_normal" class="has-text-danger">{{ errors.mg_normal[0] }}</small>
        </div>

        <div class="field is-horizontal">
          <div class="field-label is-normal">
            <label class="label">Kg/Km</label>
          </div>
          <div class="field-body">
            <div class="field">
              <div class="control">
                <input :class="{'is-danger':errors.kg_km}" v-model="list.kg_km" class="input" type="text">
                <span class="icon is-small is-right">
                  <i v-if="errors.kg_km" class="fas fa-exclamation-triangle"></i>
                </span>
              </div>
            </div>
          </div>
          <small v-if="errors.kg_km" class="has-text-danger">{{ errors.kg_km[0] }}</small>
        </div>

        <div class="field is-horizontal">
          <div class="field-label is-normal">
            <label class="label">Proyección de tratamiento</label>
          </div>
          <div class="field-body">
            <div class="field">
              <div class="control">
                <input :class="{'is-danger':errors.projection_treatment}" v-model="list.projection_treatment" class="input" type="text">
                <span class="icon is-small is-right">
                  <i v-if="errors.projection_treatment" class="fas fa-exclamation-triangle"></i>
                </span>
              </div>
            </div>
          </div>
          <small v-if="errors.projection_treatment" class="has-text-danger">{{ errors.projection_treatment[0] }}</small>
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
                <td> <input :class="{'is-danger':errors.se}" v-model="list.se" class="input" type="text"> </td>
                <td> <input :class="{'is-danger':errors.tri}" v-model="list.tri" class="input" type="text"> </td>
                <td> <input :class="{'is-danger':errors.bi}" v-model="list.bi" class="input" type="text"> </td>
                <td> <input :class="{'is-danger':errors.si}" v-model="list.si" class="input" type="text"> </td>
                <td class="is-success" > <strong> <p> total </p> </strong> </td>
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
    props:['openmodal'],
    data(){
      return{
        list: {
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
          this.close()
          this.$parent.lists.push(this.$data.list)
        })
          .catch((error) => this.errors = error.response.data.errors)
      }
    }
  }
</script>
