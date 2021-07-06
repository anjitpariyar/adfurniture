<?php
$pagetitle = 'odersheetsingle';
$active = 'order';
include 'header.php';
include './template/factorymanager.php';
$activeTab = 'sheet';
?>

<main  class="factoryadmin home-page order-single">
	<div class="rest-rule">
		<div class="row">
			<aside class="col s12 m2 category">
				<?php 
				include './template/factorynav.php'
				?>
			</aside>
			<aside class="col s12 m10 main">
				<section class="rest-rule">
					<article class="card welcome">
						<div class="card-content">
							<div class="intro">
								<h2 class="card-title">Customer & Dealer order sheet book</h2>
								<div class="general">
									<p>Name:- <span>Laxman adhakari</span></p>
									<p>Id:- <span>010110</span></p>
									<p>Ph.No:- <span>+977 9825131071</span></p>
									<p>Address:- <span>kathandu, Nepal</span></p>
									<p>Company:- <span>EB preals</span></p>
									<p>Total Amount:- <span>NRS 2,40,00</span></p>

								</div>
							</div>

							<table class="responsive-table highlight">
								<thead class="main-header">
									<tr>
										<th colspan="6">Furniture Details</th>
										<th colspan="3">Worker details</th>
										<th>Action</th>
									</tr>
								</thead>
								<thead class="secondary">
									<tr>
										<th>Name</th>
										<th>size</th>
										<th>color</th>
										<th>rate</th>
										<th>qty</th>
										<th>Sub Total(NRS)</th>
										<th class="worker">Carpenter</th>
										<th class="worker">painter</th>
										<th class="worker">fitter</th>
										<th> Action</th>
									</tr>
								</thead>

								<tbody>
									<tr>
										<td>Witherspoon Side Chair (Set of 2)</td>
										<td>
											<p>24" X 25" X 56" </p>
											<div class="panel">
												<div class="image">
													<img src="./images/JPEG/sketch.png" alt="">
												</div>
												<a href="./images/JPEG/sketch.png"><i class="material-icons" data-fancybox="gallery" data-caption="24 X 25 X 56">zoom_out_map</i></a>
											</div>
										</td>
										<td>Red</td>
										<td>16,000</td>
										<td>1</td>
										<td>16,00</td>
										<td>
											<div class="input-field">
												<select>
													<option value="" disabled selected>Carpenter</option>
													<option value="1">laxman Adhakari</option>
													<option value="2">Hendery rome</option>
													<option value="3">Matt Horikita</option>
												</select>
											</div>
										</td>
										<td>
											<div class="input-field">
												<select>
													<option value="" disabled selected>painter</option>
													<option value="1">laxman Adhakari</option>
													<option value="2">Hendery rome</option>
													<option value="3">Matt Horikita</option>
												</select>
											</div>
										</td>
										<td>
											<div class="input-field">
												<select>
													<option value="" disabled selected>Fitter</option>
													<option value="1">laxman Adhakari</option>
													<option value="2">Hendery rome</option>
													<option value="3">Matt Horikita</option>
												</select>
											</div>
										</td>
										<td class="but"><button onclick="window.location.href='#!'">Apply</button></td>
									</tr>
									<tr>
										<td>Witherspoon Side Chair (Set of 2)</td>
										<td>
											<p>24" X 25" X 56" </p>
											<div class="panel">
												<div class="image">
													<img src="./images/JPEG/sketch.png" alt="">
												</div>
												<a href="./images/JPEG/sketch.png"><i class="material-icons" data-fancybox="gallery" data-caption="24 X 25 X 56">zoom_out_map</i></a>
											</div>
										</td>
										<td>Red</td>
										<td>16,000</td>
										<td>1</td>
										<td>16,00</td>
										<td>
											<div class="input-field">
												<select>
													<option value="" disabled selected>Carpenter</option>
													<option value="1">laxman Adhakari</option>
													<option value="2">Hendery rome</option>
													<option value="3">Matt Horikita</option>
												</select>
											</div>
										</td>
										<td>
											<div class="input-field">
												<select>
													<option value="" disabled selected>painter</option>
													<option value="1">laxman Adhakari</option>
													<option value="2">Hendery rome</option>
													<option value="3">Matt Horikita</option>
												</select>
											</div>
										</td>
										<td>
											<div class="input-field col s12">
												<select>
													<option value="" disabled selected>Fitter</option>
													<option value="1">laxman Adhakari</option>
													<option value="2">Hendery rome</option>
													<option value="3">Matt Horikita</option>
												</select>
											</div>
										</td>
										<td class="but"><button onclick="window.location.href='#!'">Apply</button></td>
									</tr>
									<tr>
										<td>Witherspoon Side Chair (Set of 2)</td>
										<td>
											<p>24" X 25" X 56" </p>
											<div class="panel">
												<div class="image">
													<img src="./images/JPEG/sketch.png" alt="">
												</div>
												<a href="./images/JPEG/sketch.png"><i class="material-icons" data-fancybox="gallery" data-caption="24 X 25 X 56">zoom_out_map</i></a>
											</div>
										</td>
										<td>Red</td>
										<td>16,000</td>
										<td>1</td>
										<td>16,00</td>
										<td>
											<div class="input-field">
												<select>
													<option value="" disabled selected>Carpenter</option>
													<option value="1">laxman Adhakari</option>
													<option value="2">Hendery rome</option>
													<option value="3">Matt Horikita</option>
												</select>
											</div>
										</td>
										<td>
											<div class="input-field">
												<select>
													<option value="" disabled selected>painter</option>
													<option value="1">laxman Adhakari</option>
													<option value="2">Hendery rome</option>
													<option value="3">Matt Horikita</option>
												</select>
											</div>
										</td>
										<td>
											<div class="input-field col s12">
												<select>
													<option value="" disabled selected>Fitter</option>
													<option value="1">laxman Adhakari</option>
													<option value="2">Hendery rome</option>
													<option value="3">Matt Horikita</option>
												</select>
											</div>
										</td>
										<td class="but"><button onclick="window.location.href='#!'">Apply</button></td>
									</tr>
									
									
									

								</tbody>
							</table>
						</div>
						
					</article>
				</section>
			</aside>	
		</div>
	</div>
</main>

<?php include './template/factoryfooter.php' ?>
<script>
	$(document).ready(function(){
		$('select').formSelect();
		$('.panel a').fancybox({});
	});
</script>

</body>
</html>