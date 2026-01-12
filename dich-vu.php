<?php
$page = [
	'title' => 'Dịch Vụ',
	'slug' => 'service',
	'banner' => 'image/common/service.png'
];

// include 'header-second.php';
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Dịch vụ | Công ty Kế toán – Thuế Lộc An Sinh</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="image/common/logo.png" type="image/png" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="css/vendor.bundle.css">
	<link id="style-css" rel="stylesheet" type="text/css" href="css/style.css">
</head>

<?php include 'components/floating-contact.php' ?>

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
	<?php include 'components/our-customer.php' ?>;
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