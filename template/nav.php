<header>
	<nav class="main-nav">
		<div class="nav-wrapper section-rule">
			<a href="./index.php" class="brand-logo"><img src="./images/hdhublogo.png" alt=""></a>
			<ul  class="right">
				<li>
					<form action="./search.php">
						<div class="input-field">
							<input id="search" type="search" required placeholder="Search">
							<label class="label-icon" for="search"><i class="material-icons right">search</i></label>
						</div>
					</form>
				</li>
				<li>
					<a href="./cart.php" class="cart">
						<svg xmlns="http://www.w3.org/2000/svg" width="18.489" height="17.333" viewBox="0 0 18.489 17.333">
							<path id="cart" d="M18.439,3.964l-1.684,6.7a.576.576,0,0,1-.578.578H5.2l.462,2.311H15.6a.578.578,0,1,1,0,1.156H5.2a.577.577,0,0,1-.578-.578L2.427,3.156H.578A.578.578,0,0,1,.578,2H2.889a.578.578,0,0,1,.578.578l.116.578H17.911a.578.578,0,0,1,.578.578.572.572,0,0,1-.05.231ZM4.969,10.089H6.933V4.311H3.813ZM10.4,4.311H7.511v5.778H10.4Zm3.467,0H10.978v5.778h2.889Zm.578,0v5.778h1.3L17.21,4.311ZM6.356,15.867A1.733,1.733,0,1,1,4.622,17.6,1.734,1.734,0,0,1,6.356,15.867Zm0,2.311a.578.578,0,1,0-.578-.578A.577.577,0,0,0,6.356,18.178Zm8.089-2.311A1.733,1.733,0,1,1,12.711,17.6,1.734,1.734,0,0,1,14.444,15.867Zm0,2.311a.578.578,0,1,0-.578-.578A.577.577,0,0,0,14.444,18.178Z" transform="translate(0 -2)" fill="#3b3b3b"/>
						</svg>
					my cart</a>
				</li>
				<li>
					<a href="./login.php" class="profile">
						<svg xmlns="http://www.w3.org/2000/svg" width="19.367" height="19.367" viewBox="0 0 19.367 19.367">
							<path id="ic_person_24px" d="M12.933,12.933A4.467,4.467,0,1,0,8.467,8.467,4.465,4.465,0,0,0,12.933,12.933Zm0,2.233C9.952,15.167,4,16.663,4,19.633v2.233H21.867V19.633C21.867,16.663,15.915,15.167,12.933,15.167Z" transform="translate(-3.25 -3.25)" fill="none" stroke="#3b3b3b" stroke-width="1.5"/>
						</svg>
					log in</a>
				</li>
				<li>
					<a href="#" data-target="slide-out" class="sidenav-trigger show-on-large">
						<svg xmlns="http://www.w3.org/2000/svg" width="31.293" height="17.385" viewBox="0 0 31.293 17.385">
							<path id="hamburger" d="M6.477,17.431H30.816V13.954H6.477ZM3,24.385H27.339V20.908H3ZM9.954,7v3.477H34.293V7Z" transform="translate(-3 -7)" fill="#3b3b3b"/>
						</svg>
						<!-- <i class="material-icons">menu</i> --></a>

					</li>
				</ul>
			</div>
		</nav>
		<ul id="slide-out" class="sidenav">
			
			<li><a href="./index.php" class="<?php if($active == 'home') echo('active');  ?>">Home</a></li>
			<li><a href="./about-us.php" class="<?php if($active == 'aboutus') echo('active');  ?>">About Us</a></li>
			<li><a href="./allcategories.php" class="<?php if($active == 'categories') echo('active');  ?>">All Categories</a></li>
			<li><a href="./contact-us.php" class="<?php if($active == 'contactus') echo('active');  ?>">Contact Us</a></li>
			<li><a href="#!" class="<?php if($active == 'language') echo('active');  ?>">language</a></li>
			<li><a href="#!" class="<?php if($active == 'policy') echo('active');  ?>">privacy and policy</a></li>
			<li><a href="#" class="<?php if($active == 'terms') echo('active');  ?>">terms and condition</a></li>
			<li><a href="#" class="<?php if($active == 'information') echo('active');  ?>">information</a></li>
			<li><a href="#" class="<?php if($active == 'pay') echo('active');  ?>">how to pay</a></li>
			<li><a href="./cart.php" class="<?php if($active == 'cart') echo('active');  ?>">my cart</a></li>
			<li><a href="./login.php" class="<?php if($active == 'login') echo('active');  ?>">log in</a></li>
			<li><a href="./manager/workerhome.php" class="<?php if($active == 'loginss') echo('active');  ?>">Manager</a>
			</li>
			<li><a href="./factorymanager.php" class="<?php if($active == 'loginss') echo('active');  ?>">Factory manager</a>
			</li>
			<li><a href="./worker/task.php" class="<?php if($active == 'loginss') echo('active');  ?>">worker</a>
			</li>

			<li><a class="sidenav-close" href="#!"><i class="material-icons right">close</i>ClOSE MENU</a></li>

		</ul>        

	</header>
	