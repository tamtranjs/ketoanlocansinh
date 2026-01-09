<?php

require __DIR__ . '/data/services.php';

$slug = $_GET['service'] ?? '';

$currentService = null;

foreach ($services as $item) {
	if ($item['slug'] === $slug) {
		$currentService = $item;
		break;
	}
}

if (!$currentService) {
	http_response_code(404);
	echo 'Dịch vụ không tồn tại';
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
	<link rel="stylesheet" type="text/css" href="/css/vendor.bundle.css">
	<link id="style-css" rel="stylesheet" type="text/css" href="/css/style.css">
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
						<img src="/image/photo-lg-a.jpg" alt="" class="aligncenter">
						<!-- <h3 class="color-secondary">Areas of Expertise</h3>
						<p>Bring to the table dolor sit amet enim ad minim veniam, quis nostrud exercation ullamco laboris nisi ution aliquip exon commodo conquat. Duis aute irure dolor nostrud ullamco. Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<p>If you have any questions regarding our services, please <strong>contact us</strong> or call at <strong>800 1234 5677</strong>.</p> -->

					</div>

					<!-- Sidebar -->
					<div class="col-md-4">
						<div class="sidebar-right">

							<?php
							// include 'data/services.php';
							
							// $currentService = $_GET['service'] ?? 'ke-toan-thue';
							
							include 'components/service-sidebar.php';
							?>
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
					<div class="logo-item"><img alt="" width="190" height="82" src="/image/cl-logo1-w.png"></div>
					<div class="logo-item"><img alt="" width="190" height="82" src="/image/cl-logo2-w.png"></div>
					<div class="logo-item"><img alt="" width="190" height="82" src="/image/cl-logo3-w.png"></div>
					<div class="logo-item"><img alt="" width="190" height="82" src="/image/cl-logo4-w.png"></div>
					<div class="logo-item"><img alt="" width="190" height="82" src="/image/cl-logo5-w.png"></div>
					<div class="logo-item"><img alt="" width="190" height="82" src="/image/cl-logo6-w.png"></div>
				</div>

			</div>
		</div>
	</div>
	<!-- End Section -->
	<!-- Footer Widget-->
	<?php include 'includes/footer.php' ?>
	<!-- End Footer Widget -->

	<!-- JavaScript Bundle -->
	<script src="/js/jquery.bundle.js"></script>
	<!-- Theme Script init() -->
	<script src="/js/script.js"></script>
	<!-- End script -->
</body>

</html>