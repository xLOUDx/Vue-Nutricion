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
        <label class="label">Referencia</label>
        <div class="control has-icons-right">
          <input :class="{'is-danger':errors.reference}" class="input" type="text" placeholder="Ingrese nombre" v-model="list.reference" >
        <span class="icon is-small is-right">
          <i v-if="errors.reference" class="fas fa-exclamation-triangle"></i>
        </span>
      </div>
        <small v-if="errors.reference" class="has-text-danger">{{ errors.reference[0] }}</small>
      </div>

      <div class="field">
        <label class="label">Nombre</label>
        <div class="control has-icons-right">
          <input :class="{'is-danger':errors.name}" class="input" type="text" placeholder="Ingrese nombre" v-model="list.name" >
        <span class="icon is-small is-right">
          <i v-if="errors.name" class="fas fa-exclamation-triangle"></i>
        </span>
      </div>
        <small v-if="errors.name" class="has-text-danger">{{ errors.name[0] }}</small>
      </div>


      <div class="field">
        <label class="label">Apellido paterno</label>
        <div class="control has-icons-right">
          <input :class="{'is-danger':errors.name}" class="input" type="text" placeholder="Ingrese apellido paterno" v-model="list.last_name_pat">
          <span class="icon is-small is-right">
            <i v-if="errors.name" class="fas fa-exclamation-triangle"></i>
          </span>
        </div>
        <small v-if="errors.last_name_pat" class="has-text-danger">{{ errors.last_name_pat[0] }}</small>

      </div>

      <div class="field">
        <label class="label">Apellido materno</label>
        <div class="control has-icons-right">
          <input :class="{'is-danger':errors.name}" class="input" type="text" placeholder="Ingrese apellido materno" v-model="list.last_name_mat">
          <span class="icon is-small is-right">
            <i v-if="errors.name" class="fas fa-exclamation-triangle"></i>
          </span>
        </div>
        <small v-if="errors.last_name_mat" class="has-text-danger">{{ errors.last_name_mat[0] }}</small>
      </div>

      <div class="field">
        <label class="label">Email</label>
        <div class="control has-icons-right">
          <input :class="{'is-danger':errors.name}" class="input" type="email" placeholder="Ingrese email" v-model="list.email">
          <span class="icon is-small is-right">
            <i v-if="errors.name" class="fas fa-exclamation-triangle"></i>
          </span>
        </div>
        <small v-if="errors.email" class="has-text-danger">{{ errors.email[0] }}</small>
      </div>

      <div class="field">
        <label class="label">Run</label>
        <div class="control has-icons-right">
          <input :class="{'is-danger':errors.name}" class="input" type="text" placeholder="Ingrese run" v-model="list.run">
          <span class="icon is-small is-right">
            <i v-if="errors.name" class="fas fa-exclamation-triangle"></i>
          </span>
        </div>
        <small v-if="errors.run" class="has-text-danger">{{ errors.run[0] }}</small>
      </div>

      <div class="field">
        <label class="label">Previsión</label>
        <div class="control has-icons-right">
          <input :class="{'is-danger':errors.name}" class="input" type="text" placeholder="Ingrese previsión" v-model="list.prevision">
          <span class="icon is-small is-right">
            <i v-if="errors.name" class="fas fa-exclamation-triangle"></i>
          </span>
        </div>
        <small v-if="errors.prevision" class="has-text-danger">{{ errors.prevision[0] }}</small>
      </div>

      <div class="field">
        <label class="label">Dirección</label>
        <div class="control has-icons-right">
          <input :class="{'is-danger':errors.name}" class="input" type="text" placeholder="Ingrese dirección" v-model="list.address">
          <span class="icon is-small is-right">
            <i v-if="errors.name" class="fas fa-exclamation-triangle"></i>
          </span>
        </div>
        <small v-if="errors.address" class="has-text-danger">{{ errors.address[0] }}</small>
      </div>

      <div class="field">
        <label class="label">Ocupación</label>
        <div class="control has-icons-right">
          <input :class="{'is-danger':errors.name}" class="input" type="text" placeholder="Ingrese ocupación" v-model="list.job">
          <span class="icon is-small is-right">
            <i v-if="errors.name" class="fas fa-exclamation-triangle"></i>
          </span>
        </div>
        <small v-if="errors.job" class="has-text-danger">{{ errors.job[0] }}</small>
      </div>

      <div class="field">
        <label class="label">Teléfono</label>
        <div class="control has-icons-right">
          <input :class="{'is-danger':errors.name}" class="input" type="text" placeholder="Ingrese telefono" v-model="list.phone">
          <span class="icon is-small is-right">
            <i v-if="errors.name" class="fas fa-exclamation-triangle"></i>
          </span>
        </div>
        <small v-if="errors.phone" class="has-text-danger">{{ errors.phone[0] }}</small>
      </div>

      <div class="field">
        <label class="label">Edad</label>
        <div class="control has-icons-right">
          <input :class="{'is-danger':errors.name}" class="input" type="number" placeholder="Ingrese edad" v-model="list.age">
          <span class="icon is-small is-right">
            <i v-if="errors.name" class="fas fa-exclamation-triangle"></i>
          </span>
        </div>
        <small v-if="errors.age" class="has-text-danger">{{ errors.age[0] }}</small>
      </div>

      <div class="field">
        <label class="label">Talla</label>
        <div class="control has-icons-right">
          <input :class="{'is-danger':errors.name}" class="input" v-on:blur="t2()" type="text" placeholder="Ingrese talla" v-model="list.size">
          <span class="icon is-small is-right">
            <i v-if="errors.name" class="fas fa-exclamation-triangle"></i>
          </span>
        </div>
        <small v-if="errors.size" class="has-text-danger">{{ errors.size[0] }}</small>
      </div>

      <div class="field">
        <label class="label">Peso deseado</label>
        <div class="control has-icons-right">
          <input :class="{'is-danger':errors.name}" class="input" type="text" placeholder="Ingrese talla deseada" v-model="list.acept_size">
          <span class="icon is-small is-right">
            <i v-if="errors.name" class="fas fa-exclamation-triangle"></i>
          </span>
        </div>
        <small v-if="errors.acept_size" class="has-text-danger">{{ errors.acept_size[0] }}</small>
      </div>

      <div class="field">
        <label class="label">T <sup>2</sup></label>
        <div class="control has-icons-right">
          <input :class="{'is-danger':errors.name}" class="input" v-on:blur="IMC()" type="text" placeholder="Ingrese T2​"  v-model="list.t2">
          <span class="icon is-small is-right">
            <i v-if="errors.name" class="fas fa-exclamation-triangle"></i>
          </span>
        </div>
        <small v-if="errors.t2" class="has-text-danger">{{ errors.t2[0] }}</small>
      </div>

      <div class="field">
        <label class="label">IMC</label>
        <div class="control has-icons-right">
          <input :class="{'is-danger':errors.name}" class="input" type="text" placeholder="Ingrese IMC 25" v-model="list.imc_25">
          <span class="icon is-small is-right">
            <i v-if="errors.name" class="fas fa-exclamation-triangle"></i>
          </span>
        </div>
        <small v-if="errors.imc_25" class="has-text-danger">{{ errors.imc_25[0] }}</small>
      </div>

      <div class="field">
        <label class="label">Acompañante</label>
        <div class="control has-icons-right">
          <input :class="{'is-danger':errors.name}" class="input" type="text" placeholder="Ingrese acompañante" v-model="list.sra">
          <span class="icon is-small is-right">
            <i v-if="errors.name" class="fas fa-exclamation-triangle"></i>
          </span>
        </div>
        <small v-if="errors.sra" class="has-text-danger">{{ errors.imc_25[0] }}</small>
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
          reference: '',
          name: '',
          last_name_pat: '',
          last_name_mat: '',
          email: '',
          run: '',
          prevision: '',
          address: '',
          job: '',
          phone: '',
          age: '',
          size: '',
          acept_size: '',
          t2: '',
          imc_25: '',
          sra: ''
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
        axios.post('/search', this.$data.list).then((response) => {
          this.close()
          this.$parent.patient.push(response.data)
        })
          .catch((error) => this.errors = error.response.data.errors)
      },
      t2(){
        this.list.t2 = Math.pow(parseInt(this.list.size), 2)
      },
      IMC(){
        this.list.imc_25 = parseInt(this.list.size) / parseInt(this.list.t2)
      }
    }
  }
</script>
