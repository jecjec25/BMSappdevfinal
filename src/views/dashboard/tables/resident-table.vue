<template>
    <div class ="cons">
        <table>
            <thead>
                <tr>
                    <th>last_name</th>
                    <th>first_name</th>
                    <th>middle_name</th>
                    <th>birth_date</th>
                    <th>age</th>
                    <th>purok_id</th>
                    <th>civil_status</th>
                    <th>religion</th>
                    <th>gender</th>
                    <th>complete_address</th>
                    <th>contact_no</th>
                    <th>with_philhealth</th>
                    <th>with_sss</th>
                    <th>income</th>
                    <th>member_4ps</th>
                    <th>voter_status</th>                  
                </tr>
            </thead>
            <tbody>
                <tr v-for="resident in resident">
                    <td>{{ resident.last_name }}</td>
                    <td>{{ resident.first_name }}</td>
                    <td>{{ resident.middle_name }}</td>
                    <td>{{ resident.birth_date }}</td>
                    <td>{{ resident.age }}</td>
                    <td>{{ resident.purok_id }}</td>
                    <td>{{ resident.civil_status }}</td>
                    <td>{{ resident.religion }}</td>
                    <td>{{ resident.gender }}</td>
                    <td>{{ resident.complete_address }}</td>
                    <td>{{ resident.contact_no }}</td>
                    <td>{{ resident.with_philhealth }}</td>
                    <td>{{ resident.with_sss }}</td>
                    <td>{{ resident.income }}</td>
                    <td>{{ resident.member_4ps }}</td>
                    <td>{{ resident.voter_status }}</td>
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
            resident:[],   
        }
    },
    created(){
      this.getInfo();   
    },
        methods:{
            async getInfo(){
                try {
                    const inf = await axios.get('residents');
                    this.resident = inf.data;
                } catch (error) {
                    console.log(error);    
                }
            }
        }
        }
</script>
<style>
table {
  width: 10%;
 
}
.cons{
    overflow-y:scroll;
}
th, td {
  width: 90px; /* Adjust the percentage as needed */
}
</style>
