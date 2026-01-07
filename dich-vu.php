<?php
$page = [
	'title' => 'Dịch Vụ',
	'slug' => 'service',
	'banner' => 'image/banner-service.jpg'
];

// include 'header-second.php';
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Service | Finance Corp - Financial Services and Business Consulting Template</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="image/favicon.png" type="image/png" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="css/vendor.bundle.css">
	<link id="style-css" rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body class="site-body style-v1">
	<?php include 'includes/header-second.php' ?>
	<!-- Service Section -->
	<div class="section section-services section-pad">
		<div class="container">
			<div class="content row">

				<div class="wide-md center">
					<h2 class="heading-lead">Dịch Vụ Nổi Bật</h2>
					<p>Chúng tôi cung cấp các dịch vụ kế toán – thuế toàn diện, hỗ trợ doanh nghiệp tuân thủ đúng quy định pháp
						luật, tối ưu chi phí và nâng cao hiệu quả quản lý tài chính trong suốt quá trình hoạt động.</p>
				</div>
				<?php
				include 'data/services.php';
				include 'components/feature-service.php';
				?>

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
	<?php include 'includes/footer.php' ?>
	<!-- End Footer Widget -->

	<!-- JavaScript Bundle -->
	<script src="js/jquery.bundle.js"></script>
	<!-- Theme Script init() -->
	<script src="js/script.js"></script>
	<!-- End script -->
</body>

</html>