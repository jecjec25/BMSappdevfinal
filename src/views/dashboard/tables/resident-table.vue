<template>
    <div class ="cons">
        <table>
            <thead>
                <tr>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Birth Day</th>
                    <th>Age</th>
                    <th>barangay</th>
                    <th>purok</th>
                    <th>Civil Status</th>
                    <th>Religion</th>
                    <th>Gender</th>
                    <th>Complete Address</th>
                    <th>Contact Number</th>
                    <th>Philheath Member</th>
                    <th>SSS Member</th>
                    <th>Income</th>
                    <th>4PS Memeber</th>
                    <th>Voter Status</th>                  
                </tr>
            </thead>
            <tbody>
                <tr v-for="resident in resident">
                    <td>{{ resident.last_name }}</td>
                    <td>{{ resident.first_name }}</td>
                    <td>{{ resident.middle_name }}</td>
                    <td>{{ resident.birth_date }}</td>
                    <td>{{ resident.age }}</td>
                    <td>{{ resident.barangay_name }}</td>
                    <td>{{ resident.purok_name }}</td>
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
