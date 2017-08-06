@extends('main')
@section('title','pagamento')
@section('content')

	<!-- checkout-area start -->
	<div class="checkout-area">
		<div class="container">
			<div class="row">
				<form action="#">
					<div class="col-lg-6 col-md-6">
						<div class="checkbox-form">						
							<h3>Endereço do passeio</h3>
							<div class="row">
								<div class="col-md-12">
									<div class="country-select">
										<label>Cidade <span class="required">*</span></label>
										<select>
										  <option value="1">Campos do Jordão</option>									 
										</select> 										
									</div>
								</div>
								<div class="col-md-6">
									<div class="checkout-form-list">
										<label>Nome <span class="required">*</span></label>										
										<input type="text" placeholder="" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="checkout-form-list">
										<label>Sobrenome <span class="required">*</span></label>										
										<input type="text" placeholder="" />
									</div>
								</div>
								<div class="col-md-12">
									<div class="checkout-form-list">
										<label>Nome do Hotel</label>
										<input type="text" placeholder="" />
									</div>
								</div>
								<div class="col-md-12">
									<div class="checkout-form-list">
										<label>Endereço do Hotel/Pousada <span class="required">*</span></label>
										<input type="text" placeholder="Rua, numero, bairro." />
									</div>
								</div>
								<div class="col-md-12">
									<div class="checkout-form-list">									
										<input type="text" placeholder="Apartmento, suite, quantidade (optional)" />
									</div>
								</div>								
								<div class="col-md-6">
									<div class="checkout-form-list">
										<label>Email  <span class="required">*</span></label>										
										<input type="email" placeholder="" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="checkout-form-list">
										<label>Telefone  <span class="required">*</span></label>										
										<input type="text" placeholder="(XX)(*********)" />
									</div>
								</div>							
							</div>
																				
						</div>
					</div>	
					<div class="col-lg-6 col-md-6">
						<div class="your-order">
							<h3>Your order</h3>
							<div class="your-order-table table-responsive">
								<table>
									<thead>
										<tr>
											<th class="product-name">Product</th>
											<th class="product-total">Total</th>
										</tr>							
									</thead>
									<tbody>
										<tr class="cart_item">
											<td class="product-name">
												Vestibulum suscipit <strong class="product-quantity"> × 1</strong>
											</td>
											<td class="product-total">
												<span class="amount">£165.00</span>
											</td>
										</tr>
										<tr class="cart_item">
											<td class="product-name">
												Vestibulum dictum magna	<strong class="product-quantity"> × 1</strong>
											</td>
											<td class="product-total">
												<span class="amount">£50.00</span>
											</td>
										</tr>
									</tbody>
									<tfoot>
										<tr class="cart-subtotal">
											<th>Cart Subtotal</th>
											<td><span class="amount">£215.00</span></td>
										</tr>
										<tr class="shipping">
											<th>Shipping</th>
											<td>
												<ul>
													<li>
														<input type="radio" />
														<label>
															Flat Rate: <span class="amount">£7.00</span>
														</label>
													</li>
													<li>
														<input type="radio" />
														<label>Free Shipping:</label>
													</li>
													<li></li>
												</ul>
											</td>
										</tr>
										<tr class="order-total">
											<th>Order Total</th>
											<td><strong><span class="amount">£215.00</span></strong>
											</td>
										</tr>								
									</tfoot>
								</table>
							</div>
							<div class="payment-method">
								<div class="payment-accordion">
									<!-- ACCORDION START -->
									<h3>Direct Bank Transfer</h3>
									<div class="payment-content">
										<p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
									</div>
									<!-- ACCORDION END -->	
									<!-- ACCORDION START -->
									<h3>Cheque Payment</h3>
									<div class="payment-content">
										<p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
									</div>
									<!-- ACCORDION END -->	
									<!-- ACCORDION START -->
									<h3>PayPal <img src="img/cart/payment.png" alt="" /></h3>
									<div class="payment-content">
										<p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
									</div>
									<!-- ACCORDION END -->									
								</div>
								<div class="order-button-payment">
									<input type="submit" value="Place order" />
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- checkout-area end -->	
	
	@endsection