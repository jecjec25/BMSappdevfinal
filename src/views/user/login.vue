<template>
    <heads/>
    <footers/>
		<div class="wrapper wrapper-login">
		<div class="container container-login animated fadeIn">

			<h3 class="text-center">Login - Barangay Management System</h3>
			<div class="login-form">
				<form method="POST" action="/login" autocomplete="off">
					<div class="form-group form-floating-label">
						<input id="email" name="email" type="email" class="form-control input-border-bottom" required>
						<label for="username" class="placeholder">Email Address</label>
					</div>
					<div class="form-group form-floating-label">
						<input id="password" name="password" type="password" class="form-control input-border-bottom" required>
						<label for="password" class="placeholder">Password</label>
						<span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
					</div>
					<div class="form-action mb-3 d-flex flex-column gap-2">
						<button type="submit" class="btn btn-primary btn-block fw-bold">Login</button>

						<a href="/register" class="btn btn-success btn-block text-white fw-bold">Create New Account</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</template>

<style>
		label.placeholder {
			background: transparent;
			cursor: auto;
		}
#loading-container {
  position: absolute;
  display: flex;
  height: 100%;
  width: 100%;
  background-color: white;
  z-index: 9999;
}

#loading-screen {
  position: absolute;
  left: 48%;
  top: 48%;
  z-index: 9999;
  text-align: center;
}

a {
  text-decoration: none;
}
</style>
    
<script>
WebFont.load({
  google: {
    "families": ["Lato:300,400,700,900"]
  },
  custom: {
    "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
      "simple-line-icons"
    ],
    urls: ['<%= BASE_URL %>assets/css/fonts.min.css']
  },
  active: function() {
    sessionStorage.fonts = true;
  }
});
</script>
