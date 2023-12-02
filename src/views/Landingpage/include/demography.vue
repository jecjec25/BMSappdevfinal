<template>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                
                <div class="card-body"> 
                    <table class="table table-bordered tbl">
                        
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Barangay</th>
                                <th>Land Area (has)</th>
                                <th>2020 Population Density (Population/has)</th>
                                <th>2020 Projected</th>
                                <th>Projected 2023 household</th>
                                <th>2020 Household</th>
                                <th>2023 Household</th>
                                <th>Growth Rate</th>                  
                            
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for=" info in info">
                                <td>{{ info.number }}</td>
                                <td>{{ info.barangay }}</td>
                                <td>{{ info.landarea }}</td>
                                <td>{{ info.popuden2020 }}</td>
                                <td>{{ info.popu2020 }}</td>
                                <td>{{ info.projpopu2023 }}</td>
                                <td>{{ info.household2020 }}</td>
                                <td>{{ info.household2023 }}</td>
                                <td>{{ info.growthrate }}</td>                           
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
            info:[],
        }
    },
    created(){
      this.getInfo();   
    },
        methods:{
            async getInfo(){
                try {
                    const inf = await axios.get('demographics');
                    this.info = inf.data;
                
                } catch (error) {
                    console.log(error);    
                }
            }
        }
        }
</script>

