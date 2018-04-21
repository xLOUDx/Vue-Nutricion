<script>
import { Line } from 'vue-chartjs';

export default {
   props: ['iden'],
   extends: Line,
   mounted() {
         let weight = new Array();
         axios.post('getData', {iden: this.iden}).then((response) => {
            let data = response.data;
            if(data) {
               data.forEach(element => {
               weight.push(element.weight);
               });
               this.renderChart({
               labels: weight,
               datasets: [{
                  label: 'Bitcoin',
                  backgroundColor: '#FC2525',
                  data: weight
            }]
         }, {responsive: true, maintainAspectRatio: false})
       }
       else {
          console.log('No data');
       }
      });
   }
}
</script>
