
<!DOCTYPE html>
<html lang="en">

<head>
	<?php include "include/head.php"; ?>

	<title>Login - Barangay Management System</title>

	<style>
		label.placeholder {
			background: transparent;
			cursor: auto;
		}
	</style>
</head>

<body class="login">
	<?php include "include/loading_screen.php"; ?>
	<div class="wrapper wrapper-login">

		<div class="container container-login animated fadeIn">

			<h3 class="text-center">Login - Barangay Management System</h3>
			<div class="login-form">
				<form method="POST" action="LoginController/login" autocomplete="off">
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

	<?php include "include/footer.php"; ?>
</body>

</html>