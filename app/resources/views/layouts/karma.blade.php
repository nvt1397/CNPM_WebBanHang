<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="{{ asset("img/fav.png") }}">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>
        @section('title')
            Shop bán hàng online
        @show
    </title>
	<!--
			CSS
            ============================================= -->
    @section('stylesheet')
		<link rel="stylesheet" href={{ asset("css/linearicons.css") }}>
		<link rel="stylesheet" href={{ asset("css/font-awesome.min.css") }}>
		<link rel="stylesheet" href={{ asset("css/themify-icons.css") }}>
		<link rel="stylesheet" href={{ asset("css/bootstrap.css") }}>
		<link rel="stylesheet" href={{ asset("css/owl.carousel.css") }}>
		<link rel="stylesheet" href={{ asset("css/nice-select.css") }}>
		<link rel="stylesheet" href={{ asset("css/nouislider.min.css") }}>
		<link rel="stylesheet" href={{ asset("css/ion.rangeSlider.css") }} />
		<link rel="stylesheet" href={{ asset("css/ion.rangeSlider.skinFlat.css") }} />
		<link rel="stylesheet" href={{ asset("css/magnific-popup.css") }}>
		<link rel="stylesheet" href={{ asset("css/main.css") }}>
    @show
</head>

<body>

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="{{ route('karmahome') }}"><img src={{asset("img/logo.png")}} alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item"><a class="nav-link" href="{{ route('karmahome') }}">Trang chủ</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Cửa hàng</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="{{route('catalog_route')}}">Danh mục</a></li>
									<li class="nav-item"><a class="nav-link" href="checkout.html">Kiểm tra sản phẩm</a></li>
									<li class="nav-item"><a class="nav-link" href="cart.html">Giỏ hàng</a></li>
									<li class="nav-item"><a class="nav-link" href="confirmation.html">Xác nhận</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Bài viết</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="blog.html">Danh sách bài viết</a></li>
									<li class="nav-item"><a class="nav-link" href="single-blog.html">Bài viết chi tiết</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Trang</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="tracking.html">Tra ID sản phẩm</a></li>
									<li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="contact.html">Liên hệ</a></li>
							@guest
							<li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Đăng nhập</a></li>
							<li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Đăng ký</a></li>
							@else 
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">{{Auth::user()->name}}</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="{{route('quicklogout')}}" onclick="event.preventDefault();
										document.getElementById('logout-form').submit();">Logout</a></li>
									<form id="logout-form" action="{{ route('quicklogout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
								</ul>
							</li>
							@endguest
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="#" class="cart"><span class="ti-bag"></span></a></li>
							<li class="nav-item">
								<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between" method="get" action="{{route('search')}}">
					<input type="text" style="width: 1000px;" class="form-control" name="search_input" placeholder="Nhập thông tin tìm kiếm">
					<span class="lnr lnr-cross" style="padding-up:20px;" id="close_search" title="Close Search"></span>     
				</form>
				<a role="button" href="{{ route('advanced_search')}}" class="lnr lnr-arrow-down" style="color:white; border: none; background: none;"  id="advanced_search" title="Advanced Search"></a>                  
			</div>
		</div>
	</header>
    <!-- End Header Area -->
    
    @yield('content')

    <!-- start footer Area -->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Thông tin</h6>
						<p>
							Project Thực tập Công nghệ phần mềm. Khoa Khoa học & Kỹ thuật máy tính. Đại học Bách Khoa thành phố Hồ Chí Minh.
						</p>
					</div>
				</div>
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Nhận tin tức</h6>
						<p>Cập nhật tin tức sản phẩm mới</p>
						<div class="" id="mc_embed_signup">

							<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="form-inline">

								<div class="d-flex flex-row">

									<input class="form-control" name="EMAIL" placeholder="Nhập Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
									 required="" type="email">


									<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
									<div style="position: absolute; left: -5000px;">
										<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
									</div>

									<!-- <div class="col-lg-4 col-md-4">
												<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
											</div>  -->
								</div>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget mail-chimp">
						<h6 class="mb-20">Instagram Feed</h6>
						<ul class="instafeed d-flex flex-wrap">
							<li><img src="img/i1.jpg" alt=""></li>
							<li><img src="img/i2.jpg" alt=""></li>
							<li><img src="img/i3.jpg" alt=""></li>
							<li><img src="img/i4.jpg" alt=""></li>
							<li><img src="img/i5.jpg" alt=""></li>
							<li><img src="img/i6.jpg" alt=""></li>
							<li><img src="img/i7.jpg" alt=""></li>
							<li><img src="img/i8.jpg" alt=""></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Theo dõi chúng tôi</h6>
						<div class="footer-social d-flex align-items-center">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				<p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->
    @section('javascript')
		<script src={{ asset("js/vendor/jquery-2.2.4.min.js") }}></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
		crossorigin="anonymous"></script>
		<script src={{ asset("js/vendor/bootstrap.min.js") }}></script>
		<script src={{ asset("js/jquery.ajaxchimp.min.js") }}></script>
		<script src={{ asset("js/jquery.nice-select.min.js") }}></script>
		<script src={{ asset("js/jquery.sticky.js") }}></script>
		<script src={{ asset("js/nouislider.min.js") }}></script>
		<script src={{ asset("js/jquery.magnific-popup.min.js") }}></script>
		<script src={{ asset("js/owl.carousel.min.js") }}></script>
		<!--gmaps Js-->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
		<script src={{ asset("js/gmaps.min.js") }}></script>
		<script src={{ asset("js/main.js") }}></script>
	@show
	<div id="fb-root"></div>
	<script>
	window.fbAsyncInit = function() {
		FB.init({
		xfbml            : true,
		version          : 'v3.3'
		});
	};

	(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<!-- Your customer chat code -->
	<div class="fb-customerchat"
	attribution=setup_tool
	page_id="2240697212687648"
	logged_in_greeting="Xin chào, chúng tôi có thể giúp gì cho bạn?"
	logged_out_greeting="Xin chào, chúng tôi có thể giúp gì cho bạn?">
	</div>
</body>

</html>