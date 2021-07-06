<?php
$pagetitle = 'Checkout';
$active = 'checkout';
include 'header.php';
include './template/nav.php';
$activeTab = 'cart';
?>

<nav class="custombreadcrumb">
	<div class="nav-wrapper section-rule">
		<div class="col s12">
			<a href="./index.php" class="breadcrumb">Home</a>
			<a href="./cart.php" class="breadcrumb">My Cart</a>
			<a href="#!" class="breadcrumb">Check Out</a>
		</div>
	</div>
</nav>

<main class="cart-page checkout-page">
	<div class="section-rule">
		<form method="" action class="row">
			<aside class="col s12 m8 cart">
				<div class="card-panel">
					<div class="card-content">
						<div class="row">
							<div class="input-field col s12 m6">
								<label for="name">Full Name</label>

								<input placeholder="First and Last Name" type="text" id="name" class="validate">
							</div>

							<div class="input-field col s12 m6">
								<label for="phone">Phone Number</label>

								<input  type="tel" class="validate" id="phone" placeholder="+977">
							</div>

							<div class="input-field col s12 m6">
								<label for="region">Region</label>
								<select>
									<option value="" disabled selected>Choose your Region</option>
									<option value="1">Bagmati</option>
									<option value="2">Gandaki</option>
									<option value="3">Lumbini</option>
								</select>
							</div>

							<div class="input-field col s12 m6">
								<label for="city">City</label>
								<input  type="text" class="validate" id="city" placeholder="Kathmandu">
							</div>

							<div class="input-field col s12 m6">
								<label for="adder">Address</label>
								<input  type="text" class="validate" id="adder" placeholder="For Example: House# 123, Street# 123, ABC Road">
							</div>

							<div class="input-field col s12 m6 radio">
								<div class="row">
									<p class="col s6">
										<label>
											<input name="group1" type="radio" checked />
											<span>Cash on delivery</span>
										</label>
									</p>
									<p class="col s6">
										<label>
											<input name="group1" type="radio" />
											<span>Pay online</span>
										</label>
									</p>
								</div>
							</div>
							
						</div>

					</div>
				</div>
				<div class="card-panel">
					<div class="card-content">
						<table class="striped ">
							<thead>
								<tr>
									<th>Product details</th>
									<th>Price</th>
									<th>Quantity</th>
									<th>Sub Total</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<div class="semi-card">
											<div class="card-image">
												<img src="./images/png/kari-shea-ItMggD0EguY-unsplash-removebg-preview.png" alt="">
											</div>
											<h3 class="title"><a href="./single-page.php">CHAIR ALADIN#2(6501CH)PU BLACK#B9</a></h3>
										</div>
									</td>
									<td>NRS 12000</td>
									<td>
										<p>4</p>
									</td>
									<td><p class="price">NRS 12000</p></td>
									
								</tr>
								<tr>
									<td>
										<div class="semi-card">
											<div class="card-image">
												<img src="./images/png/phillip-goldsberry-fZuleEfeA1Q-unsplash-removebg-preview.png" alt="">
											</div>
											<h3 class="title"><a href="./single-page.php">SOFA MAMARA CORNER(L) LEATHER SL BROWN</a></h3>
										</div>
									</td>
									<td>NRS 1,12,000</td>
									<td>
										<p>4</p>
									</td>
									<td><p class="price">NRS 1,12,000</p></td>
									
								</tr>
								<tr>
									<td>
										<div class="semi-card">
											<div class="card-image">
												<img src="./images/png/pacific-office-interiors-kGs09BE5o3s-unsplash-removebg-preview.png" alt="">
											</div>
											<h3 class="title"><a href="./single-page.php">END TABLE ALEGRO STEEL BLACK S*2</a></h3>
										</div>
									</td>
									<td>NRS 12,200</td>
									<td>
										<p>4</p>
									</td>
									<td><p class="price">NRS 26,400</p></td>
									
								</tr>

							</tbody>
						</table>
					</div>
				</div>
				<div class="card-panel empty row">
					<div class="card-content center">
						<h3>Your Cart is Empty</h3>
						<button onclick="window.location.href='./search.php'">Search Your Product</button>
					</div>
				</div>
			</aside>
			<aside class="col s12 m4 proceedto">
				<article class="card-panel">
					<div class="card-content">
						<p>Delivery and payment options can be selected later</p>
						<p><i class="material-icons">verified_user</i>Safe and Secure Payments </p>
						<p><i class="material-icons">sync </i> 100% Payment Protection, Easy Returns Policy</p>
						<p>Vat and Tax are included</p>
						<h3><span>total item</span> <span >4</span></h3>
						<h3><span>Sub total </span><span class="price">NRS 40,000</span></h3>
						<button onclick="window.location.href='#'" type="submit">Place an order</button>
					</div>
				</article>
			</aside>
		</form>
	</div>
</main>

<?php
include 'footer.php';
?>
<script type="text/javascript" src="./js/custom.js"></script>
<script>
	$(document).ready(function(){
		$('select').formSelect();
		if($(window).width()<486){
			$('.cart-page table.striped').addClass('responsive-table');
		}
	});
</script>
</body>
</html>