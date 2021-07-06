
<section class="tablet">
	<article class="nav section-rule">
		<ul>
			<li class="<?php if($activeTab == 'home') echo('active');?> center">
				<a href="./index.php" class="center"><i class="material-icons">home</i><span>Home</span></a>
			</li>
			<li class="<?php if($activeTab == 'categories') echo('active'); ?> center ">
				<a href="./allcategories.php" ><i class="material-icons">tune</i><span>categories</span></a>
			</li>
			<li class="<?php if($activeTab == 'search') echo('active'); ?> center">
				<a href="./search.php"><i class="material-icons">search</i><span>search</span></a>
			</li>
			<li class="<?php if($activeTab == 'cart') echo('active'); ?> center">
				<a href="./cart.php"><i class="material-icons">local_grocery_store</i><span>cart</span></a>
			</li>
		</ul>	
	</article>

</section>