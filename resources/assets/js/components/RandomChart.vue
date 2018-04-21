<script>
import { Line, mixins } from 'vue-chartjs';
const { reactiveProp } = mixins


export default {
   props: ['iden'],
   mixins: [reactiveProp],
   extends: Line,
   mounted() {
         let weight = new Array();
         let imc = new Array();
         let date = new Array();
         axios.post('getData', {iden: this.iden}).then((response) => {
            let data = response.data;
            if(data) {
               data.forEach(element => {
               weight.push(element.weight);
               imc.push(element.imc);
               date.push(element.date)
               });
               this.renderChart({
               labels: date,
               datasets: [
                 {
                  lineTension: 0,
                  borderWidth:3,
                  borderColor: '#3CF705',
                  pointBackgroundColor: '#229954',
                  backgroundColor: 'transparent',
                  label: 'Peso',
                  data: weight
                },{
                  lineTension: 0,
                  borderWidth:3,
                  borderColor: '#05A6F7',
                  pointBackgroundColor: '#229954',
                  backgroundColor: 'transparent',
                  label: 'asd',
                  data: imc
                } ]

         }, {responsive: true, maintainAspectRatio: false})
       }
       else {
          console.log('No data');
       }
      });
   }
}
</script>
