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
	<link rel="stylesheet" href={{ asset("css/magnific-popup.css") }}>
	<link rel="stylesheet" href={{ asset("css/main.css") }}>
	<style>
		* {
			word-wrap: break-word;
		}
	</style>
@endsection

@section('content')
	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1 class="text-secondary">{{$product->name}}</h1>
				<!--	<nav class="d-flex align-items-center">
						<a href="index.html">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Sản phẩm<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">{{$product->name}}</a>
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
						<h2 style="font-family: Arial, Helvetica, sans-serif;">Giá: {{number_format($product->price, 0)}} VNĐ</h2>
						<ul class="list">
							<li><a class="active" href="#"><span>Loại</span> : </a></li>
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
								@auth
								<div class="review_box mb-4" id="comment_box">
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
								<hr>
								<br>
								@endauth
							<div class="comment_list" id="comment_list">
								@foreach ($comments->reverse() as $comment)
									<div class="review_item" style="overflow:auto">
										<div class="media" id="comment_{{$comment->id}}">
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
											<form class="row contact_form" action="contact_process.php" method="post" id="rep_form{{$comment->id}}" novalidate="novalidate">
												@csrf
												<div class="col-md-12">
													<div class="form-group">
														<textarea class="form-control" name="message" rows="1" placeholder="Trả lời"></textarea>
													</div>
												</div>
												<div class="col-md-12 text-right">
													<button type="button" id="{{"rep_btn".($comment->id)}}" rep_number="{{$comment->id}}" value="submit" class="btn primary-btn rep_btn">Gửi</button>
												</div>
											</form>
										</div>
									@endauth
									@foreach ($comment->repComment->reverse() as $rep)
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
									<br>
									<hr>
									<br>
								@endforeach
							</div>
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
										<h4>{{number_format($product->reviews->avg('stars'), 1)}}</h4>
										<h6>({{$product->reviews->count()}} đánh giá)</h6>
									</div>
								</div>
								<div class="col-6">
									<div class="rating_list">
										<h3>Dựa trên {{$product->reviews->count()}} đánh giá</h3>
										<ul class="list">
											<li><a href="#">5 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
													 class="fa fa-star"></i><i class="fa fa-star"></i></a></li>
											<li><a href="#">4 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
													 class="fa fa-star"></i><i class="fa fa-star-o"></i></a></li>
											<li><a href="#">3 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
													 class="fa fa-star-o"></i><i class="fa fa-star-o"></i></a></li>
											<li><a href="#">2 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i
													 class="fa fa-star-o"></i><i class="fa fa-star-o"></i></a></li>
											<li><a href="#">1 Star <i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i
													 class="fa fa-star-o"></i><i class="fa fa-star-o"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="review_list" id="review_star_list">
								@foreach ($reviews->reverse() as $review)
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="{{asset($review->user->avatar_link)}}" style="width:40px;height:40px;" alt="">
										</div>
										<div class="media-body">
											<h4>{{$review->user->name}}</h4>
											@for ($i = 0; $i < $review->stars; $i++)
												<i class="fa fa-star"></i>
											@endfor
										</div>
									</div>
									<p>{{$review->content}}</p>
								</div>
								@endforeach
							</div>
						</div>
						<div class="col-lg-6">
							@auth
							@if ($product->reviews->where('user_id', Auth::id())->count() === 0)
							<div class="review_box" id="review_panel_box">
								<h4>Thêm đánh giá</h4>
								<form class="row contact_form" action="contact_process.php" method="post" id="review_form" novalidate="novalidate">
									<div class="col-md-12">
											<div class="custom-control custom-radio">
												<input type="radio" class="custom-control-input" id="star1" value="1" name="radio-stacked" required>
												<label class="custom-control-label" for="star1">1</label>
											</div>
											<div class="custom-control custom-radio">
												<input type="radio" class="custom-control-input" id="star2" value="2" name="radio-stacked" required>
												<label class="custom-control-label" for="star2">2</label>
											</div>
											<div class="custom-control custom-radio">
												<input type="radio" class="custom-control-input" id="star3" value="3" name="radio-stacked" required>
												<label class="custom-control-label" for="star3">3</label>
											</div>
											<div class="custom-control custom-radio">
												<input type="radio" class="custom-control-input" id="star4" value="4" name="radio-stacked" required>
												<label class="custom-control-label" for="star4">4</label>
											</div>
											<div class="custom-control custom-radio">
												<input type="radio" class="custom-control-input" id="star5" value="5" name="radio-stacked" checked required>
												<label class="custom-control-label" for="star5">5</label>
											</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="form-control" name="message" id="message" rows="1" placeholder="Review" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Review'"></textarea></textarea>
										</div>
									</div>
									<div class="col-md-12 text-right">
										<button type="button" value="submit" id="review_btn" class="primary-btn">Gửi đánh giá</button>
									</div>
								</form>
								@else
									<h4>Bạn đã đánh giá sản phẩm này</h4>
								@endif
								@endauth
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Product Description Area =================-->
	<!-- Start single product area -->
	<!--================End Single product Area =================-->
	<!-- Start related-product Area -->
	<section class="related-product-area section_gap_bottom">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<div class="section-title">
						<h1>Sản phẩm khác</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="row">
						@foreach (App\Product::inRandomOrder()->where('id', '!=', $product->id)->take(6)->get() as $item)
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
								<div class="single-related-product d-flex">
									<a href="#"><img src="{{asset($item->img_link)}}" style="width:80px; height:80px" alt=""></a>
									<div class="desc">
										<a href="{{asset('product/id/'.$item->id)}}" class="title">{{$item->name}}</a>
									</div>
								</div>
							</div>
						@endforeach
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
				function repForm() {
						let comment_id = $(this).attr("rep_number");
						let msg = $(`#rep_form${comment_id}`).serializeArray()[1]["value"];
						document.getElementById(`rep_form${comment_id}`).reset();
						$(`.reply_btn[number_comment="${comment_id}"]`).click();
						$.ajax({
							url: "{{ route('rep_comment') }}",
							type: "POST",
							beforeSend: function (xhr) {
								var token = $('meta[name="csrf_token"]').attr('content');
								if (token) {
									return xhr.setRequestHeader('X-CSRF-TOKEN', token);
								}
							},
							data: {
								message: msg, 
								comment1_id: comment_id
							},
							success: function(data) {
								console.log(data);
								$(`#rep_box${comment_id}`).after(
									`<div class="review_item reply">
										<div class="media">
											<div class="d-flex">
												<img src="{{asset(Auth::user()->avatar_link)}}" style="width:40px;height:40px" alt="">
											</div>
											<div class="media-body">
												<h4>{{Auth::user()->name}}</h4>
												<h5>${data.created_at}</h5>
											</div>
										</div>
										<p>${data.content}</p>
									</div>`
								);

							},
							error: function(err) {
								alert("Vui lòng nhập nội dung");
							}
						});
					}

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
							$("#comment_list").prepend(
								`<div class="review_item">
									<div class="media" id="comment_${data.id}">
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
											<form class="row contact_form" action="contact_process.php" method="post" id="rep_form${data.id}" novalidate="novalidate">
												@csrf
												<div class="col-md-12">
													<div class="form-group">
														<textarea class="form-control" name="message" rows="1" placeholder="Trả lời"></textarea>
													</div>
												</div>
												<div class="col-md-12 text-right">
													<button type="button" value="submit" id="rep_btn${data.id}" rep_number="${data.id}" class="btn primary-btn">Gửi</button>
												</div>
											</form>
										</div>
										<br>
										<hr>
										<br>`
							);
							$("#rep_box"+data.id).hide();
							$(`.reply_btn[number_comment="${data.id}"`).click(replyBtnClick);
							$(`#rep_btn${data.id}`).click(repForm);
						},
						error: function(err) {
							alert("Vui lòng nhập nội dung");
						}
					});
				});

				$(".rep_btn").click(repForm);

				$("#review_btn").click(function() {
					let reviewForm = $("#review_form").serializeArray();
					let star = reviewForm[0]['value'];
					let msg = reviewForm[1]['value'];
					document.getElementById('review_form').reset();
					$.ajax({
						url: "{{ route('review') }}",
						type: "POST",
						beforeSend: function (xhr) {
							var token = $('meta[name="csrf_token"]').attr('content');
							if (token) {
								return xhr.setRequestHeader('X-CSRF-TOKEN', token);
							}
						},
						data: {
							stars: star,
							message: msg,
							product_id: {{$product->id}}
						},
						success: function(data) {
							$('#review_star_list').prepend(
								`<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="{{asset(Auth::user()->avatar_link)}}" style="width:40px;height:40px;" alt="">
										</div>
										<div class="media-body">
											<h4>{{Auth::user()->name}}</h4>`+
												`<i class="fa fa-star"></i>
												`.repeat(data)+
										`
										</div>
									</div>
									<p>${msg}</p>
								</div>`
							);
							$("#review_panel_box").after("<h4>Bạn đã đánh giá sản phẩm này");
							$("#review_panel_box").remove();
						},
						error: function(err) {
							alert('Lỗi');
						}
					});
				});
			});

		</script>
	@endauth
@endsection