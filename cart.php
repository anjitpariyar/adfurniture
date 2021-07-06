<?php
$pagetitle = 'Cart';
$active = 'cart';
include 'header.php';
include './template/nav.php';
$activeTab = 'cart';
?>

<nav class="custombreadcrumb">
	<div class="nav-wrapper section-rule">
		<div class="col s12">
			<a href="./index.php" class="breadcrumb">Home</a>
			<a href="#!" class="breadcrumb">My Cart</a>
		</div>
	</div>
</nav>

<main class="cart-page">
	<div class="section-rule">
		<div class="row">
			<aside class="col s12 m8 cart">
				<div class="card-panel">
					<div class="card-content">
						<table class="striped ">
							<thead>
								<tr>
									<th>Product details</th>
									<th>Price</th>
									<th>Quantity</th>
									<th>Sub Total</th>
									<th>Action</th>
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
										<div class="form">
											<input type="number" value="1" id="Quantity">
										</div>
									</td>
									<td><p class="price">NRS 12000</p></td>
									<td><a href="#" class="remove">Remove</a></td>
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
										<div class="form">
											<input type="number" value="1" id="Quantity">
										</div>
									</td>
									<td><p class="price">NRS 1,12,000</p></td>
									<td><a href="#" class="remove">Remove</a></td>
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
										<div class="form">
											<input type="number" value="2" id="Quantity">
										</div>
									</td>
									<td><p class="price">NRS 26,400</p></td>
									<td><a href="#" class="remove">Remove</a></td>
								</tr>
								
							</tbody>
						</table>
					</div>
				</div>
				<div class="card-panel empty">
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
						<h3><span>total item</span> <span >4</span></h3>
						<h3><span>Sub total </span><span class="price">NRS 40,000</span></h3>
						<button onclick="window.location.href='./checkout.php'">Proceed to checkout</button>
					</div>
				</article>
			</aside>
		</div>
	</div>
</main>

<?php
include 'footer.php';
?>
<script type="text/javascript" src="./js/custom.js"></script>
<script>
	$(document).ready(function(){

		$("aside.cart .form input").focus(function(){
			var elem = $(this);
   		// Save current value of element
   		elem.data('oldVal', elem.val());

   		// Look for changes in the value
   		elem.bind("propertychange change click keyup input paste", function(event){
      	// If value has changed...
      	if (elem.data('oldVal') != elem.val()) {
       		// Updated stored value
       		elem.data('oldVal', elem.val());

       // Do action
       if(elem.val() < 1){
       	elem.val('1');
       }
       

   }
});
   	});
		if($(window).width()<486){
			$('.cart-page table.striped').addClass('responsive-table');
		}


	});
</script>
</body>
</html>