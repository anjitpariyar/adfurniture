<?php
$pagetitle = 'Myaccount';
$active = 'account';
include 'header.php';
include './template/nav.php';
?>

<nav class=" custombreadcrumb">
	<div class="nav-wrapper section-rule">
		<div class="col s12">
			<a href="./index.php" class="breadcrumb">Home</a>
			<a href="#!" class="breadcrumb">My Account</a>
		</div>
	</div>
</nav>

<main class="account-page">
	<section class="section-rule">
		<div class="profile card">
			<div class="row card-content">
				<div class="col s4">
					<div class="circle">
						<img src="./images/JPEG/avtar.png" alt="">
					</div>
				</div>
				<div class="col s8">
					<h3 class="name">Matt Hendry</h3>
					<p class="email">matthendry101@gmail.com</p>
					<p class="total">Total Order: <span>09</span></p>
					<p class="pending">Pending Order: <span>01</span></p>
					<button>
						Logout
					</button>
				</div>
			</div>
		</div>
	</section>
	<section class="section-rule">
		<div class="card profile">
			<div class="card-content">
				<div class="collection">
					<a href="./cart.php" class="collection-item">My Cart</a>
					<a href="./order.php" class="collection-item ">My Order</a>
					<a href="./trackorder.php" class="collection-item">Track My Oder</a>
				</div>
			</div>
		</div>
	</section>

	<section class="section-rule pending">
		<h2 class="title">Pending</h2>
		<progress  max="100" value="60"></progress>
		<div class="card">
			<div class="card-content">
				<div class="images">
					<div class="circle">
						<img src="./images/png/chase-jiggiemon-wilson-a3YgkIiQpKk-unsplash-removebg-preview.png" alt="">
					</div>
					<div class="circle">
						<img src="./images/png/hal-gatewood-Vfml26Iy4mI-unsplash-removebg-preview.png" alt="">
					</div>
					<div class="circle">
						<img src="./images/png/daniil-silantev-1P6AnKDw6S8-unsplash-removebg-preview.png" alt="">
					</div>	
				</div>
				<p>Sub totoal: <span class="price">NRS 26,000</span></p>
				<p>Total item: <span>4</span></p>
				<p>order date: <span>jan 02 , 2019</span></p>
			</div>
		</div>
	</section>

	<section class="section-rule history">
		<h2 class="title">History</h2>
		<div class="card-panel">
			<div class="card-content">
				<table class="striped ">
					<thead>
						<tr>
							<th>Product details</th>
							<th>Date</th>
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
							<td>jan 02, 2002</td>
							<td>
								<p>4</p>
							</td>
							<td><p class="price">NRS 12000</p></td>
							<td><a href="#" class="remove">X</a></td>
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
							<td>jan 02, 2002</td>
							<td>
								<p>3</p>
							</td>
							<td><p class="price">NRS 1,12,000</p></td>
							<td><a href="#" class="remove">X</a></td>
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
							<td>jan 02, 2002</td>
							<td>
								<p>1</p>
							</td>
							<td><p class="price">NRS 26,400</p></td>
							<td><a href="#" class="remove">X</a></td>
						</tr>

					</tbody>
				</table>
			</div>
		</div>

		<div class="card-panel empty">
			<div class="card-content center">
				<h3>no history</h3>
			</div>
		</div>
	</section>
	

</main>



<?php include 'footer.php'; ?>
<script type="text/javascript" src="./js/custom.js"></script>
<script>
	var images= document.querySelectorAll('.pending .images .circle');
	images.forEach(hello= (image, index)=>{
		image.style.transform = 'translateX('+(-50*index)+'px)';
		
	});
	$(document).ready(function(){
		if($(window).width()<486){
			$('table.striped').addClass('responsive-table');
		}
	});
</script>
</body>
</html>