<?php
$pagetitle = 'Profit Desiding Sheet';
$active = 'profit';
include 'header.php';
include './template/factorymanager.php';
$activeTab = 'other';
?>

<main  class="factoryadmin home-page order-single worker ready profit">
	<div class="rest-rule">
		<div class="row">
			<aside class="col s12 m2 category">
				
				<?php include './template/factorynav.php' ?>
			</aside>
			<aside class="col s12 m10 main">
				<section class="rest-rule" >
					<article class="card welcome overview">
						<div class="card-content ">
							<h1 class="card-title">Overall Overview </h1>
							<div class="row">
								<div class="col s6 m3">
									<div class="card center">
										<div class="card-content">
											<p class=" text-muted">Total Rate</p>
											<h2 class="card-title">Rs 24,000</h2>
										</div>
									</div>
								</div>
								<div class="col s6 m3">
									<div class="card center">
										<div class="card-content">
											<p class=" text-muted">Total CGST</p>
											<h2 class="card-title">Rs 6,000</h2>
										</div>
									</div>
								</div>
								<div class="col s6 m3">
									<div class="card center">
										<div class="card-content">
											<p class=" text-muted">Total Vat</p>
											<h2 class="card-title">Rs 6,000</h2>
										</div>
									</div>
								</div>
								<div class="col s6 m3">
									<div class="card center">
										<div class="card-content">
											<p class=" text-muted">Total Profit</p>
											<h2 class="card-title">Rs 12,000</h2>
										</div>
									</div>
								</div>
							</div>
						</div>
					</article>
					<h2 class="section-title">Costing and Profit Desiding Sheet(view only)</h2>
					<article class="card welcome">
						<div class="card-content">
							<div class="intro">		
								<p>Customer Name:- <span>Laxman adhakari</span></p>
								<p class="text-muted">Address <span>Kathmandu, Nepal</span></p>
								<p class="text-muted">Ordered Date <span>Jan 02, 2020</span></p>
								<p class="text-muted">Delivered Date<span>Feb 02, 2020</span></p>
							</div>

							<table class="responsive-table ">
								<thead class="">
									<tr>
										<th>SN</th>
										<th>Items</th>
										<th>Material Cost (NRS) </th>
										<th>Worker Cost (NRS)</th>
										<th>Transport</th>
									</tr>
								</thead>

								<tbody>
									<tr>
										<td>1</td>
										<td>Witherspoon Side Chair (Set of 2)</td>
										<td>
											<p class="price">1,114,000</p>
										</td>
										<td>
											<p class="price">114,000</p>
										</td>
										<td>
											<p class="price">4,000</p>
										</td>
									</tr>
									<tr>
										<td>2</td>
										<td>Witherspoon Side Chair (Set of 2)</td>
										<td>
											<p class="price">1,114,000</p>
										</td>
										<td>
											<p class="price">14,000</p>
										</td>
										<td>
											<p class="price">4,000</p>
										</td>
									</tr>
									<tr>
										<td>3</td>
										<td>Witherspoon Side Chair (Set of 2)</td>
										<td>
											<p class="price">1,114,000</p>
										</td>
										<td>
											<p class="price">14,000</p>
										</td>
										<td>
											<p class="price">4,000</p>
										</td>
									</tr>

								</tbody>
								<tfoot class="striped">
									<tr>
										<td>CGST: 24%</td>
										<td>Vat: 26%</td>
										<td>Total Rate: NRS 12,000</td>
										<td colspan="2"  class="profile">Profit: NRS 11,000</td>
									</tr>
								</tfoot>
							</table>
						</div>

					</article>
					<article class="card welcome">
						<div class="card-content">
							<div class="intro">		
								<p>Customer Name:- <span>Laxman adhakari</span></p>
								<p class="text-muted">Address <span>Kathmandu, Nepal</span></p>
								<p class="text-muted">Ordered Date <span>Jan 02, 2020</span></p>
								<p class="text-muted">Delivered Date<span>Feb 02, 2020</span></p>
							</div>

							<table class="responsive-table ">
								<thead class="">
									<tr>
										<th>SN</th>
										<th>Items</th>
										<th>Material Cost (NRS) </th>
										<th>Worker Cost (NRS)</th>
										<th>Transport</th>
									</tr>
								</thead>

								<tbody>
									<tr>
										<td>1</td>
										<td>Witherspoon Side Chair (Set of 2)</td>
										<td>
											<p class="price">1,114,000</p>
										</td>
										<td>
											<p class="price">114,000</p>
										</td>
										<td>
											<p class="price">4,000</p>
										</td>
									</tr>
									<tr>
										<td>2</td>
										<td>Witherspoon Side Chair (Set of 2)</td>
										<td>
											<p class="price">1,114,000</p>
										</td>
										<td>
											<p class="price">14,000</p>
										</td>
										<td>
											<p class="price">4,000</p>
										</td>
									</tr>
									<tr>
										<td>3</td>
										<td>Witherspoon Side Chair (Set of 2)</td>
										<td>
											<p class="price">1,114,000</p>
										</td>
										<td>
											<p class="price">14,000</p>
										</td>
										<td>
											<p class="price">4,000</p>
										</td>
									</tr>

								</tbody>
								<tfoot class="striped">
									<tr>
										<td>CGST: 24%</td>
										<td>Vat: 26%</td>
										<td>Total Rate: NRS 12,000</td>
										<td colspan="2" class="profile">Profit: NRS 11,000</td>
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

<?php include './template/factoryfooter.php' ?>
<script>
	$(document).ready(function(){

		if($(window).width()<486){
			$('.cart-page table.striped').addClass('responsive-table');
		}


	});
</script>
</body>
</html>