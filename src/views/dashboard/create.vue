<template>
    <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-5">
                        <div class="card">
                            <div class="card-header">
                                <h4 style="font-size:28px; font:bold;">Add Barangay</h4>
                                <form action="/demographics">
                                    <div>
                                        <button class="btn-danger float-right" style="font-size:25px; border-radius: 5px;">Back</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <form @submit.prevent="saveData" >
                                            <div class="col-md-6">                                
                                            <div class="form-group">
                                                <label>Number</label>
                                            <input type="text" v-model="number" class="form-control" placeholder="Enter Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Barangay</label>
                                            <input type="text" v-model="barangay_name" class="form-control" placeholder="Enter Barangay Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Land Area</label>
                                            <input type="text" v-model="landarea" class="form-control" placeholder="Enter Land Area">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Population 2015</label>
                                            <input type="text" v-model="popu2015" class="form-control" placeholder="Enter Population on 2015">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Population Density 2020</label>
                                            <input type="text" v-model="popuden2020" class="form-control" placeholder="Enter Population Density on 2020">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Population 2020</label>
                                            <input type="text" v-model="popu2020" class="form-control" placeholder="Enter Population on 2020">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Project Population 2023</label>
                                            <input type="text" v-model="projpopu2023" class="form-control" placeholder="Enter Project Population on 2023">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Household 2020</label>
                                            <input type="text" v-model="household2020" class="form-control" placeholder="Enter Household on 2020">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Household 2023</label>
                                            <input type="text" v-model="household2023" class="form-control" placeholder="Enter Household on 2023">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Growth Rate</label>
                                            <input type="text" v-model="growthrate" class="form-control" placeholder="Enter Growth Rate">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary px-4">Save</button>
                                        </div>
                                    </div>
 
                                </form>
                                </div>

                            </div>
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
            return {
                    number:'',
                    barangay_name: '',
                    landarea:'',
                    popu2015: '',
                    popuden2020: '',
                    popu2020: '',
                    projpopu2023: '',
                    household2020:'',
                    household2023: '',
                    growthrate: '',
            }            
        },
        methods:{
            async saveData(){
            try {
                const ins = await axios.post("/admin/save",{
                    number: this.number,
                    barangay_name: this.barangay_name,
                    landarea: this.landarea,
                    popu2015: this.popu2015,
                    popuden2020: this.popuden2020,
                    popu2020: this.popu2020,
                    projpopu2023: this.projpopu2023,
                    household2020:this.household2020,
                    household2023: this.household2023,
                    growthrate: this.growthrate
                });
            
            } catch (error) {
                console.log(error);    
            }    
            }
        }
    }
</script>
