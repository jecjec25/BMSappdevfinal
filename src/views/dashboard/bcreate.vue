<template>
    <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-5">
                        <div class="card">
                            <div class="card-header">
                                <h4 style="font-size:28px; font:bold;">Add Barangay Official</h4>
                                <form action="/BrgyOfficial">
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
                                                <label>Last Name</label>
                                            <input type="text" v-model="last_name" class="form-control" placeholder="Enter your last name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" v-model="first_name" class="form-control" placeholder="Enter your first name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Middle Name</label>
                                            <input type="text" v-model="middle_name" class="form-control" placeholder="Enter your middle name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>BirthDate</label>
                                            <input type="date" v-model="birth_date" class="form-control" placeholder="Enter your birthdate">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Age</label>
                                            <input type="text" v-model="age" class="form-control" placeholder="Enter your age">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div>
                                                <label for="barangaySelect">Barangay ID</label>
                                                <select v-model="barangay_id" id="barangaySelect" @change="fetchData">
                                                <option v-for="barangay in bdatas">{{ barangay.barangay_id }}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div>
                                                <label for="purokSelect">Purok ID</label>
                                                <select v-model="purok_id" id="purokSelect" @change="fetchData">
                                                <option v-for="purok in datas">{{ purok.purok_id }}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div>
                                                <label for="civilStatus">Civil Status</label>
                                                <select v-model="civil_staus" id="civil_status">
                                                <option value="single">Single</option>
                                                <option value="married">Married</option>
                                                <option value="divorced">Divorced</option>
                                                <option value="widowed">Widowed</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Religion</label>
                                            <input type="text" v-model="religion" class="form-control" placeholder="Enter religion">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <input type="text" v-model="gender" class="form-control" placeholder="Enter your gender">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Complete Address</label>
                                            <input type="text" v-model="complete_address" class="form-control" placeholder="Complete address">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Contact Number</label>
                                            <input type="text" v-model="contact_no" class="form-control" placeholder="Contact number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>With Philhealth?</label>
                                            <input type="text" v-model="with_philhealth" class="form-control" placeholder="PhilHealth">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>With SSS?</label>
                                            <input type="text" v-model="with_sss" class="form-control" placeholder="SSS">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Income (per month)</label>
                                            <input type="text" v-model="income" class="form-control" placeholder="Income">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>4ps member?</label>
                                            <input type="text" v-model="member_4ps" class="form-control" placeholder="4ps member">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Voter Status</label>
                                            <input type="text" v-model="voter_status" class="form-control" placeholder="voter status">
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

        data() {
    return {
      datas:[],
       bdatas:[],
      last_name:'',
      first_name:'',
      middle_name:'',
      birth_date:'',
      age:'',
      barangay_id:'',
      purok_id: '',
      civil_staus:'',
      religion:'',
    complete_address:'',
    with_sss:'',
    with_philhealth: '',
    member_4ps:'',
    voter_status:''

    };
  },
  
    methods:{
            async saveData(){
            
                try {
                    const inf = await axios.get('purok');
                    this.datas = inf.data;
                    const bdata = await axios.get('barangay');
                    this.bdatas = bdata.data;
                    //for inserting data to resident_tbl
                    const ins = await axios.post('admin/addResidents',{
                        last_name: this.last_name,
                        first_name: this.first_name,
                        middle_name: this.middle_name,
                        birth_date: this.birth_date,
                        age: this.age,
                        barangay_id: this.barangay_id,
                        purok_id: this.purok_id,
                        civil_status: this.civil_status,
                        religon: this.religon,
                        complete_address: this.complete_address,
                        with_sss: this.with_sss,
                        with_philhealth: this.with_philhealth,
                        member_4ps: this.member_4ps,
                        voter_status: this.voter_status,
                    })
                } catch (error) {
                    console.log(error);    
                }
             }
        }
       
};
</script>