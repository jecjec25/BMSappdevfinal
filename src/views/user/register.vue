<template>
<body>

<form>
 <div class="container">
    <h2>Register - Barangay Management System</h2>
    <label for="uname"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="lname" required>

    <label for="uname"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="fname" required>

    <label for="uname"><b>Email Address</b></label>
    <input type="text" placeholder="Enter Email Address" name="uname" required>

    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw"><b>Confirm Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw" required>

    <a href="/login" class="btn btn-primary">Register</a>

    <a href="/login">Already have an account</a>
 </div>
</form>

</body>
</template>

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