

<script>
import { Line, mixins } from 'vue-chartjs';
import moment from 'moment'
// const { reactiveProp } = mixins


export default {
   props: ['iden'],
  //  mixins: [reactiveProp],
   extends: Line,
   mounted() {
         let weight = new Array();
         let thigh = new Array();
         let calq = new Array();
         let projection_treatment = new Array();
         let date = new Array();
         axios.post('/getData', {iden: this.iden}).then((response) => {
            let data = response.data;
            if(data) {
               data.forEach(element => {
               weight.push(element.weight);
               thigh.push(element.thigh);
               calq.push(parseInt(element.hip) / parseInt(element.waist));
               projection_treatment.push(parseInt(element.weight[0]) - parseInt(element.projection_treatment) );
               date.push(moment(element.date).format('MMMM Do YYYY'))
               });
               this.renderChart({
               labels: date,
               datasets: [
                 {
                  lineTension: 0,
                  borderWidth:3,
                  borderColor: '#A357D9',
                  pointBackgroundColor: '#229954',
                  label: 'Peso',
                  data: weight
                },{
                  lineTension: 0,
                  borderWidth:3,
                  borderColor: '#35CC85',
                  pointBackgroundColor: '#229954',
                  label: 'Proyección',
                  data: projection_treatment
                },{
                  lineTension: 0,
                  borderWidth:3,
                  borderColor: '#FE9321',
                  pointBackgroundColor: '#229954',
                  label: 'Muslo',
                  data: thigh
                },{
                  lineTension: 0,
                  borderWidth:3,
                  borderColor: '#21FE38',
                  pointBackgroundColor: '#229954',
                  label: 'Perimetro',
                  data: calq
                } ]

         }, {responsive: true, maintainAspectRatio: false})
       }
       else {
          console.log('No data');
       }
      });
   },
   methods: {
     moment(date) {
       moment.locale('es');
       return moment(date);
     }
   }
}
</script>
