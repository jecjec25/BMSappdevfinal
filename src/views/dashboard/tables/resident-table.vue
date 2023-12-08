<template>
    <div class="container">
            <div class="row"></div>
                <div class="col-md-12 mt-5">
                    <div class="card">
                        <div class="card-header">
                            <h4>Resident Information</h4>
                            <a href="rcreate" class= "btn btn-primary float-right">Add Resident</a>
                        </div>
                       
                        <div class="card-body"> 
                            <table class="table table-bordered tbl">
                                
                                <thead>
                                    <tr>
                                        <th>ID Type</th>
                                        <th>ID Number</th>
                                        <th>Citizenship</th>
                                        <th>Picture</th>
                                        <th>Barangay</th>
                                        <th>First Name</th>
                                        <th>Middle Name</th>
                                        <th>Last Name</th>
                                        <th>Alias</th>
                                        <th>Place of Birth</th>
                                        <th>Birthdate</th>
                                        <th>Age</th>
                                        <th>Civil Status</th>
                                        <th>Gender</th>
                                        <th>Sitio</th>
                                        <th>Voter Status</th>
                                        <th>Contact Number</th>
                                        <th>email</th>
                                        <th>Occupation</th>
                                        <th>Member of 4ps?</th>
                                        <th>PWD</th>
                                        <th>Senior</th>                           
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for = "resident in resident">
                                        <td>{{ resident.kind_of_id }}</td>
                                        <td>{{ resident.idNo }}</td>
                                        <td>{{ resident.citizenship }}</td>
                                        <td>{{ resident.picture }}</td>
                                        <td>{{ resident.Barangay }}</td>
                                        <td>{{ resident.firstname }}</td>
                                        <td>{{ resident.middlename }}</td>
                                        <td>{{ resident.lastname }}</td>
                                        <td>{{ resident.alias }}</td>
                                        <td>{{ resident.birthplace }}</td>
                                        <td>{{ resident.birthdate }}</td>
                                        <td>{{ resident.age }}</td>
                                        <td>{{ resident.civilstatus }}</td>
                                        <td>{{ resident.gender }}</td>
                                        <td>{{ resident.sitio }}</td>
                                        <td>{{ resident.phone }}</td>
                                        <td>{{ resident.email }}</td>
                                        <td>{{ resident.occupation }}</td>
                                        <td>{{ resident.address }}</td>
                                        <td>{{ resident.is_4ps }}</td>
                                        <td>{{ resident.is_pwd }}</td>
                                        <td>{{ resident.is_senior }}</td>
                                    
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
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

