<?php
include 'data/services.php';

$slug = $_GET['service'] ?? '';

$currentService = null;
foreach ($services as $service) {
	if ($service['slug'] === $slug) {
		$currentService = $service;
		break;
	}
}

if (!$currentService) {
	// fallback nếu slug sai
	header("HTTP/1.0 404 Not Found");
	echo "Dịch vụ không tồn tại";
	exit;
}
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title><?= $currentService['title'] ?> | Dịch vụ kế toán</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="image/favicon.png" type="image/png" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="css/vendor.bundle.css">
	<link id="style-css" rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body class="site-body style-v1">
	<!-- Header -->
	<?php include 'includes/header-second.php' ?>
	<!-- End Header -->
	<!-- Contents -->
	<div class="section section-contents section-pad">
		<div class="container">
			<div class="content row">

				<div class="row">
					<div class="col-md-8">

						<h2 class="heading-lg"><?= $currentService['title'] ?></h2>
						<p class="lead"><?= $currentService['lead'] ?></p>
						<?= $currentService['content'] ?>

						<!-- Acorrdion Panels -->
						<?php include 'components/service-accordion.php'; ?>

						<!-- End Acorrdion -->
						<img src="image/photo-lg-a.jpg" alt="" class="aligncenter">
						<!-- <h3 class="color-secondary">Areas of Expertise</h3>
						<p>Bring to the table dolor sit amet enim ad minim veniam, quis nostrud exercation ullamco laboris nisi ution aliquip exon commodo conquat. Duis aute irure dolor nostrud ullamco. Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<p>If you have any questions regarding our services, please <strong>contact us</strong> or call at <strong>800 1234 5677</strong>.</p> -->

					</div>

					<!-- Sidebar -->
					<div class="col-md-4">
						<div class="sidebar-right">

							<?php
							include 'data/services.php';

							$currentService = $_GET['service'] ?? 'ke-toan-thue';

							include 'components/service-sidebar.php';
							?>


							<!-- <div class="wgs-box boxed light has-bg">
								<div class="wgs-content">
									<h3>Innovative Tools for Investor</h3>
									<p>We employ a long-established strategy, sector-focused investing across all of our markets globally...</p>
									<a href="service-single.html" class="btn btn-alt btn-outline"> Learn More</a>
								</div>
								<div class="wgs-bg imagebg">
									<img src="image/photo-sd-a.jpg" alt="">
								</div>
							</div>
							
							<div class="wgs-box boxed bg-secondary light">
								<div class="wgs-content">
									<h3>Need Help To Grow Your Business?</h3>
									<p>Investment Expert will help you start your own company.</p>
									<a href="contact.html" class="btn btn-light"> Get In Touch</a>
								</div>
							</div> -->

						</div>
					</div>
					<!-- Sidebar #end -->
				</div>

			</div>
		</div>
	</div>
	<!-- End Section -->
	<!-- Client logo -->
	<div class="section section-logos section-pad-sm bg-light bdr-top">
		<div class="container">
			<div class="content row">

				<div class="owl-carousel loop logo-carousel style-v2">
					<div class="logo-item"><img alt="" width="190" height="82" src="image/cl-logo1-w.png"></div>
					<div class="logo-item"><img alt="" width="190" height="82" src="image/cl-logo2-w.png"></div>
					<div class="logo-item"><img alt="" width="190" height="82" src="image/cl-logo3-w.png"></div>
					<div class="logo-item"><img alt="" width="190" height="82" src="image/cl-logo4-w.png"></div>
					<div class="logo-item"><img alt="" width="190" height="82" src="image/cl-logo5-w.png"></div>
					<div class="logo-item"><img alt="" width="190" height="82" src="image/cl-logo6-w.png"></div>
				</div>

			</div>
		</div>
	</div>
	<!-- End Section -->
	<!-- Footer Widget-->
	<div class="footer-widget style-v2 section-pad-md">
		<div class="container">
			<div class="row">

				<div class="widget-row row">
					<div class="footer-col col-md-3 col-sm-6 res-m-bttm">
						<!-- Each Widget -->
						<div class="wgs wgs-footer wgs-text">
							<div class="wgs-content">
								<p><img src="image/logo.png" srcset="image/logo2x.png 2x" alt=""></p>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan tiudo lorem quveniamv eniam
									laud accusan tiud. Voluptatem accusan tiudo lorem quveniamv eniam laud accusan tiud.</p>
							</div>
						</div>
						<!-- End Widget -->
					</div>
					<div class="footer-col col-md-3 col-sm-6 col-md-offset-1 res-m-bttm">
						<!-- Each Widget -->
						<div class="wgs wgs-footer wgs-menu">
							<h5 class="wgs-title">Our Services</h5>
							<div class="wgs-content">
								<ul class="menu">
									<li><a href="#">Advisory</a></li>
									<li><a href="#">Audit</a></li>
									<li><a href="#">Consultent</a></li>
									<li><a href="#">Assurance</a></li>
									<li><a href="#">Funds</a></li>
								</ul>
							</div>
						</div>
						<!-- End Widget -->
					</div>
					<div class="footer-col col-md-2 col-sm-6 res-m-bttm">
						<!-- Each Widget -->
						<div class="wgs wgs-footer wgs-menu">
							<h5 class="wgs-title">Quick Links</h5>
							<div class="wgs-content">
								<ul class="menu">
									<li><a href="#">Home</a></li>
									<li><a href="#">About Us</a></li>
									<li><a href="#">Testimonial</a></li>
									<li><a href="#">Expert</a></li>
									<li><a href="#">Contact Us</a></li>
								</ul>
							</div>
						</div>
						<!-- End Widget -->
					</div>

					<div class="footer-col col-md-3 col-sm-6">
						<!-- Each Widget -->
						<div class="wgs wgs-footer">
							<h5 class="wgs-title">Get In Touch</h5>
							<div class="wgs-content">
								<p>
									1234 Sed spiciatis Road <br>
									Atero eos, D58 8975, USA.</p>
								<p><span>Toll Free</span>: (1-800) 234 5678<br>
									<span>Phone</span>: (123) 1234 5678
								</p>
								<ul class="social">
									<li><a href="#"><em class="fa fa-facebook" aria-hidden="true"></em></a></li>
									<li><a href="#"><em class="fa fa-twitter" aria-hidden="true"></em></a></li>
									<li><a href="#"><em class="fa fa-linkedin" aria-hidden="true"></em></a></li>
								</ul>
							</div>
						</div>
						<!-- End Widget -->
					</div>

				</div><!-- Widget Row -->

			</div>
		</div>
	</div>
	<!-- End Footer Widget -->

	<!-- Copyright -->
	<div class="copyright style-v2">
		<div class="container">
			<div class="row">

				<div class="row">
					<div class="site-copy col-sm-7">
						<p>&copy; 2017 Finance Corp. <a href="#">Policy</a></p>
					</div>
					<div class="site-by col-sm-5 al-right">
						<p>Template Made by <a href="http://softnio.com/" target="_blank">Softnio.</a></p>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- End Copyright -->

	<!-- JavaScript Bundle -->
	<script src="js/jquery.bundle.js"></script>
	<!-- Theme Script init() -->
	<script src="js/script.js"></script>
	<!-- End script -->
</body>

</html>