<!doctype html>
<html lang="en">

<head>
	<?php $this->load->view('components/_common_head'); ?>
	<?php $this->load->view('components/_common_css'); ?>
	<?php $this->load->view('components/_datatables_css'); ?>
</head>

<body class="row m-0 g-0">
	<header class="col-auto">
	<?php $this->load->view('components/_nav_sidebar'); ?>
	</header>
	<main class="col">
		<section class="py-3">
			<div class="container">
				<div class="row m-0">
					<div class="col-lg-4 col-6">
						<div class="card mb-3">
							<div class="card-body">
								<div class="panel panel-brief panel-brief-facebook">
									<div class="row m-0 g-0 flex-row-reverse justify-content-between">
										<div class="col-md-auto col-12">
											<div class="icon">
												<i class="fa-brands fa-facebook-f"></i>
											</div>
										</div>
										<div class="col-md-auto col-12">
											<p class="text-muted panel-subject">Overall Engagement</p>
											<h3>559.25k</h3>
										</div>
										<div class="col-12">
											<div class="text-muted">
												<small><span class="badge badge-success"> <i class="fa-solid fa-arrow-up"></i>&nbsp;+18.30&percnt;</span>&nbsp;than last month</small>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-6">
						<div class="card mb-3">
							<div class="card-body">
								<div class="panel panel-brief panel-brief-instagram">
									<div class="row m-0 g-0 flex-row-reverse justify-content-between">
										<div class="col-md-auto col-12">
											<div class="icon">
												<i class="fa-brands fa-instagram"></i>
											</div>
										</div>
										<div class="col-md-auto col-12">
											<p class="text-muted panel-subject">Overall Engagement</p>
											<h3>559.25k</h3>
										</div>
										<div class="col-12">
											<div class="text-muted">
												<small><span class="badge badge-warning"> <i class="fa-solid fa-arrow-up"></i>&nbsp;+18.30&percnt;</span>&nbsp;than last month</small>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-6">
						<div class="card mb-3">
							<div class="card-body">
								<div class="panel panel-brief panel-brief-youtube">
									<div class="row m-0 g-0 flex-row-reverse justify-content-between">
										<div class="col-md-auto col-12">
											<div class="icon">
												<i class="fa-brands fa-youtube"></i>
											</div>
										</div>
										<div class="col-md-auto col-12">
											<p class="text-muted panel-subject">Overall Engagement</p>
											<h3>559.25k</h3>
										</div>
										<div class="col-12">
											<div class="text-muted">
												<small><span class="badge badge-danger"> <i class="fa-solid fa-arrow-down"></i>&nbsp;+18.30&percnt;</span>&nbsp;than last month</small>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-6">
						<div class="card mb-3">
							<div class="card-body">
								<div class="panel panel-brief panel-brief-linkedin">
									<div class="row m-0 g-0 flex-row-reverse justify-content-between">
										<div class="col-md-auto col-12">
											<div class="icon">
												<i class="fa-brands fa-linkedin-in"></i>
											</div>
										</div>
										<div class="col-md-auto col-12">
											<p class="text-muted panel-subject">Overall Engagement</p>
											<h3>559.25k</h3>
										</div>
										<div class="col-12">
											<div class="text-muted">
												<small><span class="badge badge-success"> <i class="fa-solid fa-arrow-up"></i>&nbsp;+18.30&percnt;</span>&nbsp;than last month</small>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row m-0">
					<div class="col-xl-3 col-lg-4 col-md-6 col-12"></div>
					<div class="col-xl-3 col-lg-4 col-md-6 col-12"></div>
					<div class="col-xl-3 col-lg-4 col-md-6 col-12"></div>
					<div class="col-xl-3 col-lg-4 col-md-6 col-12"></div>
				</div>
			</div>
		</section>
	</main>
	<footer class="col-12">
		<?php $this->load->view('components/_common_footer'); ?>
	</footer>
	<?php $this->load->view('components/_common_js'); ?>

</body>

</html>
