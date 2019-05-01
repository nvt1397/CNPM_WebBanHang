@extends('layouts.karma')

@section('title')
	Shop - {{$product->name}}
@endsection

@section('stylesheet')
	<meta name="csrf_token" content="{{ csrf_token() }}" />
	<link rel="stylesheet" href={{ asset("css/linearicons.css") }}>
	<link rel="stylesheet" href={{ asset("css/font-awesome.min.css") }}>
	<link rel="stylesheet" href={{ asset("css/themify-icons.css") }}>
	<link rel="stylesheet" href={{ asset("css/bootstrap.css") }}>
	<link rel="stylesheet" href={{ asset("css/owl.carousel.css") }}>
	<link rel="stylesheet" href={{ asset("css/nice-select.css") }}>
	<link rel="stylesheet" href={{ asset("css/nouislider.min.css") }}>
	<link rel="stylesheet" href={{ asset("css/ion.rangeSlider.css") }} />
	<link rel="stylesheet" href={{ asset("css/ion.rangeSlider.skinFlat.css") }} />
	<link rel="stylesheet" href={{ asset("css/main.css") }}>
@endsection

@section('content')
	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Chi tiết sản phẩm</h1>
					<!--
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Shop<span class="lnr lnr-arrow-right"></span></a>
						<a href="single-product.html">product-details</a>
					</nav>
					-->
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Single Product Area =================-->
	<div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="s_Product_carousel">
						<div class="single-prd-item">
							<img class="img-fluid" src="{{asset($product->img_link)}}" alt="">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="{{asset($product->img_link)}}" alt="">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="{{asset($product->img_link)}}" alt="">
						</div>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3 style="font-family: Arial, Helvetica, sans-serif;">{{$product->name}}</h3>
						<h2 style="font-family: Arial, Helvetica, sans-serif;">Giá: {{$product->price}} VNĐ</h2>
						<ul class="list">
							<li><a class="active" href="#"><span>Loại</span> : Giày thể thao nam</a></li>
							<li><a href="#"><span>Tình trạng</span> : In Stock</a></li>
						</ul>
						<p>{{$product->description}}</p>
						<div class="product_count">
							<label for="qty">Số lượng:</label>
							<input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
							<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
							 class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
							<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
							 class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
						</div>
						<div class="card_area d-flex align-items-center">
							<a class="primary-btn" href="#">Thêm vào giỏ hàng</a>
							<a class="icon_btn" href="#"><i class="lnr lnr lnr-diamond"></i></a>
							<a class="icon_btn" href="#"><i class="lnr lnr lnr-heart"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================End Single Product Area =================-->

	<!--================Product Description Area =================-->
	<section class="product_description_area">
		<div class="container">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Mô tả</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
					 aria-selected="false">Thông số</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
					 aria-selected="false">Bình luận</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review"
					 aria-selected="false">Đánh giá</a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
					{{$product->description}}
				</div>
				<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<td>
										<h5>Width</h5>
									</td>
									<td>
										<h5>128mm</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Height</h5>
									</td>
									<td>
										<h5>508mm</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Depth</h5>
									</td>
									<td>
										<h5>85mm</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Weight</h5>
									</td>
									<td>
										<h5>52gm</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Quality checking</h5>
									</td>
									<td>
										<h5>yes</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Freshness Duration</h5>
									</td>
									<td>
										<h5>03days</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>When packeting</h5>
									</td>
									<td>
										<h5>Without touch of hand</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Each Box contains</h5>
									</td>
									<td>
										<h5>60pcs</h5>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="tab-pane fade show active" id="contact" role="tabpanel" aria-labelledby="contact-tab">
					<div class="row">
						<div class="col">
							<div class="comment_list" id="comment_list">
								@foreach ($comments as $comment)
									<div class="review_item">
										<div class="media">
											<div class="d-flex">
												<img src="{{asset($comment->user->avatar_link)}}" style="width:40px;height:40px" alt="">
											</div>
											<div class="media-body">
												<h4>{{$comment->user->name}}</h4>
												<h5>{{date('d/m/Y - H:i:s', $comment->created_at->timestamp)}}</h5>
												@auth<a class="reply_btn" href="#" number_comment="{{$comment->id}}" stt="0">Trả lời</a>@endauth
											</div>
										</div>
										<p>{{$comment->content}}</p>
									</div>
									@auth
									<div class="review_box mt-4 rep_box" id="{{'rep_box'.($comment->id)}}">
											<form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
												@csrf
												<div class="col-md-12">
													<div class="form-group">
														<textarea class="form-control" name="message" rows="1" placeholder="Bình luận"></textarea>
													</div>
												</div>
												<div class="col-md-12 text-right">
													<button type="submit" value="submit" class="btn primary-btn">Gửi</button>
												</div>
											</form>
										</div>
									@endauth
									@foreach ($comment->repComment as $rep)
										<div class="review_item reply">
											<div class="media">
												<div class="d-flex">
													<img src="{{asset($rep->user->avatar_link)}}" style="width:40px;height:40px" alt="">
												</div>
												<div class="media-body">
													<h4>{{$rep->user->name}}</h4>
													<h5>{{date('d/m/Y - H:i:s', $rep->created_at->timestamp)}}</h5>
												</div>
											</div>
											<p>{{$rep->content}}</p>
										</div>
									@endforeach

								@endforeach
							</div>
								@auth
								<div class="review_box mt-4" id="comment_box">
									<h4>Gửi bình luận</h4>
								<form class="row contact_form" method="get" id="comment_form" novalidate="novalidate">
										@csrf
										<div class="col-md-12">
											<div class="form-group">
												<textarea class="form-control" name="message" rows="1" placeholder="Bình luận"></textarea>
											</div>
										</div>
										<div class="col-md-12 text-right">
											<button type="button" id="comment_btn" value="submit" class="btn primary-btn">Gửi</button>
										</div>
									</form>
								</div>
								@endauth
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
					<div class="row">
						<div class="col-lg-6">
							<div class="row total_rate">
								<div class="col-6">
									<div class="box_total">
										<h5>Đánh giá chung</h5>
										<h4>{{$product->star}}</h4>
										<h6>({{$product->rating_number}} đánh giá)</h6>
									</div>
								</div>
								<div class="col-6">
									<div class="rating_list">
										<h3>Dựa trên {{$product->rating_number}} đánh giá</h3>
										<ul class="list">
											<li><a href="#">5 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
													 class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
											<li><a href="#">4 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
													 class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
											<li><a href="#">3 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
													 class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
											<li><a href="#">2 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
													 class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
											<li><a href="#">1 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
													 class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="review_list">
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="img/product/review-1.png" alt="">
										</div>
										<div class="media-body">
											<h4>Blake Ruiz</h4>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo</p>
								</div>
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="img/product/review-2.png" alt="">
										</div>
										<div class="media-body">
											<h4>Blake Ruiz</h4>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo</p>
								</div>
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="img/product/review-3.png" alt="">
										</div>
										<div class="media-body">
											<h4>Blake Ruiz</h4>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="review_box">
								<h4>Add a Review</h4>
								<p>Your Rating:</p>
								<ul class="list">
									<li><a href="#"><i class="fa fa-star"></i></a></li>
									<li><a href="#"><i class="fa fa-star"></i></a></li>
									<li><a href="#"><i class="fa fa-star"></i></a></li>
									<li><a href="#"><i class="fa fa-star"></i></a></li>
									<li><a href="#"><i class="fa fa-star"></i></a></li>
								</ul>
								<p>Outstanding</p>
								<form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" name="name" placeholder="Your Full name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Full name'">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="email" class="form-control" name="email" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" name="number" placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="form-control" name="message" id="message" rows="1" placeholder="Review" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Review'"></textarea></textarea>
										</div>
									</div>
									<div class="col-md-12 text-right">
										<button type="submit" value="submit" class="primary-btn">Submit Now</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Product Description Area =================-->

	<!-- Start related-product Area -->
	<section class="related-product-area section_gap_bottom">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<div class="section-title">
						<h1>Deals of the Week</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
							magna aliqua.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-9">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="img/r1.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="img/r2.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="img/r3.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="img/r5.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="img/r6.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="img/r7.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-related-product d-flex">
								<a href="#"><img src="img/r9.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-related-product d-flex">
								<a href="#"><img src="img/r10.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-related-product d-flex">
								<a href="#"><img src="img/r11.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="ctg-right">
						<a href="#" target="_blank">
							<img class="img-fluid d-block mx-auto" src="img/category/c5.jpg" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End related-product Area -->
