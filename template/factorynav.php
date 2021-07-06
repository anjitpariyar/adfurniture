<div class="collection">
	<a href="./factorymanager.php" class="collection-item <?php if($active == 'home') echo('active');  ?>">Home <i class=" material-icons  right">home</i></a>
	<a href="./odersheet.php" class="collection-item <?php if($active == 'order') echo('active');  ?>">Order Sheet <i class=" material-icons right  ">description</i></a>
	<a href="./viewdata__list.php" class="collection-item <?php if($active == 'data') echo('active');  ?>">View Data <i class=" material-icons right  ">remove_red_eye	</i></a>
	<a href="./worker.php" class="collection-item <?php if($active == 'worker') echo('active');  ?>">Worker <i class=" material-icons right  ">group</i></a>
	<a href="./addworker.php" class="collection-item <?php if($active == 'add') echo('active');  ?>">Add Worker <i class=" material-icons right  ">group_add</i></a>
	<a href="./removeworker.php" class="collection-item <?php if($active == 'remove') echo('active');  ?>">Remove Worker <i class=" material-icons right  ">-group</i></a>
	<a href="./reception.php" class="collection-item <?php if($active == 'reception') echo('active');  ?>">Reception <i class=" material-icons right  ">receipt</i></a>

	<a href="./factory-profit.php" class="collection-item <?php if($active == 'profit') echo('active');  ?>">Profit <i class=" material-icons right  ">timeline</i></a>
	<a href="./store.php" class="collection-item <?php if($active == 'store') echo('active');  ?>">Store <i class=" material-icons right  ">store</i></a>

	<a href="./index.php" class="collection-item btn " id="logout">Logout </a>

</div>