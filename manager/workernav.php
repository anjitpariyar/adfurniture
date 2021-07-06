<div class="collection">
	<a href="./workerhome.php" class="collection-item <?php if($active == 'home') echo('active');  ?>">Home <i class=" material-icons  right">home</i></a>
	<a href="./odersheet.php" class="collection-item <?php if($active == 'order') echo('active');  ?>">Order Sheet <i class=" material-icons right  ">description</i></a>
	<a href="./ready.php" class="collection-item <?php if($active == 'ready') echo('active');  ?>">Ready Furniture Check Sheet</a>
	<a href="./material.php" class="collection-item <?php if($active == 'material') echo('active');  ?>">Required Material Sheet</a>
	<a href="./export.php" class="collection-item <?php if($active == 'export') echo('active');  ?>">Export Furniture Sheet</a>
	<!-- <a href="./profit.php" class="collection-item <?php if($active == 'profit') echo('active');  ?>">Costing and Profit Sheet</a> -->
	<a href="../index.php" class="collection-item btn logout">Logout </a>

</div>