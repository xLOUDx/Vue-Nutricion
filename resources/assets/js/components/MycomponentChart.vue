vue<script>
import { Line, mixins } from 'vue-chartjs';
import moment from 'moment'
// const { reactiveProp } = mixins


export default {
   props: ['iden'],
  //  mixins: [reactiveProp],
   extends: Line,
   mounted() {
         let weight = new Array();
         let projection_treatment = new Array();
         let date = new Array();
         axios.post('getData', {iden: this.iden}).then((response) => {
            let data = response.data;
            if(data) {
               data.forEach(element => {
               weight.push(element.weight);
               projection_treatment.push(element.projection_treatment);
               date.push(moment(element.date).format('MMMM Do YYYY'))
               });
               this.renderChart({
               labels: date,
               datasets: [
                 {
                  lineTension: 0,
                  borderWidth:3,
                  borderColor: '#3CF705',
                  pointBackgroundColor: '#229954',
                  label: 'Peso',
                  data: weight
                },{
                  lineTension: 0,
                  borderWidth:3,
                  borderColor: '#05A6F7',
                  pointBackgroundColor: '#229954',
                  label: 'Proyección',
                  data: projection_treatment
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
