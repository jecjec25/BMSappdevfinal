<template>
    <div class ="cons">
        <table>
            <thead>
                <tr>
                    <th>Official ID</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Term Start</th>
                    <th>Term End</th>
                    <th>Term Index</th>
                    <th>Current</th>
                    <th>Remarks</th>                 
                </tr>
            </thead>
            <tbody>
                <tr v-for="Brgyofficial in Brgyofficial">
                    <td>{{ Brgyofficial.official_id }}</td>
                    <td>{{ Brgyofficial.last_name }}</td>
                    <td>{{ Brgyofficial.first_name }}</td>
                    <td>{{ Brgyofficial.term_start }}</td>
                    <td>{{ Brgyofficial.term_end }}</td>
                    <td>{{ Brgyofficial.term_index }}</td>
                    <td>{{ Brgyofficial.set_current }}</td>
                    <td>{{ Brgyofficial.remarks }}</td>
                </tr>
            </tbody>
        </table>
    </div> 
</template>

<script>

import axios from 'axios'
export default{
  
    data(){
        return{
            Brgyofficial:[],   
        }
    },
    created(){
      this.getInfo();   
    },
        methods:{
            async getInfo(){
                try {
                    const inf = await axios.get('admin/brgyofficials');
                    this.Brgyofficial = inf.data;
                } catch (error) {
                    console.log(error);    
                }
            }
        }
        }
</script>
<style>
table {
  width: 50%;
    
}
.cons{
    overflow-y:scroll;
}
th, td {
  width: 90px; /* Adjust the percentage as needed */
}
</style>
