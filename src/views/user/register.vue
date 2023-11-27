<template>
    	<div class="wrapper wrapper-login">

        <div class="container container-login animated fadeIn">

    <h3 class="text-center">Register - Barangay Management System</h3>
    <div class="login-form">
        <form method="POST" action="/register" autocomplete="off">
            <div class="form-group form-floating-label">
                <input id="lastname" name="lastname" type="text" class="form-control input-border-bottom" required>
                <label for="lastname" class="placeholder">Last Name</label>
            </div>
            <div class="form-group form-floating-label">
                <input id="firstname" name="firstname" type="text" class="form-control input-border-bottom" required>
                <label for="firstname" class="placeholder">First Name</label>
            </div>
            <div class="form-group form-floating-label">
                <input id="email" name="email" type="text" class="form-control input-border-bottom" required>
                <label for="email" class="placeholder">Email Address</label>
            </div>
            <div class="form-group form-floating-label">
                <input id="username" name="username" type="text" class="form-control input-border-bottom" required>
                <label for="username" class="placeholder">Username</label>
            </div>
            <div class="form-group form-floating-label">
                <input id="password" name="password" type="password" class="form-control input-border-bottom" required>
                <label for="password" class="placeholder">Password</label>
                <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
            </div>
            <div class="form-group form-floating-label">
                <input id="confirmpassword" name="confirmpassword" type="password" class="form-control input-border-bottom" required>
                <label for="confirmpassword" class="placeholder">Confirm Password</label>
                <span toggle="#confirmpassword" class="fa fa-fw fa-eye field-icon toggle-password"></span>
            </div>
            <div class="form-action mb-3 d-flex flex-column gap-2">
                <button type="submit" class="btn btn-primary btn-block fw-bold">Register</button>

                <a href="/login" class="btn btn-success btn-block text-white fw-bold">I already have an account</a>
            </div>
        </form>
    </div>
</div>
</div>

</template>

<script>
    
</script>