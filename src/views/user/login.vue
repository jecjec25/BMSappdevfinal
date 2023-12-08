<template>
  <body>
 <div class="container">
    <h1>Login - Barangay Management System</h1>
    <form>
      <label for="email">Email Address</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>

      <a href="/dashboard" class="btn btn-primary">Login</a>
    </form>
    <a href="/register">Create New Account</a>
 </div>
</body>
</template>

<style>
body {
 font-family: 'Poppins';
 background-image: url('@/assets/img/R.jpg');
 text-align: center;
}

.container {
 width: 300px;
 padding: 16px;
 background-color: #ffffff;
 margin: 0 auto;
 margin-top: 130px;
 box-shadow: 10px 10px 5px 5px rgba(2, 1, 1, 0.1);
}

h1 {
 text-align: center;
 color: #4C4C4C;
 font-family: 'Poppins';
 font: bold;
}

label {
 display: block;
 margin-top: 10px;
 color: #4C4C4C;
}

input {
 width: 100%;
 padding: 8px;
 margin-top: 5px;
 border: 1px solid #ddd;
 border-radius: 4px;
}

form .btn{
 width: 100%;
 padding: 8px;
 margin-top: 10px;
 border-radius: 4px;
}

button:hover {
 background-color: #3d3d3d;
}

a {
 display: block;
 margin-top: 10px;
 text-align: center;
 color: #4C4C4C;
}
a:hover {
 color: #3d3d3d;
}
</style>