@extends('layouts.karma')

@section('title')
    Karma shop
@endsection

@section('content')

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1 class="text-secondary">Shop giày thể thao</h1>
				<!--	<nav class="d-flex align-items-center">
						<a href="index.html">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Sản phẩm<span class="lnr lnr-arrow-right"></span></a>
						<a href="#"></a>
					</nav>
				-->
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!-- start features Area -->
	<section class="features-area section_gap">
		<div class="container">
			<div class="row features-inner">
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon1.png" alt="">
						</div>
						<h6>Giao hàng miễn phí</h6>
						<p>Áp dụng cho mọi đơn hàng</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon2.png" alt="">
						</div>
						<h6>Chính sách đổi trả</h6>
						<p>Áp dụng cho mọi đơn hàng</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon3.png" alt="">
						</div>
						<h6>Hỗ trợ 24/24</h6>
						<p>Chat qua messeneger</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon4.png" alt="">
						</div>
						<h6>Bảo mật thanh toán</h6>
						<p>Liên kết ngân hàng</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end features Area -->

	<!-- Start category Area -->
	<section class="category-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="section-title text-center">
                    <h1>Sản phẩm đa dạng</h1>
                    <p>Cập nhật những mẫu sản phẩm mới nhất, bắt trend.</p>
                </div>
            </div>
        </div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-4">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="img/category/thethaonam.jpg" alt="">
								<a href="img/category/c1.jpg" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Giày thể thao nam</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-4">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="img/category/thethaonu.jpg" alt="">
								<a href="img/category/c2.jpg" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Giày thể thao nữ</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-4">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="img/category/betnu.jpg" alt="">
								<a href="img/category/c3.jpg" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Giày bệt nữ</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-4">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="img/category/betnam.jpg" alt="">
								<a href="img/category/c4.jpg" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Giày bệt nam</h6>
									</div>
								</a>
							</div>
                        </div>
						<div class="col-md-4">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="img/category/depquaihau.jpeg" alt="">
								<a href="img/category/c4.jpg" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Dép quai hậu</h6>
									</div>
								</a>
							</div>
                        </div>
						<div class="col-md-4">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="img/category/treem.jpg" alt="">
								<a href="img/category/c4.jpg" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Giày dép trẻ em</h6>
									</div>
								</a>
							</div>
                        </div>                         
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End category Area -->

	<!-- start product Area -->
	<section class="owl-carousel active-product-area section_gap">
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Sản phẩm mới</h1>
							<p>Cập nhật những mẫu sản phẩm mới nhất, bắt trend.</p>
						</div>
					</div>
				</div>
				<div class="row">
                    <!-- single product -->
                    @foreach (App\Product::all()->reverse()->take(8) as $item)
                    <div class="col-lg-3 col-md-6">
						<div class="single-product">
                            <a href="{{route('product', ['id'=>$item->id])}}">
                            <img class="img-fluid" src="{{$item->img_link}}" alt="">
                            </a>
							<div class="product-details">
                                <h6>{{$item->name}}</h6>
								<div class="price">
                                    <h6>{{number_format($item->price, 0)}} VNĐ</h6>
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
                        </div>
                    </div>
                    @endforeach
					
				</div>
					
			</div>
		</div>
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Sản phẩm mới</h1>
							<p>Cập nhật những mẫu sản phẩm mới nhất, bắt trend.</p>
						</div>
					</div>
				</div>
				<div class="row">
                    <!-- single product -->
                    @foreach (App\Product::all()->reverse()->take(8) as $item)
                    <div class="col-lg-3 col-md-6">
						<div class="single-product">
                            <a href="{{route('product', ['id'=>$item->id])}}">
                            <img class="img-fluid" src="{{$item->img_link}}" alt="">
                            </a>
							<div class="product-details">
                                <h6>{{$item->name}}</h6>
								<div class="price">
                                    <h6>{{number_format($item->price, 0)}} VNĐ</h6>
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
                        </div>
                    </div>
                    @endforeach
					
				</div>
					
			</div>
		</div>
	</section>
	<!-- end product Area -->

	<!-- Start exclusive deal Area -->
	<section class="exclusive-deal-area">
		<div class="container-fluid">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-6 no-padding exclusive-left">
					<div class="row clock_sec clockdiv" id="clockdiv">
						<div class="col-lg-12">
							<h1>Đặt hàng sớm nhất để nhận ưu đãi</h1>
							<p>Số lượng ưu đãi áp dụng có hạn</p>
						</div>
						<div class="col-lg-12">
							<div class="row clock-wrap">
								<div class="col clockinner1 clockinner">
									<h1 class="days">5</h1>
									<span class="smalltext">Ngày</span>
								</div>
								<div class="col clockinner clockinner1">
									<h1 class="hours">23</h1>
									<span class="smalltext">Giờ</span>
								</div>
								<div class="col clockinner clockinner1">
									<h1 class="minutes">47</h1>
									<span class="smalltext">Phút</span>
								</div>
								<div class="col clockinner clockinner1">
									<h1 class="seconds">59</h1>
									<span class="smalltext">Giây</span>
								</div>
							</div>
						</div>
					</div>
					<a href="" class="primary-btn">Mua hàng ngay</a>
				</div>
				<div class="col-lg-6 no-padding exclusive-right">
					<div class="active-exclusive-product-slider">
						@foreach (App\Product::inRandomOrder()->take(6)->get() as $item)
						<div class="single-exclusive-slider">
							<a href="{{route('product', ['id'=>$item->id])}}">
							<img class="img-fluid" src="{{asset($item->img_link)}}" alt="">
							</a>
							<div class="product-details">
								<div class="price">
									<h6>{{number_format($item->price, 0)}}</h6>
								</div>
								<h4>{{$item->name}}</h4>
								<div class="add-bag d-flex align-items-center justify-content-center">
									<a class="add-btn" href=""><span class="ti-bag"></span></a>
									<span class="add-text text-uppercase">Thêm vào giỏ hàng</span>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End exclusive deal Area -->

@endsection
@section('javascript')
	@parent
@endsection
