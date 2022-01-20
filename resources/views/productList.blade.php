@extends('include.app')


@section('content')
<section class="section-products">
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-md-8 col-lg-6">
				<div class="header">
					<h3>Featured Product</h3>
					<h2>Popular Products</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- Single Product -->
			<div class="col-md-6 col-lg-4 col-xl-3">
				<div id="product-1" class="single-product">
					<div class="part-1">
						<ul>
							<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
							<li><a href="#"><i class="fas fa-heart"></i></a></li>
							<li><a href="#"><i class="fas fa-plus"></i></a></li>
							<li><a href="#"><i class="fas fa-expand"></i></a></li>
						</ul>
					</div>
					<div class="part-2">
						<h3 class="product-title">LADY-DATEJUST</h3>
						<h4 class="product-old-price">7000.99</h4>
						<h4 class="product-price">6000.00</h4>
					</div>
				</div>
			</div>
			<!-- Single Product -->
			<div class="col-md-6 col-lg-4 col-xl-3">
				<div id="product-2" class="single-product">
					<div class="part-1">
						<span class="discount">15% off</span>
						<ul>
							<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
							<li><a href="#"><i class="fas fa-heart"></i></a></li>
							<li><a href="#"><i class="fas fa-plus"></i></a></li>
							<li><a href="#"><i class="fas fa-expand"></i></a></li>
						</ul>
					</div>
					<div class="part-2">
						<h3 class="product-title">PEARLMASTER 39</h3>
						<h4 class="product-price">9000.00</h4>
					</div>
				</div>
			</div>
			<!-- Single Product -->
			<div class="col-md-6 col-lg-4 col-xl-3">
				<div id="product-3" class="single-product">
					<div class="part-1">
						<ul>
							<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
							<li><a href="#"><i class="fas fa-heart"></i></a></li>
							<li><a href="#"><i class="fas fa-plus"></i></a></li>
							<li><a href="#"><i class="fas fa-expand"></i></a></li>
						</ul>
					</div>
					<div class="part-2">
						<h3 class="product-title">Cosmograph Daytona</h3>
						<h4 class="product-old-price">5500:00</h4>
						<h4 class="product-price">3000.00</h4>
					</div>
				</div>
			</div>
			<!-- Single Product -->
			<div class="col-md-6 col-lg-4 col-xl-3">
				<div id="product-4" class="single-product">
					<div class="part-1">
						<span class="new">new</span>
						<ul>
							<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
							<li><a href="#"><i class="fas fa-heart"></i></a></li>
							<li><a href="#"><i class="fas fa-plus"></i></a></li>
							<li><a href="#"><i class="fas fa-expand"></i></a></li>
						</ul>
					</div>
					<div class="part-2">
						<h3 class="product-title">PEARLMASTER 39</h3>
						<h4 class="product-price">3500.00</h4>
					</div>
				</div>
			</div>
			<!-- Single Product -->
			
			<!-- Single Product -->
			
		</div>
	</div>
</section>
@endsection