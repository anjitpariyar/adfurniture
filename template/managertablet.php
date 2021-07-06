
<section class="tablet">
	<article class="nav section-rule">
		<ul>
			<li class="<?php if($activeTab == 'home') echo('active');?> center">
				<a href="./factorymanager.php" class="center"><i class="material-icons">home</i><span>Home</span></a>
			</li>
			
			<li class="<?php if($activeTab == 'sheet') echo('active'); ?> center ">
				<a href="./odersheet.php" ><i class="material-icons">description</i><span>Orders</span></a>
			</li>
			<li class="<?php if($activeTab == 'worker') echo('active'); ?> center">
				<a href="./worker.php"><i class="material-icons">group</i><span>Worker</span></a>
			</li>
			<li class="<?php if($activeTab == 'other') echo('active'); ?> center">
				<a href="./managerother.php"><i class="material-icons">dehaze</i><span>Other</span></a>
			</li>
		</ul>	
	</article>

</section>