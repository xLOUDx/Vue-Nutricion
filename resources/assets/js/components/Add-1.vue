<template lang="html">
  <div class="modal" :class='openmodal' >
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Formulario de paciente</p>
      <button class="delete" aria-label="close" @click='close'></button>
    </header>
    <section class="modal-card-body">

      <div class="field">
        <label class="label">Peso</label>
        <div class="control has-icons-right">
          <input :class="{'is-danger':errors.weight}"  class="input" type="text" placeholder="Ingrese Peso" v-model="list.weight" >
          <span class="icon is-small is-right">
            <i v-if="errors.weight" class="fas fa-exclamation-triangle"></i>
          </span>
        </div>
        <small v-if="errors.weight" class="has-text-danger">{{ errors.weight[0] }}</small>
      </div>

      <div class="field">
        <label class="label">IMC</label>
        <div class="control has-icons-right">
          <input :class="{'is-danger':errors.imc}" class="input" type="text" placeholder="Ingrese IMC" v-model="list.imc">
          <span class="icon is-small is-right">
            <i v-if="errors.imc" class="fas fa-exclamation-triangle"></i>
          </span>
        </div>
        <small v-if="errors.imc" class="has-text-danger">{{ errors.imc[0] }}</small>
      </div>

      <div class="field">
        <label class="label">Ansiedad</label>
        <div class="control has-icons-right">
          <input :class="{'is-danger':errors.anxiety}" class="input" type="text" placeholder="Ingrese Ansiedad" v-model="list.anxiety">
          <span class="icon is-small is-right">
            <i v-if="errors.anxiety" class="fas fa-exclamation-triangle"></i>
          </span>
        </div>
        <small v-if="errors.anxiety" class="has-text-danger">{{ errors.anxiety[0] }}</small>
      </div>

      <div class="field">
        <label class="label">Ejercicio</label>
        <div class="control has-icons-right">
          <input :class="{'is-danger':errors.exercise}" class="input" type="email" placeholder="Ingrese Ejercicio" v-model="list.exercise">
          <span class="icon is-small is-right">
            <i v-if="errors.exercise" class="fas fa-exclamation-triangle"></i>
          </span>
        </div>
        <small v-if="errors.exercise" class="has-text-danger">{{ errors.exercise[0] }}</small>
      </div>

      <div class="field">
        <label class="label">Digestión</label>
        <div class="control has-icons-right">
          <input :class="{'is-danger':errors.digestion}" class="input" type="text" placeholder="Ingrese Digestión" v-model="list.digestion">
          <span class="icon is-small is-right">
            <i v-if="errors.digestion" class="fas fa-exclamation-triangle"></i>
          </span>
        </div>
        <small v-if="errors.digestion" class="has-text-danger">{{ errors.digestion[0] }}</small>
      </div>

      <div class="field">
        <label class="label">Liquidos</label>
        <div class="control has-icons-right">
          <input :class="{'is-danger':errors.liquids}" class="input" type="text" placeholder="Ingrese Liquidos" v-model="list.liquids">
          <span class="icon is-small is-right">
            <i v-if="errors.liquids" class="fas fa-exclamation-triangle"></i>
          </span>
        </div>
        <small v-if="errors.liquids" class="has-text-danger">{{ errors.liquids[0] }}</small>
      </div>

      <div class="field">
        <label class="label">Talla/t2</label>
        <div class="control has-icons-right">
          <input :class="{'is-danger':errors.size_t2}" class="input" type="text" placeholder="Ingrese t2" v-model="list.size_t2">
          <span class="icon is-small is-right">
            <i v-if="errors.size_t2" class="fas fa-exclamation-triangle"></i>
          </span>
        </div>
        <small v-if="errors.size_t2" class="has-text-danger">{{ errors.size_t2[0] }}</small>
      </div>

      <div class="field">
        <label class="label">Peso deseado <sup>2</sup> </label>
        <div class="control has-icons-right">
          <input :class="{'is-danger':errors.desired_weight}" class="input" type="text" placeholder="Ingrese peso deseado" v-model="list.desired_weight">
          <span class="icon is-small is-right">
            <i v-if="errors.desired_weight" class="fas fa-exclamation-triangle"></i>
          </span>
        </div>
        <small v-if="errors.desired_weight" class="has-text-danger">{{ errors.desired_weight[0] }}</small>
      </div>

      <div class="field">
        <label class="label">%Mg normal</label>
        <div class="control has-icons-right">
          <input :class="{'is-danger':errors.mg_normal}" class="input" type="text" placeholder="Ingrese normal" v-model="list.mg_normal">
          <span class="icon is-small is-right">
            <i v-if="errors.mg_normal" class="fas fa-exclamation-triangle"></i>
          </span>
        </div>
        <small v-if="errors.mg_normal" class="has-text-danger">{{ errors.mg_normal[0] }}</small>
      </div>

      <div class="field">
        <label class="label">Kg/Mg</label>
        <div class="control has-icons-right">
          <input :class="{'is-danger':errors.kg_km}" class="input" type="text" placeholder="Ingrese Mg" v-model="list.kg_km">
          <span class="icon is-small is-right">
            <i v-if="errors.kg_km" class="fas fa-exclamation-triangle"></i>
          </span>
        </div>
        <small v-if="errors.kg_km" class="has-text-danger">{{ errors.kg_km[0] }}</small>
      </div>

      <div class="field">
        <label class="label">Proyección de tratamiento</label>
        <div class="control has-icons-right">
          <input :class="{'is-danger':errors.projection_treatment}" class="input" type="text" placeholder="Ingrese tratamiento" v-model="list.projection_treatment">
          <span class="icon is-small is-right">
            <i v-if="errors.projection_treatment" class="fas fa-exclamation-triangle"></i>
          </span>
        </div>
        <small v-if="errors.projection_treatment" class="has-text-danger">{{ errors.projection_treatment[0] }}</small>
      </div>

      <hr>

      <div class="field">
        <label class="label">Se</label>
        <div class="control has-icons-right">
          <input :class="{'is-danger':errors.se}" class="input" type="number" placeholder="Ingrese Se" v-model="list.se">
          <span class="icon is-small is-right">
            <i v-if="errors.se" class="fas fa-exclamation-triangle"></i>
          </span>
        </div>
        <small v-if="errors.se" class="has-text-danger">{{ errors.se[0] }}</small>
      </div>

      <div class="field">
        <label class="label">Tri</label>
        <div class="control has-icons-right">
          <input :class="{'is-danger':errors.tri}" class="input" type="number" placeholder="Ingrese Tri" v-model="list.tri">
          <span class="icon is-small is-right">
            <i v-if="errors.tri" class="fas fa-exclamation-triangle"></i>
          </span>
        </div>
        <small v-if="errors.tri" class="has-text-danger">{{ errors.tri[0] }}</small>
      </div>

      <div class="field">
        <label class="label">Bi</label>
        <div class="control has-icons-right">
          <input :class="{'is-danger':errors.bi}" class="input" type="number" placeholder="Ingrese Bi" v-model="list.bi">
          <span class="icon is-small is-right">
            <i v-if="errors.bi" class="fas fa-exclamation-triangle"></i>
          </span>
        </div>
        <small v-if="errors.bi" class="has-text-danger">{{ errors.bi[0] }}</small>
      </div>

      <div class="field">
        <label class="label">Si</label>
        <div class="control has-icons-right">
          <input :class="{'is-danger':errors.si}" class="input" type="number" placeholder="Ingrese" Si  v-model="list.si">
          <span class="icon is-small is-right">
            <i v-if="errors.si" class="fas fa-exclamation-triangle"></i>
          </span>
        </div>
        <small v-if="errors.si" class="has-text-danger">{{ errors.si[0] }}</small>
      </div>

      <div class="field">
        <label class="label">Total</label>
        <div class="control has-icons-right">
          <input :class="{'is-danger':errors.total}" class="input" type="number" placeholder="Ingrese Total" v-model="list.total">
          <span class="icon is-small is-right">
            <i v-if="errors.total" class="fas fa-exclamation-triangle"></i>
          </span>
        </div>
        <small v-if="errors.total" class="has-text-danger">{{ errors.total[0] }}</small>
      </div>

      <div class="field">
        <label class="label">Mg</label>
        <div class="control has-icons-right">
          <input :class="{'is-danger':errors.mg}" class="input" type="text" placeholder="Ingrese Mg" v-model="list.mg">
          <span class="icon is-small is-right">
            <i v-if="errors.mg" class="fas fa-exclamation-triangle"></i>
          </span>
        </div>
        <small v-if="errors.mg" class="has-text-danger">{{ errors.mg[0] }}</small>
      </div>

      <div class="field">
        <label class="label">Cintura</label>
        <div class="control has-icons-right">
          <input :class="{'is-danger':errors.waist}" class="input" type="text" placeholder="Ingrese Cintura" v-model="list.waist">
          <span class="icon is-small is-right">
            <i v-if="errors.waist" class="fas fa-exclamation-triangle"></i>
          </span>
        </div>
        <small v-if="errors.waist" class="has-text-danger">{{ errors.waist[0] }}</small>
      </div>

      <div class="field">
        <label class="label">Cadera</label>
        <div class="control has-icons-right">
          <input :class="{'is-danger':errors.hip}" class="input" type="text" placeholder="Ingrese Cadera" v-model="list.hip">
          <span class="icon is-small is-right">
            <i v-if="errors.hip" class="fas fa-exclamation-triangle"></i>
          </span>
        </div>
        <small v-if="errors.hip" class="has-text-danger">{{ errors.hip[0] }}</small>
      </div>

      <div class="field">
        <label class="label">Muslo</label>
        <div class="control has-icons-right">
          <input :class="{'is-danger':errors.thigh}" class="input" type="text" placeholder="Ingrese Muslo" v-model="list.thigh">
          <span class="icon is-small is-right">
            <i v-if="errors.thigh" class="fas fa-exclamation-triangle"></i>
          </span>
        </div>
        <small v-if="errors.thigh" class="has-text-danger">{{ errors.thigh[0] }}</small>
      </div>

      <div class="field">
        <label class="label">BRAQ</label>
        <div class="control has-icons-right">
          <input :class="{'is-danger':errors.braq}" class="input" type="text" placeholder="Ingrese BRAQ" v-model="list.braq">
          <span class="icon is-small is-right">
            <i v-if="errors.braq" class="fas fa-exclamation-triangle"></i>
          </span>
        </div>
        <small v-if="errors.braq" class="has-text-danger">{{ errors.braq[0] }}</small>
      </div>

      <div class="field">
        <label class="label">Muñeca</label>
        <div class="control has-icons-right">
          <input :class="{'is-danger':errors.wrist}" class="input" type="text" placeholder="Ingrese Muñeca" v-model="list.wrist">
          <span class="icon is-small is-right">
            <i v-if="errors.wrist" class="fas fa-exclamation-triangle"></i>
          </span>
        </div>
        <small v-if="errors.wrist" class="has-text-danger">{{ errors.wrist[0] }}</small>
      </div>

    </section>
    <footer class="modal-card-foot">
      <button class="button is-success" @click="save">Guardar</button>
      <button class="button" @click='close'>Cancelar</button>
    </footer>
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
      close(){
        this.$emit('closeRequest')
      },
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
