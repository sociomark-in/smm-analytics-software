<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('components/_common_head'); ?>
	<?php $this->load->view('components/_common_css'); ?>
</head>


<body>
	<main>
		<article class="login page__fullh_middle">
			<div class="container">
				<div class="row m-0 justify-content-center">
					<!-- Login Module -->
					<div class="col-lg-4 col-md-6 col-12">
						<div class="form_login">
							<div class="row m-0">
								<div class="col-12 mb-3">
									<div class="title">
										<h3>Already have an Account?</h3>
									</div>
								</div>
								<?= form_open("api/sign-in", ['id' => "loginForm"]) ?>
								<div class="col-12">
									<div class="mb-3">
										<label for="" class="form-label">Username</label>
										<input type="text" name="username" class="form-control">
									</div>
									<div class="mb-3">
										<label for="" class="form-label">Password</label>
										<div class="input-group">
											<input type="password" name="password" class="form-control" id="pwdField" autocomplete="current-password">
											<button type="button" id="pwdView" class="input-group-text"><i class="ti ti-eye"></i></button>
										</div>
									</div>
								</div>
								<div class="col-12">
									<div class="row m-0 g-0 justify-content-between">
										<div class="col-auto">
											<div class="form-check mb-3">
												<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
												<label class="form-check-label" for="flexCheckDefault">
													Remember Me
												</label>
											</div>
										</div>
										<div class="col-auto">
											<a href="" class="simple-link">Forgot Password?</a>
										</div>
									</div>
								</div>
								<div class="col-12">
									<div class="mb-3">
										<button type="submit" class="btn btn-primary w-100">Login</button>
									</div>
								</div>
								<?= form_close() ?>
								<div class="col-12">
									<div class="text-center">
										Not a Member? <a href="<?= base_url('register') ?>">Register&nbsp;Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</article>
	</main>
	<?php $this->load->view('components/_common_js'); ?>
	<script>
		$("#pwdView").on('mousedown', (event)=>{
			$("#pwdField").attr('type', 'text');
			$("#pwdView").html('<i class="ti ti-eye-off"></i>');
		})
		$("#pwdView").on('mouseup', (event)=>{
			$("#pwdField").attr('type', 'password');
			$("#pwdView").html('<i class="ti ti-eye"></i>');
		})
	</script>
</body>

</html>
