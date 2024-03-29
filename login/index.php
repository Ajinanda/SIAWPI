<?php 
	$content  = '<div class="card fat">
						<div class="card-body">
						<h4 class="card-title">Login</h4>
						<form method="POST" class="my-login-validation" novalidate="">
							<div class="form-group">
								<label for="email">E-Mail Address</label>
								<input id="email" type="email" class="form-control" name="email" value="" required autofocus>
								<div class="invalid-feedback">
									Email is invalid
								</div>
							</div>

							<div class="form-group">
								<label for="password">Password
									<a href="forgot.php" class="float-right">
										Forgot Password?
									</a>
								</label>
								<input id="password" type="password" class="form-control" name="password" required data-eye>
							    <div class="invalid-feedback">
							    	Password is required
						    	</div>
							</div>

							<div class="form-group">
								<div class="custom-checkbox custom-control">
									<input type="checkbox" name="remember" id="remember" class="custom-control-input">
									<label for="remember" class="custom-control-label">Remeber Me</label>
								</div>
							</div>

							<div class="form-group m-0">
								<button type="submit" class="btn btn-primary btn-block">
									Login
								</button>
							</div>
							<div class="mt-4 text-center">
								Don\'t have an account? <a href="register.php">Create One</a>
							</div>
						</form>
					</div>
				</div>';

	include('../template/t_login.php');
?>