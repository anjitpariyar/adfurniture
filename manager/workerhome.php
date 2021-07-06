<?php
$pagetitle = 'workerhome';
$active = 'home';
include './workerheader.php';
include 'headerlogo.php';
$activeTab = 'home';
?>

<main  class="factoryadmin home-page worker">
	<div class="rest-rule">
		<div class="row">
			<aside class="col s12 m2 category">
				<?php include './workernav.php'?>
			</aside>
			<aside class="col s12 m10 main">
				<section class="rest-rule">
					<article class="card welcome">
						<div class="card-content ">
							<h1 class="card-title">hi Matt horikita, Welcome to the dashboard</h1>
							<h3 class="text-muted">We’ve assembled some links to get you started:</h3>
							<div class="row">
								<div class="col s12 m4">
									<h2 class="card-title">Check the Ready Furniture Sheet of Customer</h2>
									<button onclick="window.location.href='./ready.php'">Goto check sheet</button>
								</div>
								<div class="col s6 m4">
									<h2 class="card-title">Next Steps</h2>
									<ul>
										<li><a href="./material.php">Check the Required Furniture Sheet</a></li>
										<li><a href="./export.php">Check the Export Furniture Sheet Book</a></li>
									</ul>
								</div>
								<div class="col s6 m4">
									<h2 class="card-title">Other Links</h2>
									<ul>
										<li><a href="./profit.php">Costing and Profile Desiding Sheet</a></li>
										<li><a href="../index.php" class="logout">Log out</a></li>
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
											<p class=" text-muted">Pending Check List</p>
											<h2 class="card-title">05</h2>
										</div>
									</div>
								</div>
								<div class="col s6 m3">
									<div class="card center">
										<div class="card-content">
											<p class=" text-muted">Total Materials</p>
											<h2 class="card-title">101</h2>
										</div>
									</div>
								</div>
								<div class="col s6 m3">
									<div class="card center">
										<div class="card-content">
											<p class=" text-muted">Total Exported</p>
											<h2 class="card-title">10</h2>
										</div>
									</div>
								</div>
								<div class="col s6 m3">
									<div class="card center">
										<div class="card-content">
											<p class=" text-muted">Total Profit</p>
											<h2 class="card-title">NRs 1,1100</h2>
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

<?php include './workerfooter.php' ?>

</body>
</html>