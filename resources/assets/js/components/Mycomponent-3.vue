<template lang="html">

  <div class="container" id="toPdf">

    <h1 class="subtitle is-3" > Observaciones </h1>

    <div class="field is-horizontal">
      <div class="field-body">
        <div class="field">
          <div class="control ">
            <textarea v-model="list.body" class="textarea"></textarea>
          </div>
        </div>
      </div>
    </div>

    <div class="field is-horizontal">
      <div class="field-body">
        <div class="field">
          <div class="control">
            <button class="button is-primary" @click="save">
              Guardar
            </button>
          </div>
        </div>
      </div>
    </div> <hr> <br>

    <div class="field is-horizontal">
      <div class="field-body">
        <div class="field">
          <div class="control">
            <button
              @click="makePdf"
              class="button is-warning" type="button" name="button">
              Generar PDF
            </button>
          </div>
        </div>
      </div>
    </div> <br>

    <article class="media notification" v-for="item, key in comments" >
      <div class="media-content">
        <div class="content">
          <p>
            <strong>{{ key + 1 }}</strong> <br>
            <small>{{ moment(item.created_at).format('MMMM Do YYYY') }}</small> <small>31m</small>
            <br>
            {{ item.body }}
          </p>
        </div>
      </div>
      <div class="media-right">
        <button @click="destroy(key, item.id)" class="delete"></button>
      </div>

    </article>

  </div>

</template>

<script>
import moment from 'moment'
import jsPDF from 'jspdf'

export default {
  props:['iden'],
  data(){
    return{
      list: {
        patient_id: this.iden,
        body:''
      },
      errors: {

      },
      comments: {

      },
    }
  },
  mounted(){
    axios.post('/getDataComment', {iden: this.iden})
    .then((response) => this.comments = response.data)
      .catch((error) => this.errors = error.response.data.errors)

  },
  methods:{
    save(){
      axios.post('/search/patients/comment', this.$data.list).then((response) => {
        alert('Datos ingresados correctamente')
        this.comments.push(response.data)
        this.list = [];
      })
        .catch((error) => {
          this.errors = error.response.data.errors
          alert('Datos incorrectos.')
        })

    },
    destroy(key,id){
      let uri = `/items/${id}`;
                    // this.items.splice(id, 1);
                    this.axios.delete(uri);
    },
    moment(date) {
      moment.locale('es');
      return moment(date);
    },
    makePdf() {
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
             doc.save('Comentario.pdf');
    }
  }
}
</script>
