
<section class="tablet">
	<article class="nav section-rule">
		<ul>
			<li class="<?php if($activeTab == 'home') echo('active');?> center">
				<a href="./workerhome.php" class="center"><i class="material-icons">home</i><span>Home</span></a>
			</li>
			<li class="<?php if($activeTab == 'sheet') echo('active'); ?> center ">
				<a href="./odersheet.php" ><i class="material-icons">description</i><span>Orders</span></a>
			</li>
			<li class="<?php if($activeTab == 'ready') echo('active'); ?> center ">
				<a href="./ready.php" ><i class="material-icons">assignment_turned_in</i><span>Ready</span></a>
			</li>
			<li class="<?php if($activeTab == 'material') echo('active'); ?> center">
				<a href="./material.php"><i class="material-icons">insert_chart</i><span>Material</span></a>
			</li>
			<li class="<?php if($activeTab == 'export') echo('active'); ?> center">
				<a href="./export.php"><i class="material-icons">local_shipping</i><span>Export</span></a>
			</li>
			<!-- <li class="<?php if($activeTab == 'profit') echo('active'); ?> center">
				<a href="./profit.php"><i class="material-icons">timeline</i><span>Profit</span></a>
			</li> -->
		</ul>	
	</article>

</section>