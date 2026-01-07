<?php
function isActive($slug, $current)
{
	return $slug === $current ? 'active' : '';
}
?>

<!-- Header -->
<header class="site-header header-s1 is-transparent is-sticky">
	<!-- Topbar -->
	<div class="topbar">
		<div class="container">
			<div class="row">
				<div class="top-aside top-left">
					<ul class="top-nav">
						<li><a href="#">Chào mừng bạn đến với Công ty TNHH Tư Vấn và Dịch Vụ Kế Toán Lộc An Sinh</a></li>
					</ul>
				</div>
				<div class="top-aside top-right clearfix">
					<ul class="top-contact clearfix">
						<!-- <li class="t-email t-email1">
								<em class="fa fa-envelope-o" aria-hidden="true"></em>
								<span><a href="#">contact@youremail.com</a></span>
							</li> -->
						<li class="t-phone t-phone1">
							<em class="fa fa-phone" aria-hidden="true"></em>
							<span>0982.000.748</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- #end Topbar -->
	<!-- Navbar -->
	<div class="navbar navbar-primary">
		<div class="container">
			<!-- Logo -->
			<a class="navbar-brand" href="./">
				<img class="logo logo-dark" alt="" src="image/common/logo.png" srcset="image/common/logo.png 2x">
				<img class="logo logo-light" alt="" src="image/common/logo.png" srcset="image/common/logo.png 2x">
			</a>
			<!-- #end Logo -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainnav"
					aria-expanded="false">
					<span class="sr-only">Menu</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- Q-Button for Mobile -->
				<div class="quote-btn"><a class="btn" href="get-a-quote.html">Sign in</a></div>
			</div>
			<!-- MainNav -->
			<nav class="navbar-collapse collapse" id="mainnav">
				<ul class="nav navbar-nav">
					<li class="dropdown <?= isActive('home', $page['slug']) ?>">
						<a href="./">Trang Chủ</a>
					</li>

					<li class="dropdown <?= isActive('about', $page['slug']) ?>">
						<a href="ve-chung-toi.php">Về Chúng Tôi</a>
					</li>

					<li class="dropdown <?= isActive('service', $page['slug']) ?>">
						<a href="dich-vu.php">Dịch Vụ</a>
					</li>


					<!-- <li><a href="testimonial.html">Testimonial</a></li> -->
					<!-- <li><a href="news.html">News</a></li> -->
					<li class="quote-btn"><a class="btn" href="lien-he.php">Liên Hệ</a></li>
				</ul>
			</nav>
			<!-- #end MainNav -->
		</div>
	</div>
	<!-- #end Navbar -->
	<!-- Banner/Static -->
	<div class="banner banner-static">
		<div class="banner-cpn">
			<div class="container">
				<div class="content row">
					<!-- <div class="banner-text">
							<h1 class="page-title">Portfolio</h1>
							<p>Nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat do eiusmod tempor incidid.</p>						
						</div> -->
					<!-- <div class="page-breadcrumb">
							<ul class="breadcrumb">
								<li><a href="index.html">Home</a></li>
								<li><a href="portfolio.html">Portfolio</a></li>
								<li class="active"><span>Portfolio Name</span></li>
							</ul>
						</div> -->
				</div>
			</div>
		</div>
		<div class="banner-bg imagebg">
			<img src="image/banner-inside-a.jpg" alt="" />
		</div>
	</div>
	<!-- #end Banner/Static -->
</header>
<!-- End Header -->