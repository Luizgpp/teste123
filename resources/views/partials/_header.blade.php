
		<!-- header-top-area start -->
		<div class="header-top-area hidden-xs">
			<div class="container">
				<div class="row">
					<!-- header-top-left start -->
					<div class="col-lg-6 col-md-6 col-sm-7">
						<div class="header-top-left">
							<div class="top-message">Seja bem vindo a Campos Tour</div>
							<div class="phone-number"> Tire suas duvidas <span>(12) 9 9999 9999</span></div>
						</div>
					</div>
					<!-- header-top-left end -->
					<!-- header-top-right start -->
					<div class="col-lg-6 col-md-6 col-sm-5">
						<div class="header-top-right">
							<div class="top-menu">
								<ul>
									@if (Auth::guest())
										<li><a href="{{ route('login') }}">Login</a></li>
										<li><a href="/carrinho">Carrinho</a></li>
									@else
									<li><a href="my-account.html">Minha Conta</a></li>
									<li><a href="/desejos">Lista de Desejos</a></li>									
										 {{--  <li>{{ Auth::user()->name }}</li>   --}}
										<li>
											<a href="{{ route('logout') }}"
												onclick="event.preventDefault();
														document.getElementById('logout-form').submit();">
												Logout
											</a>
											<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
												{{ csrf_field() }}
											</form>
										</li>
									@endif
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
					@if (Auth::guest())
						<!-- cart-total start -->
						<div class="cart-total">
							<ul>
								<li><a href="/carrinho"><span class="cart-icon"><i class="fa fa-shopping-cart"></i></span> <span class="cart-no">Carrinho: (2)</span></a>
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
						@endif
						<!-- header-search start -->
						<div class="header-search">
							<form action="#">
								<input type="text" placeholder="Buscar Tour..." />
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
									<li><a href="/">Home</a></li>
									<li><a href="/sobre">Sobre</a></li>
									{{--  <li><a href="blog.html">Blog</a></li>  --}}
									<li><a href="/pacote">Pacotes</a>
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
									{{--  <li><a href="#">Pages</a>
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
									</li>  --}}
									{{--  <li><a href="shop.html">Footwear  </a></li>  --}}
									<li><a href="/contato">Contato</a></li>
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
									{{--  <li><a href="blog.html">blog</a></li>  --}}
									<li><a href="shop.html">Pacotes</a></li>
									{{--  <li><a href="#">Pages</a>
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
									</li>  --}}
									<li><a href="contact.html">Contato</a></li>
								</ul>
							</nav>
						</div>					
					</div>
				</div>
			</div>
		</div>
		<!-- mobile-menu-area end -->
