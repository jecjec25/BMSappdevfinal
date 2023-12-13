<template>

<form @submit.prevent="register">
 <div class="container">
    <h2>Register - Barangay Management System</h2>
    <label for="full_name"><b>Full Name</b></label>
    <input type="text" placeholder="Enter full name" v-model="full_name" required>

    <label for="position"><b>Position</b></label>
    <input type="text" placeholder="Position" v-model="position" required>

    <label for="contact"><b>Contact Number</b></label>
    <input type="text" placeholder="Enter Contact Number" v-model="contact" required>

    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" v-model="address" required>

    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" v-model="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" v-model="password" required>

    
    <button type="submit"  class="btn btn-primary">Register</button>

    <a href="/login">Already have an account</a>
 </div>
</form>


</template>
<script>
import axios from 'axios';

export default {
  data() {
    return {
      full_name: '',
      position: '',
      contact: '',
      address: '',
      username: '',
      password: '',
    };
  },
  methods: {
    async register() {
        
      try {
        const formData = new FormData();
        formData.append('full_name', this.full_name);
        formData.append('position', this.position);
        formData.append('contact', this.contact);
        formData.append('address', this.address);
        formData.append('username', this.username);
        formData.append('password', this.password);

        const response = await axios.post('/user/register', formData, {
          headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
          },
        });

        // Handle the response as needed
        console.log(response.data);
      } catch (error) {
        console.error(error);
      }
    },
  },
};
</script>
<style>
body {
 font-family: Arial, sans-serif;
 background-image: url('@/assets/img/R.jpg');
}

.container {
align-items: center;
 width: 30%;
 padding: 16px;
 background-color: rgb(253, 252, 252);
 margin: 0 auto;
 margin-top: 40px;
 border: 1px solid black;
 border-radius: 4px;
 box-shadow: 10px 10px 5px 5px rgba(2, 1, 1, 0.1);
}
h2{
    font-family: 'Poppins';
    font-weight: bold;
    text-align: center;
    font-size: 15px
}

.container label {
 margin-bottom: 5px;
}

.container input[type=text], .container input[type=password] {
 width: 100%;
 padding: 3px;
 border: 1px solid #ddd;
 border-radius: 4px;
 margin-bottom: 15px;
 background-color: #f1f1f1;
}

.container a {
 background-color: #4CAF50;
 text-align: center;
 color: white;
 padding: 6px 8px;
 margin-top: 5px;
 border: none;
 cursor: pointer;
 width: 100%;
 opacity: 0.9;
}

.container input[type=submit]:hover {
 opacity:1;
}
</style>