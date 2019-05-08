@extends('layouts.karma')

@section('title')
    Danh mục
@endsection

@section('content')
    <!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1 style="font-family: Arial, Helvetica, sans-serif">Danh mục sản phẩm</h1>
				</div>
			</div>
		</div>
	</section>
    <!-- End Banner Area -->
    <br>
    <br>
	<div class="container">
		<div class="row">
			<div class="col-xl-3 col-lg-4 col-md-5">
				<div class="sidebar-categories">
					<div class="head">Danh mục</div>
					<ul class="main-categories">
						<li class="main-nav-list"><a href="{{route('catalog_route', ['id'=>0])}}" catalog_id="0">Tất cả</a></li>
						<li class="main-nav-list"><a data-toggle="collapse" href="#homeClean" catalog_id="1&2" aria-expanded="false" aria-controls="homeClean"><span
								 class="lnr lnr-arrow-right"></span>Giày thể thao</a>
							<ul class="collapse" id="homeClean" data-toggle="collapse" aria-expanded="false" aria-controls="homeClean">
								<li class="main-nav-list child"><a href="{{route('catalog_route', ['id'=>1])}}" catalog_id="1">Giày thể thao nam</a></li>
								<li class="main-nav-list child"><a href="{{route('catalog_route', ['id'=>2])}}" catalog_id="2">Giày thể thao nữ</a></li>
							</ul>
						</li>
						<li class="main-nav-list"><a data-toggle="collapse" href="#beauttyProduct" catalog_id="3&4" aria-expanded="false" aria-controls="beauttyProduct"><span
								 class="lnr lnr-arrow-right"></span>Giày bệt</a>
							<ul class="collapse" id="beauttyProduct" data-toggle="collapse" aria-expanded="false" aria-controls="beauttyProduct">
								<li class="main-nav-list child"><a href="{{route('catalog_route', ['id'=>3])}}" catalog_id="3">Giày bệt nam</a></li>
								<li class="main-nav-list child"><a href="{{route('catalog_route', ['id'=>4])}}" catalog_id="4">Giày bệt nữ</a></li>
							</ul>
						</li>
						<li class="main-nav-list"><a href="{{route('catalog_route', ['id'=>5])}}" catalog_id="5">Dép quai hậu</a></li>
						<li class="main-nav-list"><a href="{{route('catalog_route', ['id'=>6])}}" catalog_id="6">Giày dép trẻ em</a></li>
						<li class="main-nav-list"><a href="{{route('catalog_route', ['id'=>7])}}" catalog_id="7">Sản phẩm khác</a></li>
					</ul>
				</div>
				<div class="sidebar-filter mt-50">
					<div class="top-filter-head">Bộ lọc</div>
					<div class="common-filter">
						<div class="head">Thương hiệu</div>
						<form action="#">
							<ul>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="apple" name="brand"><label for="apple">Adidas</label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="asus" name="brand"><label for="asus">Nike</label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="asus" name="brand"><label for="asus">Bitis</label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="asus" name="brand"><label for="asus">Khác</label></li>								
							</ul>
						</form>
					</div>
					<div class="common-filter">
						<div class="head">Giá</div>
						<div class="price-range-area">
							<div id="price-range"></div>
							<div class="value-wrapper d-flex">
								<div class="price">Giá:</div>
								<span>$</span>
								<div id="lower-value"></div>
								<div class="to">tới</div>
								<span>$</span>
								<div id="upper-value"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-9 col-lg-8 col-md-7">
				<!-- Start Filter Bar -->
				<div class="filter-bar d-flex flex-wrap align-items-center">
					<div class="sorting">
						<select>
							<option value="1">Default sorting</option>
							<option value="1">Default sorting</option>
							<option value="1">Default sorting</option>
						</select>
					</div>
					<div class="sorting mr-auto">
						<select>
							<option value="1">Show 12</option>
							<option value="1">Show 12</option>
							<option value="1">Show 12</option>
						</select>
					</div>
					<div class="pagination">
						@if ($products->currentPage() > 1)
							<a href="{{$products->previousPageUrl()}}" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
						@endif
						@for($i = 1; $i <= $products->lastPage(); $i++)
							@if ($i == $products->currentPage())
								<a href="#" class="active">{{$i}}</a>
							@else
								<a href="{{$products->url($i)}}" class="">{{$i}}</a>
							@endif
						@endfor
						@if ($products->currentPage() < $products->lastPage())
							<a href="{{$products->nextPageUrl()}}" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
						@endif
					</div>
				</div>
				<!-- End Filter Bar -->
				<!-- Start Best Seller -->
				<section class="lattest-product-area pb-40 category-list">
					<div class="row">
						@foreach ($products as $item)
						<div class="col-lg-4 col-md-6">
								<div class="single-product">
									<a href="{{route('product', ['id'=>$item->id])}}">
									<img class="img-fluid" src="{{asset($item->img_link)}}" alt="">
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
				</section>
				<!-- End Best Seller -->
				<!-- Start Filter Bar -->
				<div class="filter-bar d-flex flex-wrap align-items-center">
					<div class="sorting mr-auto" style="visibility: hidden;">
						<select>
							<option value="1">Show 12</option>
							<option value="1">Show 12</option>
							<option value="1">Show 12</option>
						</select>
					</div>
					<div class="pagination">
						@if ($products->currentPage() > 1)
							<a href="{{$products->previousPageUrl()}}" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
						@endif
						@for($i = 1; $i <= $products->lastPage(); $i++)
							@if ($i == $products->currentPage())
								<a href="#" class="active">{{$i}}</a>
							@else
								<a href="{{$products->url($i)}}" class="">{{$i}}</a>
							@endif
						@endfor
						@if ($products->currentPage() < $products->lastPage())
							<a href="{{$products->nextPageUrl()}}" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
						@endif
					</div>
				</div>
				<!-- End Filter Bar -->
			</div>
		</div>
	</div>
	<br>
	<br>
@endsection

@section('javascript')
	@parent
	<script>
		$("a[catalog_id={{$id}}]").css('color', 'orange');
		@if ($id == 1 || $id == 2)
			$("a[catalog_id='1&2']").css('color', 'orange');
		@elseif ($id == 3 || $id == 4)
			$("a[catalog_id='3&4']").css('color', 'orange');
		@endif
	</script>
@endsection