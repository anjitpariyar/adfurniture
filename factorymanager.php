<?php
$pagetitle = 'factorymanager';
$active = 'home';
include 'header.php';
include './template/factorymanager.php';
$activeTab = 'home';
?>

<main  class="factoryadmin home-page">
	<div class="rest-rule">
		<div class="row">
			<aside class="col s12 m2 category">
				<?php 
				include './template/factorynav.php'
				?>
			</aside>
			<aside class="col s12 m10 main">
				<section class="rest-rule">
					<article class="card welcome">
						<div class="card-content ">
							<h1 class="card-title">hi Manager, Welcome to the dashboard</h1>
							<h3 class="text-muted">We’ve assembled some links to get you started:</h3>
							<div class="row">
								<div class="col s12 m4">
									<h2 class="card-title">Manage your Customer & Dealer Payment and Order Sheet Book</h2>
									<button onclick="window.location.href='./odersheet.php'">Get Started</button>
								</div>
								<div class="col s6 m4">
									<h2 class="card-title">Next Steps</h2>
									<ul>
										<li><a href="./viewdata.php">View Sheet Book</a></li>
										<li><a href="./store.php">View Store</a></li>

									</ul>
								</div>
								<div class="col s6 m4">
									<h2 class="card-title">Worker related</h2>
									<ul>
										<li><a href="./worker.php">View Worker</a></li>
										<li><a href="./addworker.php">Add Worker</a></li>
										<li><a href="./removeworker.php">Remove Worker</a></li>
										<li><a href="./sendmessages.php">Send Worker</a></li>

									</ul>
								</div>
							</div>
						</div>
					</article>
					<article class="card welcome overview">
						<div class="card-content ">
							<h1 class="card-title">Overall Overview </h1>
							<div class="row">
								<div class="col s6 m3">
									<div class="card center">
										<div class="card-content">
											<p class=" text-muted">New Order</p>
											<h2 class="card-title">05</h2>
										</div>
									</div>
								</div>
								<div class="col s6 m3">
									<div class="card center">
										<div class="card-content">
											<p class=" text-muted">Total Order</p>
											<h2 class="card-title">101</h2>
										</div>
									</div>
								</div>
								<div class="col s6 m3">
									<div class="card center">
										<div class="card-content">
											<p class=" text-muted">Total Worker</p>
											<h2 class="card-title">10</h2>
										</div>
									</div>
								</div>
								<div class="col s6 m3">
									<div class="card center">
										<div class="card-content">
											<p class=" text-muted">Total Store</p>
											<h2 class="card-title">100</h2>
										</div>
									</div>
								</div>
							</div>
						</div>
					</article>
				</section>
			</aside>	
		</div>
	</div>
</main>

<?php include './template/factoryfooter.php' ?>

</body>
</html>