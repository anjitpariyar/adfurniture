
<section class="tablet">
	<article class="nav section-rule">
		<ul>
			<li class="<?php if($activeTab == 'home') echo('active');?> center">
				<a href="./workerhome.php" class="center"><i class="material-icons">home</i><span>Home</span></a>
			</li>
			<li class="<?php if($activeTab == 'task') echo('active'); ?> center ">
				<a href="./task.php" ><i class="material-icons">assignment</i><span>Task</span></a>
			</li>
			<li class="<?php if($activeTab == 'inbox') echo('active'); ?> center">
				<a href="./inbox.php"><i class="material-icons">textsms</i><span>Inbox</span></a>
			</li>
			<li class="<?php if($activeTab == 'profile') echo('active'); ?> center">
				<a href="./profile.php"><i class="material-icons">person</i><span>Profile</span></a>

			</li>
		</ul>	
	</article>

</section>