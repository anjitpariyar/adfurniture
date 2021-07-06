<?php
$pagetitle = 'sendmessage';
$active = 'other';
include 'header.php';
include './template/factorymanager.php';
$activeTab = 'other';
?>

<main  class="factoryadmin other welcome">
	<div class="rest-rule">
		<div class="row">
			<aside class="col s12 main ">
				<article class="card welcome overview">
					<div class="card-content ">
						<div class="collection">
							<a href="./viewdata__list.php" class="collection-item <?php if($active == 'data') echo('active');  ?>">View Data <i class=" material-icons ">remove_red_eye	</i></a>
							<a href="./reception.php" class="collection-item <?php if($active == 'reception') echo('active');  ?>">Reception <i class=" material-icons  ">receipt</i></a>
							<a href="./factory-profit.php" class="collection-item ">Profit <i class=" material-icons">timeline</i></a>
							<a href="./store.php" class="collection-item <?php if($active == 'store') echo('active');  ?>">Store <i class=" material-icons">store</i></a>
							<a href="./index.php" class="collection-item btn" id="logout">Logout </a>
						</div>				
					</div>
				</article>
			</aside>

		</div>
	</div>
</main>

<?php include './template/factoryfooter.php' ?>
<script>
	
</script>
</body>
</html>