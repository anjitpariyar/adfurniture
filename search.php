<?php
$pagetitle = 'pageurl';
$active = 'search';
include 'header.php';
include './template/nav.php';
$activeTab = 'search';
?>
<link rel="stylesheet" href="./js/slider/nouislider.min.css">
<nav class=" custombreadcrumb">
	<div class="nav-wrapper section-rule">
		<div class="col s12">
			<a href="./index.php" class="breadcrumb">Home</a>
			<a href="./allcategories.php" class="breadcrumb">Search</a>
			<a href="#!" class="breadcrumb">Your Result</a>

		</div>
	</div>
</nav>

<main class="categories-page search-page">
	<section class="home section-rule">
		<div class="item">
			<div class="image">
				<img src="./images/JPEG/crew-vlDy9YAiTEc-unsplash-min.jpg" alt="">
			</div>
			<div class="search">
				<div class="row">
					<form class="col s12" method="" action="">
						<div class="row">
							<div class="input-field col s9">
								<input id="icon_prefix" type="text" class="validate" placeholder="Search">
							</div>
							<div class="input-field col s3">
								<button type="submit">
									<i class="material-icons">search</i>search
								</button>
							</div>	
						</div>
					</form>
				</div>
			</div>
		</div>	
	</section>

	<section class="cate section-rule">
		<div class="row">
			<aside class="col s12 m12 l3 category">
				<div class="main">
					<article class="card-panel">
						<h2 class="card-title">Filter</h2>
						<div class="card-content">
							<!-- <h3 class="title">short by</h3> -->
							<ul>
								<li><a href="./categories.php">A to Z</a></li>
								<li><a href="./categories.php">Z to A</a></li>
								<li><a href="./categories.php">Lower to Heigher <span>(price)</span> </a></li>
								<li><a href="./categories.php">Heigher to Lower <span>(price)</span></a></li>
								<li class="active"><a href="./categories.php">Latest</a></li>
								<li><a href="./categories.php">Most Popular</a></li>

							</ul>
						</div>
					</article>

					<article class="card-panel">
						<h2 class="card-title">Advance Filter</h2>
						<div class="card-content">
							<div id="range"></div>
							<p class="price">minimum price: <span id="slider-margin-value-min">0</span></p>
							<p class="price">maximum price: <span id="slider-margin-value-max">0</span></p>
							<button>apply</button>
						</div>	
					</article>
					<article class="card-panel">
						<h2 class="card-title">Other Relevent tags</h2>
						<div class="card-content">
							<ul>
								<li><a href="./categories.php">Bedroom Set</a></li>
								<li><a href="./categories.php">Bed 6</a></li>
								<li><a href="./categories.php">Bed 5'</a></li>
								<li><a href="./categories.php">Bed 3.5'</a></li>
								<li><a href="./categories.php">Night Table</a></li>
								<li><a href="./categories.php">Hanging Mirror</a></li>
							</ul>
						</div>	
					</article>
				</div>	
			</aside>
			<aside class="col s12 m12 l9 all-part">
				<article class="newarrival">
					<div class="row">
						
						<h2 class="section-title">search Result for <span>Chair(200+)</span><span>(Latest)</span></h2>
						<div class="col s6 m6 l4">
							<div class="card">
								<div class="card-image">
									<img src="./images/png/kari-shea-ItMggD0EguY-unsplash-removebg-preview.png" alt="">
									<div class="hover">
										<div class="cart">
											<h3>
												<a href="#">
													<svg xmlns="http://www.w3.org/2000/svg" width="18.489" height="17.333" viewBox="0 0 18.489 17.333">
														<path id="cart" d="M18.439,3.964l-1.684,6.7a.576.576,0,0,1-.578.578H5.2l.462,2.311H15.6a.578.578,0,1,1,0,1.156H5.2a.577.577,0,0,1-.578-.578L2.427,3.156H.578A.578.578,0,0,1,.578,2H2.889a.578.578,0,0,1,.578.578l.116.578H17.911a.578.578,0,0,1,.578.578.572.572,0,0,1-.05.231ZM4.969,10.089H6.933V4.311H3.813ZM10.4,4.311H7.511v5.778H10.4Zm3.467,0H10.978v5.778h2.889Zm.578,0v5.778h1.3L17.21,4.311ZM6.356,15.867A1.733,1.733,0,1,1,4.622,17.6,1.734,1.734,0,0,1,6.356,15.867Zm0,2.311a.578.578,0,1,0-.578-.578A.577.577,0,0,0,6.356,18.178Zm8.089-2.311A1.733,1.733,0,1,1,12.711,17.6,1.734,1.734,0,0,1,14.444,15.867Zm0,2.311a.578.578,0,1,0-.578-.578A.577.577,0,0,0,14.444,18.178Z" transform="translate(0 -2)" fill="#3b3b3b"></path>
													</svg> Add to Cart
												</a>
											</h3>
										</div>
									</div>
								</div>
								<div class="card-body">
									<h3 class="card-title"><a href="./single-page.php">CHAIR ALADIN#2(6501CH)PU BLACK#B9</a></h3>
									<p class="price">NRS 12,000</p>
								</div>
							</div>
						</div>

						<div class="col s6 m6 l4">
							<div class="card">
								<div class="card-image">
									<img src="./images/png/phillip-goldsberry-fZuleEfeA1Q-unsplash-removebg-preview.png" alt="">
									<div class="hover">
										<div class="cart">
											<h3>
												<a href="#">
													<svg xmlns="http://www.w3.org/2000/svg" width="18.489" height="17.333" viewBox="0 0 18.489 17.333">
														<path id="cart" d="M18.439,3.964l-1.684,6.7a.576.576,0,0,1-.578.578H5.2l.462,2.311H15.6a.578.578,0,1,1,0,1.156H5.2a.577.577,0,0,1-.578-.578L2.427,3.156H.578A.578.578,0,0,1,.578,2H2.889a.578.578,0,0,1,.578.578l.116.578H17.911a.578.578,0,0,1,.578.578.572.572,0,0,1-.05.231ZM4.969,10.089H6.933V4.311H3.813ZM10.4,4.311H7.511v5.778H10.4Zm3.467,0H10.978v5.778h2.889Zm.578,0v5.778h1.3L17.21,4.311ZM6.356,15.867A1.733,1.733,0,1,1,4.622,17.6,1.734,1.734,0,0,1,6.356,15.867Zm0,2.311a.578.578,0,1,0-.578-.578A.577.577,0,0,0,6.356,18.178Zm8.089-2.311A1.733,1.733,0,1,1,12.711,17.6,1.734,1.734,0,0,1,14.444,15.867Zm0,2.311a.578.578,0,1,0-.578-.578A.577.577,0,0,0,14.444,18.178Z" transform="translate(0 -2)" fill="#3b3b3b"></path>
													</svg> Add to Cart
												</a>
											</h3>
										</div>
									</div>
								</div>
								<div class="card-body">
									<h3 class="card-title"><a href="./single-page.php">SOFA MAMARA CORNER(L) LEATHER SL BROWN</a></h3>
									<p class="price">NRS 1,12,000</p>
								</div>
							</div>
						</div>

						<div class="col s6 m6 l4">
							<div class="card">
								<div class="card-image">
									<img src="./images/png/pacific-office-interiors-kGs09BE5o3s-unsplash-removebg-preview.png" alt="">
									<div class="hover">
										<div class="cart">
											<h3>
												<a href="#">
													<svg xmlns="http://www.w3.org/2000/svg" width="18.489" height="17.333" viewBox="0 0 18.489 17.333">
														<path id="cart" d="M18.439,3.964l-1.684,6.7a.576.576,0,0,1-.578.578H5.2l.462,2.311H15.6a.578.578,0,1,1,0,1.156H5.2a.577.577,0,0,1-.578-.578L2.427,3.156H.578A.578.578,0,0,1,.578,2H2.889a.578.578,0,0,1,.578.578l.116.578H17.911a.578.578,0,0,1,.578.578.572.572,0,0,1-.05.231ZM4.969,10.089H6.933V4.311H3.813ZM10.4,4.311H7.511v5.778H10.4Zm3.467,0H10.978v5.778h2.889Zm.578,0v5.778h1.3L17.21,4.311ZM6.356,15.867A1.733,1.733,0,1,1,4.622,17.6,1.734,1.734,0,0,1,6.356,15.867Zm0,2.311a.578.578,0,1,0-.578-.578A.577.577,0,0,0,6.356,18.178Zm8.089-2.311A1.733,1.733,0,1,1,12.711,17.6,1.734,1.734,0,0,1,14.444,15.867Zm0,2.311a.578.578,0,1,0-.578-.578A.577.577,0,0,0,14.444,18.178Z" transform="translate(0 -2)" fill="#3b3b3b"></path>
													</svg> Add to Cart
												</a>
											</h3>
										</div>
									</div>
								</div>
								<div class="card-body">
									<h3 class="card-title"><a href="./single-page.php">END TABLE ALEGRO STEEL BLACK S*2</a></h3>
									<p class="price">NRS 12,200</p>
								</div>
							</div>
						</div>

						<div class="col s6 m6 l4">
							<div class="card">
								<div class="card-image">
									<img src="./images/png/hal-gatewood-Vfml26Iy4mI-unsplash-removebg-preview.png" alt="">
									<div class="hover">
										<div class="cart">
											<h3>
												<a href="#">
													<svg xmlns="http://www.w3.org/2000/svg" width="18.489" height="17.333" viewBox="0 0 18.489 17.333">
														<path id="cart" d="M18.439,3.964l-1.684,6.7a.576.576,0,0,1-.578.578H5.2l.462,2.311H15.6a.578.578,0,1,1,0,1.156H5.2a.577.577,0,0,1-.578-.578L2.427,3.156H.578A.578.578,0,0,1,.578,2H2.889a.578.578,0,0,1,.578.578l.116.578H17.911a.578.578,0,0,1,.578.578.572.572,0,0,1-.05.231ZM4.969,10.089H6.933V4.311H3.813ZM10.4,4.311H7.511v5.778H10.4Zm3.467,0H10.978v5.778h2.889Zm.578,0v5.778h1.3L17.21,4.311ZM6.356,15.867A1.733,1.733,0,1,1,4.622,17.6,1.734,1.734,0,0,1,6.356,15.867Zm0,2.311a.578.578,0,1,0-.578-.578A.577.577,0,0,0,6.356,18.178Zm8.089-2.311A1.733,1.733,0,1,1,12.711,17.6,1.734,1.734,0,0,1,14.444,15.867Zm0,2.311a.578.578,0,1,0-.578-.578A.577.577,0,0,0,14.444,18.178Z" transform="translate(0 -2)" fill="#3b3b3b"></path>
													</svg> Add to Cart
												</a>
											</h3>
										</div>
									</div>
								</div>
								<div class="card-body">
									<h3 class="card-title"><a href="./single-page.php">BED BENTE BW5' F SOLID OAK CUSHION GRAY</a></h3>
									<p class="price">NRS 2,12,000</p>
								</div>
							</div>
						</div>

						<div class="col s6 m6 l4">
							<div class="card">
								<div class="card-image">
									<img src="./images/png/chase-jiggiemon-wilson-a3YgkIiQpKk-unsplash-removebg-preview.png" alt="">
									<div class="hover">
										<div class="cart">
											<h3>
												<a href="#">
													<svg xmlns="http://www.w3.org/2000/svg" width="18.489" height="17.333" viewBox="0 0 18.489 17.333">
														<path id="cart" d="M18.439,3.964l-1.684,6.7a.576.576,0,0,1-.578.578H5.2l.462,2.311H15.6a.578.578,0,1,1,0,1.156H5.2a.577.577,0,0,1-.578-.578L2.427,3.156H.578A.578.578,0,0,1,.578,2H2.889a.578.578,0,0,1,.578.578l.116.578H17.911a.578.578,0,0,1,.578.578.572.572,0,0,1-.05.231ZM4.969,10.089H6.933V4.311H3.813ZM10.4,4.311H7.511v5.778H10.4Zm3.467,0H10.978v5.778h2.889Zm.578,0v5.778h1.3L17.21,4.311ZM6.356,15.867A1.733,1.733,0,1,1,4.622,17.6,1.734,1.734,0,0,1,6.356,15.867Zm0,2.311a.578.578,0,1,0-.578-.578A.577.577,0,0,0,6.356,18.178Zm8.089-2.311A1.733,1.733,0,1,1,12.711,17.6,1.734,1.734,0,0,1,14.444,15.867Zm0,2.311a.578.578,0,1,0-.578-.578A.577.577,0,0,0,14.444,18.178Z" transform="translate(0 -2)" fill="#3b3b3b"></path>
													</svg> Add to Cart
												</a>
											</h3>
										</div>
									</div>
								</div>
								<div class="card-body">
									<h3 class="card-title"><a href="./single-page.php">END TABLE ALEGRO STEEL BLACK S*2</a></h3>
									<p class="price">NRS 6,000</p>
								</div>
							</div>
						</div>

						<div class="col s6 m6 l4">
							<div class="card">
								<div class="card-image">
									<img src="./images/png/rabie-madaci-4iwG8QD17AE-unsplash-removebg-preview.png" alt="">
									<div class="hover">
										<div class="cart">
											<h3>
												<a href="#">
													<svg xmlns="http://www.w3.org/2000/svg" width="18.489" height="17.333" viewBox="0 0 18.489 17.333">
														<path id="cart" d="M18.439,3.964l-1.684,6.7a.576.576,0,0,1-.578.578H5.2l.462,2.311H15.6a.578.578,0,1,1,0,1.156H5.2a.577.577,0,0,1-.578-.578L2.427,3.156H.578A.578.578,0,0,1,.578,2H2.889a.578.578,0,0,1,.578.578l.116.578H17.911a.578.578,0,0,1,.578.578.572.572,0,0,1-.05.231ZM4.969,10.089H6.933V4.311H3.813ZM10.4,4.311H7.511v5.778H10.4Zm3.467,0H10.978v5.778h2.889Zm.578,0v5.778h1.3L17.21,4.311ZM6.356,15.867A1.733,1.733,0,1,1,4.622,17.6,1.734,1.734,0,0,1,6.356,15.867Zm0,2.311a.578.578,0,1,0-.578-.578A.577.577,0,0,0,6.356,18.178Zm8.089-2.311A1.733,1.733,0,1,1,12.711,17.6,1.734,1.734,0,0,1,14.444,15.867Zm0,2.311a.578.578,0,1,0-.578-.578A.577.577,0,0,0,14.444,18.178Z" transform="translate(0 -2)" fill="#3b3b3b"></path>
													</svg> Add to Cart
												</a>
											</h3>
										</div>
									</div>
								</div>
								<div class="card-body">
									<h3 class="card-title"><a href="./single-page.php">CHAIR ALADIN#2(6501CH)PU BLACK#B9</a></h3>
									<p class="price">NRS 10,000</p>
								</div>
							</div>
						</div>

						<div class="col s6 m6 l4">
							<div class="card">
								<div class="card-image">
									<img src="./images/png/kari-shea-ItMggD0EguY-unsplash-removebg-preview.png" alt="">
									<div class="hover">
										<div class="cart">
											<h3>
												<a href="#">
													<svg xmlns="http://www.w3.org/2000/svg" width="18.489" height="17.333" viewBox="0 0 18.489 17.333">
														<path id="cart" d="M18.439,3.964l-1.684,6.7a.576.576,0,0,1-.578.578H5.2l.462,2.311H15.6a.578.578,0,1,1,0,1.156H5.2a.577.577,0,0,1-.578-.578L2.427,3.156H.578A.578.578,0,0,1,.578,2H2.889a.578.578,0,0,1,.578.578l.116.578H17.911a.578.578,0,0,1,.578.578.572.572,0,0,1-.05.231ZM4.969,10.089H6.933V4.311H3.813ZM10.4,4.311H7.511v5.778H10.4Zm3.467,0H10.978v5.778h2.889Zm.578,0v5.778h1.3L17.21,4.311ZM6.356,15.867A1.733,1.733,0,1,1,4.622,17.6,1.734,1.734,0,0,1,6.356,15.867Zm0,2.311a.578.578,0,1,0-.578-.578A.577.577,0,0,0,6.356,18.178Zm8.089-2.311A1.733,1.733,0,1,1,12.711,17.6,1.734,1.734,0,0,1,14.444,15.867Zm0,2.311a.578.578,0,1,0-.578-.578A.577.577,0,0,0,14.444,18.178Z" transform="translate(0 -2)" fill="#3b3b3b"></path>
													</svg> Add to Cart
												</a>
											</h3>
										</div>
									</div>
								</div>
								<div class="card-body">
									<h3 class="card-title"><a href="./single-page.php">CHAIR ALADIN#2(6501CH)PU BLACK#B9</a></h3>
									<p class="price">NRS 12,000</p>
								</div>
							</div>
						</div>

						<div class="col s6 m6 l4">
							<div class="card">
								<div class="card-image">
									<img src="./images/png/phillip-goldsberry-fZuleEfeA1Q-unsplash-removebg-preview.png" alt="">
									<div class="hover">
										<div class="cart">
											<h3>
												<a href="#">
													<svg xmlns="http://www.w3.org/2000/svg" width="18.489" height="17.333" viewBox="0 0 18.489 17.333">
														<path id="cart" d="M18.439,3.964l-1.684,6.7a.576.576,0,0,1-.578.578H5.2l.462,2.311H15.6a.578.578,0,1,1,0,1.156H5.2a.577.577,0,0,1-.578-.578L2.427,3.156H.578A.578.578,0,0,1,.578,2H2.889a.578.578,0,0,1,.578.578l.116.578H17.911a.578.578,0,0,1,.578.578.572.572,0,0,1-.05.231ZM4.969,10.089H6.933V4.311H3.813ZM10.4,4.311H7.511v5.778H10.4Zm3.467,0H10.978v5.778h2.889Zm.578,0v5.778h1.3L17.21,4.311ZM6.356,15.867A1.733,1.733,0,1,1,4.622,17.6,1.734,1.734,0,0,1,6.356,15.867Zm0,2.311a.578.578,0,1,0-.578-.578A.577.577,0,0,0,6.356,18.178Zm8.089-2.311A1.733,1.733,0,1,1,12.711,17.6,1.734,1.734,0,0,1,14.444,15.867Zm0,2.311a.578.578,0,1,0-.578-.578A.577.577,0,0,0,14.444,18.178Z" transform="translate(0 -2)" fill="#3b3b3b"></path>
													</svg> Add to Cart
												</a>
											</h3>
										</div>
									</div>
								</div>
								<div class="card-body">
									<h3 class="card-title"><a href="./single-page.php">SOFA MAMARA CORNER(L) LEATHER SL BROWN</a></h3>
									<p class="price">NRS 1,12,000</p>
								</div>
							</div>
						</div>

						<div class="col s6 m6 l4">
							<div class="card">
								<div class="card-image">
									<img src="./images/png/pacific-office-interiors-kGs09BE5o3s-unsplash-removebg-preview.png" alt="">
									<div class="hover">
										<div class="cart">
											<h3>
												<a href="#">
													<svg xmlns="http://www.w3.org/2000/svg" width="18.489" height="17.333" viewBox="0 0 18.489 17.333">
														<path id="cart" d="M18.439,3.964l-1.684,6.7a.576.576,0,0,1-.578.578H5.2l.462,2.311H15.6a.578.578,0,1,1,0,1.156H5.2a.577.577,0,0,1-.578-.578L2.427,3.156H.578A.578.578,0,0,1,.578,2H2.889a.578.578,0,0,1,.578.578l.116.578H17.911a.578.578,0,0,1,.578.578.572.572,0,0,1-.05.231ZM4.969,10.089H6.933V4.311H3.813ZM10.4,4.311H7.511v5.778H10.4Zm3.467,0H10.978v5.778h2.889Zm.578,0v5.778h1.3L17.21,4.311ZM6.356,15.867A1.733,1.733,0,1,1,4.622,17.6,1.734,1.734,0,0,1,6.356,15.867Zm0,2.311a.578.578,0,1,0-.578-.578A.577.577,0,0,0,6.356,18.178Zm8.089-2.311A1.733,1.733,0,1,1,12.711,17.6,1.734,1.734,0,0,1,14.444,15.867Zm0,2.311a.578.578,0,1,0-.578-.578A.577.577,0,0,0,14.444,18.178Z" transform="translate(0 -2)" fill="#3b3b3b"></path>
													</svg> Add to Cart
												</a>
											</h3>
										</div>
									</div>
								</div>
								<div class="card-body">
									<h3 class="card-title"><a href="./single-page.php">END TABLE ALEGRO STEEL BLACK S*2</a></h3>
									<p class="price">NRS 12,200</p>
								</div>
							</div>
						</div>

						<div class="col s6 m6 l4">
							<div class="card">
								<div class="card-image">
									<img src="./images/png/hal-gatewood-Vfml26Iy4mI-unsplash-removebg-preview.png" alt="">
									<div class="hover">
										<div class="cart">
											<h3>
												<a href="#">
													<svg xmlns="http://www.w3.org/2000/svg" width="18.489" height="17.333" viewBox="0 0 18.489 17.333">
														<path id="cart" d="M18.439,3.964l-1.684,6.7a.576.576,0,0,1-.578.578H5.2l.462,2.311H15.6a.578.578,0,1,1,0,1.156H5.2a.577.577,0,0,1-.578-.578L2.427,3.156H.578A.578.578,0,0,1,.578,2H2.889a.578.578,0,0,1,.578.578l.116.578H17.911a.578.578,0,0,1,.578.578.572.572,0,0,1-.05.231ZM4.969,10.089H6.933V4.311H3.813ZM10.4,4.311H7.511v5.778H10.4Zm3.467,0H10.978v5.778h2.889Zm.578,0v5.778h1.3L17.21,4.311ZM6.356,15.867A1.733,1.733,0,1,1,4.622,17.6,1.734,1.734,0,0,1,6.356,15.867Zm0,2.311a.578.578,0,1,0-.578-.578A.577.577,0,0,0,6.356,18.178Zm8.089-2.311A1.733,1.733,0,1,1,12.711,17.6,1.734,1.734,0,0,1,14.444,15.867Zm0,2.311a.578.578,0,1,0-.578-.578A.577.577,0,0,0,14.444,18.178Z" transform="translate(0 -2)" fill="#3b3b3b"></path>
													</svg> Add to Cart
												</a>
											</h3>
										</div>
									</div>
								</div>
								<div class="card-body">
									<h3 class="card-title"><a href="./single-page.php">BED BENTE BW5' F SOLID OAK CUSHION GRAY</a></h3>
									<p class="price">NRS 2,12,000</p>
								</div>
							</div>
						</div>

						<div class="col s6 m6 l4">
							<div class="card">
								<div class="card-image">
									<img src="./images/png/chase-jiggiemon-wilson-a3YgkIiQpKk-unsplash-removebg-preview.png" alt="">
									<div class="hover">
										<div class="cart">
											<h3>
												<a href="#">
													<svg xmlns="http://www.w3.org/2000/svg" width="18.489" height="17.333" viewBox="0 0 18.489 17.333">
														<path id="cart" d="M18.439,3.964l-1.684,6.7a.576.576,0,0,1-.578.578H5.2l.462,2.311H15.6a.578.578,0,1,1,0,1.156H5.2a.577.577,0,0,1-.578-.578L2.427,3.156H.578A.578.578,0,0,1,.578,2H2.889a.578.578,0,0,1,.578.578l.116.578H17.911a.578.578,0,0,1,.578.578.572.572,0,0,1-.05.231ZM4.969,10.089H6.933V4.311H3.813ZM10.4,4.311H7.511v5.778H10.4Zm3.467,0H10.978v5.778h2.889Zm.578,0v5.778h1.3L17.21,4.311ZM6.356,15.867A1.733,1.733,0,1,1,4.622,17.6,1.734,1.734,0,0,1,6.356,15.867Zm0,2.311a.578.578,0,1,0-.578-.578A.577.577,0,0,0,6.356,18.178Zm8.089-2.311A1.733,1.733,0,1,1,12.711,17.6,1.734,1.734,0,0,1,14.444,15.867Zm0,2.311a.578.578,0,1,0-.578-.578A.577.577,0,0,0,14.444,18.178Z" transform="translate(0 -2)" fill="#3b3b3b"></path>
													</svg> Add to Cart
												</a>
											</h3>
										</div>
									</div>
								</div>
								<div class="card-body">
									<h3 class="card-title"><a href="./single-page.php">END TABLE ALEGRO STEEL BLACK S*2</a></h3>
									<p class="price">NRS 6,000</p>
								</div>
							</div>
						</div>

						<div class="col s6 m6 l4">
							<div class="card">
								<div class="card-image">
									<img src="./images/png/rabie-madaci-4iwG8QD17AE-unsplash-removebg-preview.png" alt="">
									<div class="hover">
										<div class="cart">
											<h3>
												<a href="#">
													<svg xmlns="http://www.w3.org/2000/svg" width="18.489" height="17.333" viewBox="0 0 18.489 17.333">
														<path id="cart" d="M18.439,3.964l-1.684,6.7a.576.576,0,0,1-.578.578H5.2l.462,2.311H15.6a.578.578,0,1,1,0,1.156H5.2a.577.577,0,0,1-.578-.578L2.427,3.156H.578A.578.578,0,0,1,.578,2H2.889a.578.578,0,0,1,.578.578l.116.578H17.911a.578.578,0,0,1,.578.578.572.572,0,0,1-.05.231ZM4.969,10.089H6.933V4.311H3.813ZM10.4,4.311H7.511v5.778H10.4Zm3.467,0H10.978v5.778h2.889Zm.578,0v5.778h1.3L17.21,4.311ZM6.356,15.867A1.733,1.733,0,1,1,4.622,17.6,1.734,1.734,0,0,1,6.356,15.867Zm0,2.311a.578.578,0,1,0-.578-.578A.577.577,0,0,0,6.356,18.178Zm8.089-2.311A1.733,1.733,0,1,1,12.711,17.6,1.734,1.734,0,0,1,14.444,15.867Zm0,2.311a.578.578,0,1,0-.578-.578A.577.577,0,0,0,14.444,18.178Z" transform="translate(0 -2)" fill="#3b3b3b"></path>
													</svg> Add to Cart
												</a>
											</h3>
										</div>
									</div>
								</div>
								<div class="card-body">
									<h3 class="card-title"><a href="./single-page.php">CHAIR ALADIN#2(6501CH)PU BLACK#B9</a></h3>
									<p class="price">NRS 10,000</p>
								</div>
							</div>
						</div>

						<div class="col s6 m6 l4">
							<div class="card">
								<div class="card-image">
									<img src="./images/png/kari-shea-ItMggD0EguY-unsplash-removebg-preview.png" alt="">
									<div class="hover">
										<div class="cart">
											<h3>
												<a href="#">
													<svg xmlns="http://www.w3.org/2000/svg" width="18.489" height="17.333" viewBox="0 0 18.489 17.333">
														<path id="cart" d="M18.439,3.964l-1.684,6.7a.576.576,0,0,1-.578.578H5.2l.462,2.311H15.6a.578.578,0,1,1,0,1.156H5.2a.577.577,0,0,1-.578-.578L2.427,3.156H.578A.578.578,0,0,1,.578,2H2.889a.578.578,0,0,1,.578.578l.116.578H17.911a.578.578,0,0,1,.578.578.572.572,0,0,1-.05.231ZM4.969,10.089H6.933V4.311H3.813ZM10.4,4.311H7.511v5.778H10.4Zm3.467,0H10.978v5.778h2.889Zm.578,0v5.778h1.3L17.21,4.311ZM6.356,15.867A1.733,1.733,0,1,1,4.622,17.6,1.734,1.734,0,0,1,6.356,15.867Zm0,2.311a.578.578,0,1,0-.578-.578A.577.577,0,0,0,6.356,18.178Zm8.089-2.311A1.733,1.733,0,1,1,12.711,17.6,1.734,1.734,0,0,1,14.444,15.867Zm0,2.311a.578.578,0,1,0-.578-.578A.577.577,0,0,0,14.444,18.178Z" transform="translate(0 -2)" fill="#3b3b3b"></path>
													</svg> Add to Cart
												</a>
											</h3>
										</div>
									</div>
								</div>
								<div class="card-body">
									<h3 class="card-title"><a href="./single-page.php">CHAIR ALADIN#2(6501CH)PU BLACK#B9</a></h3>
									<p class="price">NRS 12,000</p>
								</div>
							</div>
						</div>

						<div class="col s6 m6 l4">
							<div class="card">
								<div class="card-image">
									<img src="./images/png/phillip-goldsberry-fZuleEfeA1Q-unsplash-removebg-preview.png" alt="">
									<div class="hover">
										<div class="cart">
											<h3>
												<a href="#">
													<svg xmlns="http://www.w3.org/2000/svg" width="18.489" height="17.333" viewBox="0 0 18.489 17.333">
														<path id="cart" d="M18.439,3.964l-1.684,6.7a.576.576,0,0,1-.578.578H5.2l.462,2.311H15.6a.578.578,0,1,1,0,1.156H5.2a.577.577,0,0,1-.578-.578L2.427,3.156H.578A.578.578,0,0,1,.578,2H2.889a.578.578,0,0,1,.578.578l.116.578H17.911a.578.578,0,0,1,.578.578.572.572,0,0,1-.05.231ZM4.969,10.089H6.933V4.311H3.813ZM10.4,4.311H7.511v5.778H10.4Zm3.467,0H10.978v5.778h2.889Zm.578,0v5.778h1.3L17.21,4.311ZM6.356,15.867A1.733,1.733,0,1,1,4.622,17.6,1.734,1.734,0,0,1,6.356,15.867Zm0,2.311a.578.578,0,1,0-.578-.578A.577.577,0,0,0,6.356,18.178Zm8.089-2.311A1.733,1.733,0,1,1,12.711,17.6,1.734,1.734,0,0,1,14.444,15.867Zm0,2.311a.578.578,0,1,0-.578-.578A.577.577,0,0,0,14.444,18.178Z" transform="translate(0 -2)" fill="#3b3b3b"></path>
													</svg> Add to Cart
												</a>
											</h3>
										</div>
									</div>
								</div>
								<div class="card-body">
									<h3 class="card-title"><a href="./single-page.php">SOFA MAMARA CORNER(L) LEATHER SL BROWN</a></h3>
									<p class="price">NRS 1,12,000</p>
								</div>
							</div>
						</div>

						<div class="col s6 m6 l4">
							<div class="card">
								<div class="card-image">
									<img src="./images/png/pacific-office-interiors-kGs09BE5o3s-unsplash-removebg-preview.png" alt="">
									<div class="hover">
										<div class="cart">
											<h3>
												<a href="#">
													<svg xmlns="http://www.w3.org/2000/svg" width="18.489" height="17.333" viewBox="0 0 18.489 17.333">
														<path id="cart" d="M18.439,3.964l-1.684,6.7a.576.576,0,0,1-.578.578H5.2l.462,2.311H15.6a.578.578,0,1,1,0,1.156H5.2a.577.577,0,0,1-.578-.578L2.427,3.156H.578A.578.578,0,0,1,.578,2H2.889a.578.578,0,0,1,.578.578l.116.578H17.911a.578.578,0,0,1,.578.578.572.572,0,0,1-.05.231ZM4.969,10.089H6.933V4.311H3.813ZM10.4,4.311H7.511v5.778H10.4Zm3.467,0H10.978v5.778h2.889Zm.578,0v5.778h1.3L17.21,4.311ZM6.356,15.867A1.733,1.733,0,1,1,4.622,17.6,1.734,1.734,0,0,1,6.356,15.867Zm0,2.311a.578.578,0,1,0-.578-.578A.577.577,0,0,0,6.356,18.178Zm8.089-2.311A1.733,1.733,0,1,1,12.711,17.6,1.734,1.734,0,0,1,14.444,15.867Zm0,2.311a.578.578,0,1,0-.578-.578A.577.577,0,0,0,14.444,18.178Z" transform="translate(0 -2)" fill="#3b3b3b"></path>
													</svg> Add to Cart
												</a>
											</h3>
										</div>
									</div>
								</div>
								<div class="card-body">
									<h3 class="card-title"><a href="./single-page.php">END TABLE ALEGRO STEEL BLACK S*2</a></h3>
									<p class="price">NRS 12,200</p>
								</div>
							</div>
						</div>

						<div class="col s6 m6 l4">
							<div class="card">
								<div class="card-image">
									<img src="./images/png/hal-gatewood-Vfml26Iy4mI-unsplash-removebg-preview.png" alt="">
									<div class="hover">
										<div class="cart">
											<h3>
												<a href="#">
													<svg xmlns="http://www.w3.org/2000/svg" width="18.489" height="17.333" viewBox="0 0 18.489 17.333">
														<path id="cart" d="M18.439,3.964l-1.684,6.7a.576.576,0,0,1-.578.578H5.2l.462,2.311H15.6a.578.578,0,1,1,0,1.156H5.2a.577.577,0,0,1-.578-.578L2.427,3.156H.578A.578.578,0,0,1,.578,2H2.889a.578.578,0,0,1,.578.578l.116.578H17.911a.578.578,0,0,1,.578.578.572.572,0,0,1-.05.231ZM4.969,10.089H6.933V4.311H3.813ZM10.4,4.311H7.511v5.778H10.4Zm3.467,0H10.978v5.778h2.889Zm.578,0v5.778h1.3L17.21,4.311ZM6.356,15.867A1.733,1.733,0,1,1,4.622,17.6,1.734,1.734,0,0,1,6.356,15.867Zm0,2.311a.578.578,0,1,0-.578-.578A.577.577,0,0,0,6.356,18.178Zm8.089-2.311A1.733,1.733,0,1,1,12.711,17.6,1.734,1.734,0,0,1,14.444,15.867Zm0,2.311a.578.578,0,1,0-.578-.578A.577.577,0,0,0,14.444,18.178Z" transform="translate(0 -2)" fill="#3b3b3b"></path>
													</svg> Add to Cart
												</a>
											</h3>
										</div>
									</div>
								</div>
								<div class="card-body">
									<h3 class="card-title"><a href="./single-page.php">BED BENTE BW5' F SOLID OAK CUSHION GRAY</a></h3>
									<p class="price">NRS 2,12,000</p>
								</div>
							</div>
						</div>

						<div class="col s6 m6 l4">
							<div class="card">
								<div class="card-image">
									<img src="./images/png/chase-jiggiemon-wilson-a3YgkIiQpKk-unsplash-removebg-preview.png" alt="">
									<div class="hover">
										<div class="cart">
											<h3>
												<a href="#">
													<svg xmlns="http://www.w3.org/2000/svg" width="18.489" height="17.333" viewBox="0 0 18.489 17.333">
														<path id="cart" d="M18.439,3.964l-1.684,6.7a.576.576,0,0,1-.578.578H5.2l.462,2.311H15.6a.578.578,0,1,1,0,1.156H5.2a.577.577,0,0,1-.578-.578L2.427,3.156H.578A.578.578,0,0,1,.578,2H2.889a.578.578,0,0,1,.578.578l.116.578H17.911a.578.578,0,0,1,.578.578.572.572,0,0,1-.05.231ZM4.969,10.089H6.933V4.311H3.813ZM10.4,4.311H7.511v5.778H10.4Zm3.467,0H10.978v5.778h2.889Zm.578,0v5.778h1.3L17.21,4.311ZM6.356,15.867A1.733,1.733,0,1,1,4.622,17.6,1.734,1.734,0,0,1,6.356,15.867Zm0,2.311a.578.578,0,1,0-.578-.578A.577.577,0,0,0,6.356,18.178Zm8.089-2.311A1.733,1.733,0,1,1,12.711,17.6,1.734,1.734,0,0,1,14.444,15.867Zm0,2.311a.578.578,0,1,0-.578-.578A.577.577,0,0,0,14.444,18.178Z" transform="translate(0 -2)" fill="#3b3b3b"></path>
													</svg> Add to Cart
												</a>
											</h3>
										</div>
									</div>
								</div>
								<div class="card-body">
									<h3 class="card-title"><a href="./single-page.php">END TABLE ALEGRO STEEL BLACK S*2</a></h3>
									<p class="price">NRS 6,000</p>
								</div>
							</div>
						</div>

						<div class="col s6 m6 l4">
							<div class="card">
								<div class="card-image">
									<img src="./images/png/rabie-madaci-4iwG8QD17AE-unsplash-removebg-preview.png" alt="">
									<div class="hover">
										<div class="cart">
											<h3>
												<a href="#">
													<svg xmlns="http://www.w3.org/2000/svg" width="18.489" height="17.333" viewBox="0 0 18.489 17.333">
														<path id="cart" d="M18.439,3.964l-1.684,6.7a.576.576,0,0,1-.578.578H5.2l.462,2.311H15.6a.578.578,0,1,1,0,1.156H5.2a.577.577,0,0,1-.578-.578L2.427,3.156H.578A.578.578,0,0,1,.578,2H2.889a.578.578,0,0,1,.578.578l.116.578H17.911a.578.578,0,0,1,.578.578.572.572,0,0,1-.05.231ZM4.969,10.089H6.933V4.311H3.813ZM10.4,4.311H7.511v5.778H10.4Zm3.467,0H10.978v5.778h2.889Zm.578,0v5.778h1.3L17.21,4.311ZM6.356,15.867A1.733,1.733,0,1,1,4.622,17.6,1.734,1.734,0,0,1,6.356,15.867Zm0,2.311a.578.578,0,1,0-.578-.578A.577.577,0,0,0,6.356,18.178Zm8.089-2.311A1.733,1.733,0,1,1,12.711,17.6,1.734,1.734,0,0,1,14.444,15.867Zm0,2.311a.578.578,0,1,0-.578-.578A.577.577,0,0,0,14.444,18.178Z" transform="translate(0 -2)" fill="#3b3b3b"></path>
													</svg> Add to Cart
												</a>
											</h3>
										</div>
									</div>
								</div>
								<div class="card-body">
									<h3 class="card-title"><a href="./single-page.php">CHAIR ALADIN#2(6501CH)PU BLACK#B9</a></h3>
									<p class="price">NRS 10,000</p>
								</div>
							</div>
						</div>

					</div>
					<div class="row">
						<ul class="pagination">
							<li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
							<li class="active"><a href="#!">1</a></li>
							<li class="waves-effect"><a href="#!">2</a></li>
							<li class="waves-effect"><a href="#!">3</a></li>
							<li class="waves-effect"><a href="#!">4</a></li>
							<li class="waves-effect"><a href="#!">5</a></li>
							<li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
						</ul>
					</div>
				</article>
			</aside>	
		</div>
	</section>		

</main>

<?php
include 'footer.php';
?>
<script type="text/javascript" src="./js/slider/nouislider.min.js"></script>
<script type="text/javascript" src="./js/custom.js"></script>
<script type="text/javascript">
	
	var slider = document.getElementById('range');

	noUiSlider.create(slider, {
		start: [0, 100000],
		connect: true,
		step: 10000,
   orientation: 'horizontal', // 'horizontal' or 'vertical'
   range: {
   	'min': 0,
   	'max': 500000,
   },
   behaviour: 'tap-drag',
   tooltips: true,
   format: wNumb({
   	decimals: 0,
   	prefix: 'NRS ',
   	thousand: ','
   }),
   
});
	// Show the slider value

	var marginMin = document.getElementById('slider-margin-value-min'),
	marginMax = document.getElementById('slider-margin-value-max');

	slider.noUiSlider.on('update', function (values, handle) {
		if (handle) {
			marginMax.innerHTML = values[handle];
		} else {
			marginMin.innerHTML = values[handle];
		}
	});



	
</script>
</body>
</html>