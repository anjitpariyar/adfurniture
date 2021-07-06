<?php
$pagetitle = 'Export furniture sheet book';
$active = 'export';
include './workerheader.php';
include 'headerlogo.php';
$activeTab = 'export';
?>

<main  class="factoryadmin home-page order-single worker ready export">
	<div class="rest-rule">
		<div class="row">
			<aside class="col s12 m2 category">
				<?php include './workernav.php'?>
			</aside>
			<aside class="col s12 m10 main">
				<section class="rest-rule">
					<h2 class="section-title">Export Furniture Sheet Book</h2>
					<article class="card welcome">
						<div class="card-content">
							<div class="intro">
								
								<p>Customer Name:- <span>Laxman adhakari</span></p>
								<p class="text-muted">Total Amt:- <span>NRS 2,20,200</span></p>
								<p class="text-muted">Amt. Paid:- <span>NRS 1,20,200</span></p>
								<p class="text-muted">Amt. Due:- <span>NRS 1,00,200</span></p>


							</div>

							<table class="responsive-table">
								<thead class="">
									<tr>
										<th>SN</th>
										<th>Name</th>
										<th>Size  </th>
										<th>QT</th>
									</tr>
								</thead>

								<tbody>
									<tr>
										<td>1</td>
										<td>Witherspoon Side Chair (Set of 2)</td>
										<td>24"x23"x23"</td>
										<td>1</td>
									</tr>
									<tr>
										<td>2</td>
										<td>Witherspoon Side Chair (Set of 2)</td>
										<td>24"x23"x23"</td>
										<td>1</td>
									</tr>
								</tbody>
								<tfoot class="striped">
									<tr>
										<td>
											<input type="text" class="datepicker" placeholder="Ext. Date">
										</td>
										<td >Checked date: jan 02, 2020</td>
										<td >
											<input type="text" placeholder="Checked By:">
										</td>
										<td><button type="submit" onclick="window.location.href='#!'">Submit</button></td>
									</tr>
								</tfoot>
							</table>
						</div>
					</article>
				</section>
			</aside>	
		</div>
	</div>
</main>

<?php include './workerfooter.php' ?>

<script>
	$(document).ready(function(){
		$('.datepicker').datepicker();
	});
</script>
</body>
</html>