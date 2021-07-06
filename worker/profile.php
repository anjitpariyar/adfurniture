<?php
$pagetitle = 'profile';
$active = 'profile';
include './workerheader.php';
include 'headerlogo.php';
$activeTab = 'profile';
?>

<main  class="factoryadmin home-page worker task account-page">
	<div class="rest-rule">
		<div class="row">
			<aside class="col s12 m2 category">
				<?php include './workernav.php'?>
			</aside>
			<aside class="col s12 m10 main ">
				<nav class=" custombreadcrumb">
					<div class="nav-wrapper rest-rule">
						<div class="col s12">
							<a href="#!" class="breadcrumb">Profile</a>
						</div>
					</div>
				</nav>

				<section class="section-rule">
					<div class="profile card">
						<div class="row card-content">
							<div class="col s4">
								<div class="circle">
									<img src="../images/JPEG/avtar.png" alt="">
								</div>
							</div>
							<div class="col s8">
								<h3 class="name">Matt Hendry</h3>
								<p class="email">matthendry101@gmail.com</p>
								<p class="total">Position: <span>Carprnter</span></p>
								<p class="total">Total Amount: <span>NRS 9,900</span></p>
								<button>
									Logout
								</button>
							</div>
						</div>
					</div>
				</section>
				<section class="card welcome overview">
					<div class="card-content ">
						<h1 class="card-title">Overall Overview </h1>
						<div class="row">
							<div class="col s6 m3">
								<div class="card center">
									<div class="card-content">
										<p class=" text-muted">New Task</p>
										<h2 class="card-title">05</h2>
									</div>
								</div>
							</div>
							<div class="col s6 m3">
								<div class="card center">
									<div class="card-content">
										<p class=" text-muted">New Inbox</p>
										<h2 class="card-title">101</h2>
									</div>
								</div>
							</div>
							<div class="col s6 m3">
								<div class="card center">
									<div class="card-content">
										<p class=" text-muted">Complete Order</p>
										<h2 class="card-title">10</h2>
									</div>
								</div>
							</div>
							<div class="col s6 m3">
								<div class="card center">
									<div class="card-content">
										<p class=" text-muted">Total Order</p>
										<h2 class="card-title">100</h2>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="card incoming collapsible">
					<button class="collapsible-header">View Incoming Sheet</button>
					<div class="card-content collapsible-body">
						<h3 class="card-title">Per Piece Worker Daily Working and Incoming Sheet</h3>
						<table class="striped responsive-table">
							<thead>
								<tr>
									<th>SN</th>
									<th>Furniture</th>
									<th>Work</th>
									<th>Rate (NRS)</th>
									<th>total calc. Qt</th>
									<th>Amt. (NRS)</th>
									<th>Date</th>
									<th>Remark</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<td>1</td>
									<td>CHAIR ALADIN#2(6501CH)PU BLACK#B9</td>
									<td>Chair</td>
									<td>1000</td>
									<td>4</td>
									<td>4,000</td>
									<td>jan 02, 2020</td>
									<td>Good work</td>
								</tr>
								<tr>
									<td>1</td>
									<td>CHAIR ALADIN#2(6501CH)PU BLACK#B9</td>
									<td>Chair</td>
									<td>1000</td>
									<td>4</td>
									<td>4,000</td>
									<td>jan 02, 2020</td>
									<td>Good work</td>
								</tr>
								<tr>
									<td>1</td>
									<td>CHAIR ALADIN#2(6501CH)PU BLACK#B9</td>
									<td>Chair</td>
									<td>1000</td>
									<td>4</td>
									<td>4,000</td>
									<td>jan 02, 2020</td>
									<td>Good work</td>
								</tr>
							</tbody>
						</table>
					</div>
				</section>

				<section class="card complete">
					<div class="card-content">
						<h3 class="card-title">
							Completed Work
						</h3>
						<article class="card">
							<h2 class="card-title">CHAIR ALADIN#2(6501CH)PU BLACK#B9</h2>
							<div class="card-content">
								<div class=" card horizontal">
									<div class="card-image">
										<img src="../images/JPEG/sketch.png">
										<div class="absolute">
											<a href="../images/JPEG/sketch.png" target="_blank"><i class="material-icons" data-fancybox="gallery" >zoom_out_map</i> <span>Full View</span> </a>
										</div>					
									</div>
									<div class="card-stacked">
										<p>mesurement: <span>24" x 23" x 24"</span></p>
										<p>color: <span>red</span></p>
										<p class="text-muted">Recived date<span>jan 02, 2020</span></p>

										<div class="card-footer">
											<p class="tags">Stock used: <span>plywood x 4</span> <span>Plank wood x 4</span> <span>Plank wood x 4</span> <span>Plank wood x 4</span></p>
											<p>Remark: <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, incidunt!</span></p>
											<p class="text-muted">Submitted date<span>jan 15, 2020</span></p>
											

										</div>
									</div>
								</div>
							</div>
						</article>

						<article class="card">
							<h2 class="card-title">CHAIR ALADIN#2(6501CH)PU BLACK#B9</h2>
							<div class="card-content">
								<div class=" card horizontal">
									<div class="card-image">
										<img src="../images/JPEG/sketch.png">
										<div class="absolute">
											<a href="../images/JPEG/sketch.png" target="_blank"><i class="material-icons" data-fancybox="gallery" >zoom_out_map</i> <span>Full View</span> </a>
										</div>					
									</div>
									<div class="card-stacked">
										<p>mesurement: <span>24" x 23" x 24"</span></p>
										<p>color: <span>red</span></p>
										<p class="text-muted">Recived date<span>jan 02, 2020</span></p>

										<div class="card-footer">
											<p class="tags">Stock used: <span>plywood x 4</span> <span>Plank wood x 4</span> <span>Plank wood x 4</span> <span>Plank wood x 4</span></p>
											<p>Remark: <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, incidunt!</span></p>
											<p class="text-muted">Submitted date<span>jan 15, 2020</span></p>
											

										</div>
									</div>
								</div>
							</div>
						</article>
						<article class="card">
							<h2 class="card-title">CHAIR ALADIN#2(6501CH)PU BLACK#B9</h2>
							<div class="card-content">
								<div class=" card horizontal">
									<div class="card-image">
										<img src="../images/JPEG/sketch.png">
										<div class="absolute">
											<a href="../images/JPEG/sketch.png" target="_blank"><i class="material-icons" data-fancybox="gallery" >zoom_out_map</i> <span>Full View</span> </a>
										</div>					
									</div>
									<div class="card-stacked">
										<p>mesurement: <span>24" x 23" x 24"</span></p>
										<p>color: <span>red</span></p>
										<p class="text-muted">Recived date<span>jan 02, 2020</span></p>

										<div class="card-footer">
											<p class="tags">Stock used: <span>plywood x 4</span> <span>Plank wood x 4</span> <span>Plank wood x 4</span> <span>Plank wood x 4</span></p>
											<p>Remark: <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, incidunt!</span></p>
											<p class="text-muted">Submitted date<span>jan 15, 2020</span></p>
											

										</div>
									</div>
								</div>
							</div>
						</article>
					</div>
				</section>	


				
			</aside>

		</div>
	</div>
</main>

<?php include './workerfooter.php' ?>
<script>
	$(document).ready(function(){
		$('.chips').chips();
		 $('.collapsible-header').click(function(e){
		 	$(this).next().slideToggle();
		 })
		if($(window).width()<678){
			$('a.finished').click(function(){
				$(this).parents('.card-footer').find('form').slideToggle();
			})
		}
	});
</script>
</body>
</html>