<?php
$pagetitle = 'odersheet';
$active = 'order';
include 'header.php';
include './template/factorymanager.php';
$activeTab = 'sheet';
?>

<main  class="factoryadmin home-page order-page">
	<div class="rest-rule">
		<div class="row">
			<aside class="col s12 m2 category">
				<?php 
				include './template/factorynav.php'
				?>
			</aside>
			<aside class="col s12 m10 main">
				<section class="rest-rule">
					<h1 class="section-title"><mark>New Order</mark></h1>
					<article class="card welcome">
						<div class="card-content ">
							<div class="general">
								<p>Name:- <span>Laxman adhakari</span></p>
								<p>Id:- <span>010110</span></p>
								<p>Ph.No:- <span>+977 9825131071</span></p>
								<p>Address:- <span>kathandu, Nepal</span></p>
								<p>Company:- <span>EB preals</span></p>
							</div>
							<div class="general">
								<p>Total Products:- <span>4</span></p>
								<p>Total Costs:- <span>NRS 1,12,000 </span></p>
								<p>Received Order:- <span>jan 02, 2020</span></p>
							</div>
							<div class="action">
								<button onclick="window.location.href='./ordersheetsingle.php'">Assign Workers</button>
							</div>	
						</div>
					</article>
					<article class="card welcome">
						<div class="card-content ">
							<div class="general">
								<p>Name:- <span>Laxman adhakari</span></p>
								<p>Id:- <span>010110</span></p>
								<p>Ph.No:- <span>+977 9825131071</span></p>
								<p>Address:- <span>kathandu, Nepal</span></p>
								<p>Company:- <span>Personal</span></p>
							</div>
							<div class="general ">
								<p>Total Products:- <span>4</span></p>
								<p>Total Costs:- <span>NRS 1,12,000 </span></p>
								<p>Received Order:- <span>jan 02, 2020</span></p>
							</div>
							<div class="action">
								<button onclick="window.location.href='./ordersheetsingle.php'">Assign Workers</button>
							</div>	
						</div>
					</article>
					<article class="card welcome">
						<div class="card-content ">
							<div class="general">
								<p>Name:- <span>Laxman adhakari</span></p>
								<p>Id:- <span>010110</span></p>
								<p>Ph.No:- <span>+977 9825131071</span></p>
								<p>Address:- <span>kathandu, Nepal</span></p>
								<p>Company:- <span>EB preals</span></p>
							</div>
							<div class="general">
								<p>Total Products:- <span>4</span></p>
								<p>Total Costs:- <span>NRS 1,12,000 </span></p>
								<p>Received Order:- <span>jan 02, 2020</span></p>
							</div>
							<div class="action">
								<button onclick="window.location.href='./ordersheetsingle.php'">Assign Workers</button>
							</div>	
						</div>
					</article>
					<div class="card-panel card empty">
						<div class="card-content center">
							<h3>No New Order</h3>
						</div>
					</div>
					<div class="card empty center">
						<div class="card-content center">
							<h3 class="card-title">View Customer & Dealer Payment & Order Sheet Book</h3>
							<button onclick="window.location.href='./viewdata.php'" >View Data</button>
						</div>
					</div>
				</section>
			</aside>	
		</div>
	</div>
</main>

<?php include './template/factoryfooter.php' ?>

</body>
</html>