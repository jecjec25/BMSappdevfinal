
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
                                            <label>Barangay Name</label>
                                            <input type="text" v-model="barangay_name" class="form-control" placeholder="Enter Barangay Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Barangay Remarks</label>
                                            <input type="text" v-model="barangay_remarks" class="form-control" placeholder="Enter Land Area">
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
            return{
                barangay_name: '',
                barangay_remarks: ''
            }
        },

        methods:{
            async saveData(){
              try{
                const ins = await axios.post('admin/barangay',{
                    barangay_name: this.barangay_name,
                    barangay_remarks: this.barangay_remarks
                });
              }
              catch(error){
                console.log(error)
              }
            } 
        }
    }
</script>