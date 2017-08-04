@extends('main')
@section('title','carrinho')
@section('content')



     
	<!-- header start -->
	<header>
		<!-- header-top-area start -->
		<div class="header-top-area hidden-xs">
			<div class="container">
				<div class="row">
					<!-- header-top-left start -->
					<div class="col-lg-6 col-md-6 col-sm-7">
						<div class="header-top-left">
							<div class="top-message">Default welcome message</div>
							<div class="phone-number"> Call support free: <span>123 456  789</span></div>
						</div>
					</div>
					<!-- header-top-left end -->
					<!-- header-top-right start -->
					<div class="col-lg-6 col-md-6 col-sm-5">
						<div class="header-top-right">
							<div class="lang-select">
								<ul>
									<li><a href="#"><img src="img/en.png" alt="" /></a></li>
								</ul>
							</div>
							<div class="top-menu">
								<ul>
									<li><a href="my-account.html">My Account</a></li>
									<li><a href="wishlist.html">My Wishlist</a></li>
									<li><a href="cart.html">Cart</a></li>
									<li><a href="#">Login</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- header-top-right end -->
				</div>
			</div>
		</div>
		<!-- header-top-area end -->
		<!-- header-mid-area start -->
		<div class="header-mid-area">
			<div class="container">
				<div class="row">
					<!-- logo start -->
					<div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
						<div class="logo">
							<a href="index.html"><img src="img/logo/logo.png" alt="" /></a>
						</div>
					</div>
					<!-- logo end -->
					<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
						<!-- cart-total start -->
						<div class="cart-total">
							<ul>
								<li><a href="cart.html"><span class="cart-icon"><i class="fa fa-shopping-cart"></i></span> <span class="cart-no">My cart: (2)</span></a>
									<div class="mini-cart-content">
										<div class="cart-img-details">											
											<div class="cart-img-photo">
												<a href="#"><img src="img/product/total-cart.jpg" alt="" /></a>
												<span class="quantity">1</span>
											</div>
											<div class="cart-img-contaent">
												<a href="#"><p>Vestibulum suscipit</p></a>
												<span>£165.00</span>
											</div>
											<div class="pro-del"><a href="#"><i class="fa fa-times-circle"></i></a>
											</div>
										</div>
										<div class="clear"></div>
										<div class="cart-img-details">											
											<div class="cart-img-photo">
												<a href="#"><img src="img/product/total-cart2.jpg" alt="" /></a>
												<span class="quantity">1</span>
											</div>
											<div class="cart-img-contaent">
												<a href="#"><p>Donec sodales mauris in</p></a>
												<span>£50.00</span>
											</div>
											<div class="pro-del"><a href="#"><i class="fa fa-times-circle"></i></a>
											</div>
										</div>
										<div class="cart-inner-bottom">
											<p class="total">Subtotal: <span class="amount">£215.00</span></p>
											<div class="clear"></div>
											<p class="cart-button-top"><a href="checkout.html">Checkout</a></p>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<!-- cart-total end -->
						<!-- header-search start -->
						<div class="header-search">
							<form action="#">
								<input type="text" placeholder="Search product..." />
								<button type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
						<!-- header-search end -->
					</div>
				</div>
			</div>
		</div>
		<!-- header-mid-area end -->
		<!-- mainmenu-area start -->
		<div class="mainmenu-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="mainmenu">
							<nav>
								<ul>
									<li><a href="index.html">Home</a></li>
									<li><a href="about-us.html">about</a></li>
									<li><a href="blog.html">Blog</a></li>
									<li><a href="shop.html">Shop</a>
										<div class="mega-menu">											
											<span>
												<a href="#" class="mega-title">WOMEN CLOTH </a>
												<a href="shop.html">casual shirt</a>
												<a href="shop.html">rikke t-shirt</a>
												<a href="shop.html">mia top </a>
												<a href="shop.html">muscle tee </a>
											</span>
											<span>
												<a href="#" class="mega-title">MEN CLOTH </a>
												<a href="shop.html">casual shirt</a>
												<a href="shop.html">rikke t-shirt</a>
												<a href="shop.html">mia top </a>
												<a href="shop.html">muscle tee </a>
											</span>
											<span>
												<a href="#" class="mega-title">WOMEN JEWELRY </a>
												<a href="shop.html">necklace </a>
												<a href="shop.html">chunky short striped </a>
												<a href="shop.html">samhar cuff</a>
												<a href="shop.html">nail set </a>
											</span>
											<span class="mega-menu-img">
												<a href="shop.html"><img alt="" src="img/4.jpg"></a>
											</span>
										</div>									
									</li>
									<li><a href="#">Pages</a>
										<ul class="sub-menu">
											<li><a href="about-us.html">about us</a></li>
											<li><a href="contact.html">contact us</a></li>
											<li><a href="shop.html">shop grid</a></li>
											<li><a href="shop-list.html">shop list</a></li>
											<li><a href="product-virtual.html">product Details</a></li>
											<li><a href="blog.html">blog</a></li>
											<li><a href="blog-post-img.html">blog details</a></li>
											<li><a href="cart.html">shopping cart</a></li>
											<li><a href="checkout.html">checkout</a></li>
											<li><a href="wishlist.html">wishlist</a></li>
											<li><a href="my-account.html">my-account</a></li>
											<li><a href="404.html">404 page</a></li>
										</ul>									
									</li>
									<li><a href="shop.html">Footwear  </a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- mainmenu-area end -->
		<!-- mobile-menu-area start -->
		<div class="mobile-menu-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mobile-menu">
							<nav id="dropdown">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li><a href="blog.html">blog</a></li>
									<li><a href="shop.html">Shop</a></li>
									<li><a href="#">Pages</a>
										<ul>
											<li><a href="about-us.html">about us</a></li>
											<li><a href="contact.html">contact us</a></li>
											<li><a href="shop.html">shop grid</a></li>
											<li><a href="shop-list.html">shop list</a></li>
											<li><a href="product-virtual.html">product Details</a></li>
											<li><a href="blog.html">blog</a></li>
											<li><a href="blog-post-img.html">blog details</a></li>
											<li><a href="cart.html">shopping cart</a></li>
											<li><a href="checkout.html">checkout</a></li>
											<li><a href="wishlist.html">wishlist</a></li>
											<li><a href="my-account.html">my-account</a></li>
											<li><a href="404.html">404 page</a></li>
										</ul>
									</li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</nav>
						</div>					
					</div>
				</div>
			</div>
		</div>
		<!-- mobile-menu-area end -->
	</header>
	<!-- header end -->
	<!-- entry-header-area start -->
	<div class="entry-header-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="entry-header">
						<h1 class="entry-title">Carrinho</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- entry-header-area end -->

	<!-- cart-main-area start -->
	<div class="cart-main-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<form action="#">				
						<div class="table-content table-responsive">
							<table>
								<thead>
									<tr>
										<th class="product-thumbnail">Imagem</th>
										<th class="product-name">Item/ passeio</th>
										<th class="product-price">Preço</th>
										<th class="product-quantity">Quantidade</th>
										<th class="product-subtotal">Total</th>
										<th class="product-remove">Remover</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="product-thumbnail"><a href="#"><img src="img/cart.jpg" alt="" /></a></td>
										<td class="product-name"><a href="#">Vestibulum suscipit</a></td>
										<td class="product-price"><span class="amount">£165.00</span></td>
										<td class="product-quantity"><input type="number" value="1" /></td>
										<td class="product-subtotal">£165.00</td>
										<td class="product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
									</tr>
									<tr>
										<td class="product-thumbnail"><a href="#"><img src="img/cart2.jpg" alt="" /></a></td>
										<td class="product-name"><a href="#">Vestibulum dictum magna</a></td>
										<td class="product-price"><span class="amount">£50.00</span></td>
										<td class="product-quantity"><input type="number" value="1" /></td>
										<td class="product-subtotal">£50.00</td>
										<td class="product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="row">
							<div class="col-md-8 col-sm-7 col-xs-12">
								<div class="buttons-cart">
									<input type="submit" value="Update Cart" />
									<a href="#">Continuar Comprando</a>
								</div>
								
							</div>
							<div class="col-md-4 col-sm-5 col-xs-12">
								<div class="cart_totals">
									<h2>Total da Compra</h2>
									<table>
										<tbody>
											<tr class="cart-subtotal">
												<th>Subtotal</th>
												<td><span class="amount">£215.00</span></td>
											</tr>
											<tr class="shipping">
												<th>Shipping</th>
												<td>
													<ul id="shipping_method">
														<li>
															<input type="radio" /> 
															<label>
																Flat Rate: <span class="amount">£7.00</span>
															</label>
														</li>
														<li>
															<input type="radio" /> 
															<label>
																Free Shipping
															</label>
														</li>
														<li></li>
													</ul>
													<p><a class="shipping-calculator-button" href="#">Calculate Shipping</a></p>
												</td>
											</tr>
											<tr class="order-total">
												<th>Total</th>
												<td>
													<strong><span class="amount">£215.00</span></strong>
												</td>
											</tr>											
										</tbody>
									</table>
									<div class="wc-proceed-to-checkout">
										<a href="/checkout">Finalizar Compra</a>
									</div>
								</div>
							</div>
						</div>
					</form>	
				</div>
			</div>
		</div>
	</div>
	<!-- cart-main-area end -->	
	
	<!-- footer start -->

	<!-- footer end -->

		<!-- JS -->
		
	@endsection