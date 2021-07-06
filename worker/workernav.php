<div class="collection">
	<a href="./workerhome.php" class="collection-item <?php if($active == 'home') echo('active');  ?>">Home <i class=" material-icons  right">home</i></a>
	<a href="./task.php" class="collection-item <?php if($active == 'task') echo('active');  ?>">task<i class=" material-icons right  ">assignment</i></a>
	<a href="./inbox.php" class="collection-item <?php if($active == 'inbox') echo('active');  ?>">Inbox<i class=" material-icons right  ">textsms</i></a>
	<a href="./profile.php" class="collection-item <?php if($active == 'profile') echo('active');  ?>">Profile<i class=" material-icons right">person</i></a>
	<a href="../index.php" class="collection-item btn logout">Logout </a>

</div>