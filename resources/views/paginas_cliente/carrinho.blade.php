@extends('main1')
@section('title','carrinho')
@section('content')


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
		
	@endsection