@endsection

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
	<script>
		function replyBtnClick(event) {
			event.preventDefault();
				let number = $(this).attr("number_comment");
				let commentId = "rep_box" + number;
				$("#" + commentId).toggle();
				if ($(this).attr("stt") === "0") {
					$(this).text("Đóng");
					$(this).attr("stt", "1");
				} else {
					$(this).text("Trả lời");
					$(this).attr("stt", "0");
				}
		}
		$(document).ready(function(){
			$(".rep_box").hide();
			$(".reply_btn").click(replyBtnClick);
		});
	</script>
	@auth
		<script>
			$(document).ready(function(){
				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});

				$("#comment_btn").click(function() {
					let formData = $("#comment_form").serializeArray();
					let _token = formData[0]["value"];
					let msg = formData[1]["value"];
					document.getElementById('comment_form').reset();
					$.ajax({
						url: "{{ route('comment') }}",
						type: "POST",
						beforeSend: function (xhr) {
							var token = $('meta[name="csrf_token"]').attr('content');
							if (token) {
								return xhr.setRequestHeader('X-CSRF-TOKEN', token);
							}
						},
						data: {
							message: msg, 
							product_id: {{ $product->id }}
						},
						success: function(data) {
							$("#comment_list").append(
								`<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="{{asset(Auth::user()->avatar_link)}}" style="width:40px;height:40px" alt="">
										</div>
										<div class="media-body">
											<h4>{{Auth::user()->name}}</h4>
											<h5>${data.created_at}</h5>
											<a class="reply_btn" href="#" number_comment="${data.id}" stt="0">Trả lời</a>
										</div>
									</div>
									<p>${data.content}</p>
								</div>
								<div class="review_box mt-4 rep_box" id="${"rep_box"+data.id}">
											<form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
												@csrf
												<div class="col-md-12">
													<div class="form-group">
														<textarea class="form-control" name="message" rows="1" placeholder="Bình luận"></textarea>
													</div>
												</div>
												<div class="col-md-12 text-right">
													<button type="submit" value="submit" class="btn primary-btn">Gửi</button>
												</div>
											</form>
										</div>`
							);
							$("#rep_box"+data.id).hide();
							$(`.reply_btn[number_comment="${data.id}"`).click(replyBtnClick);
						},
						error: function(err) {
							alert("Vui lòng nhập nội dung");
						}
					});
				});
			});
		</script>
	@endauth
@endsection