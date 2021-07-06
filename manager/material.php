<?php
$pagetitle = 'Export furniture sheet book';
$active = 'material';
include './workerheader.php';
include 'headerlogo.php';
$activeTab = 'material';
?>

<main  class="factoryadmin home-page order-single worker ready material">
	<div class="rest-rule">
		<div class="row">
			<aside class="col s12 m2 category">
				<?php include './workernav.php'?>
			</aside>
			<aside class="col s12 m10 main">
				<section class="rest-rule">
					<h2 class="section-title">Entry Sheet of Requirerd Materials</h2>
					<article class="card welcome">
						<div class="card-content">
							<div class="intro">
								<p>Imported:- <span>EB preals</span></p>
								<p class="text-muted">Total Amt:- <span>NRS 2,20,200</span></p>
								<p class="text-muted">Amt. Paid:- <span>NRS 1,20,200</span></p>
								<p class="text-muted">Amt. Due:- <span>NRS 1,00,200</span></p>
							</div>

							<table class="responsive-table ">
								<thead class="main">
									<tr>
										<th>SN</th>
										<th>Quantity</th>
										<th>Rate(NRS)</th>
										<th colspan="3" class="one">Imported By</th>
										<th colspan="3" class="two">Used By</th>
										<th >Remaining Quantity</th>
									</tr>
								</thead>
								<thead class="">
									<tr>
										<th></th>
										<th></th>
										<th></th>
										<th class="name">Name</th>
										<th>Sign</th>
										<th class="date">Date</th>
										<th class="name">Name</th>
										<th>Qt</th>
										<th class="date">Date</th>
										<th></th>
									</tr>

								</thead>

								<tbody>
									<tr>
										<th>1</th>
										<th>12</th>
										<th>12,000</th>
										<th>Laxman Adhakari</th>
										<th>verified</th>
										<th>jan 02, 2020</th>
										<th>Matt Horikita</th>
										<th>1</th>
										<th>jan 04, 2020</th>
										<th>11</th>
									</tr>
									<tr>
										<th>2</th>
										<th>12</th>
										<th>12,000</th>
										<th>Laxman Adhakari</th>
										<th>verified</th>
										<th>jan 02, 2020</th>
										<th>Matt Horikita</th>
										<th>1</th>
										<th>jan 04, 2020</th>
										<th>11</th>
									</tr>
									<tr>
										<th>3</th>
										<th>12</th>
										<th>12,000</th>
										<th>Laxman Adhakari</th>
										<th>verified</th>
										<th>jan 02, 2020</th>
										<th>Matt Horikita</th>
										<th>1</th>
										<th>jan 04, 2020</th>
										<th>11</th>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<td >Remark:</td>
										<td colspan="9">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis obcaecati recusandae, blanditiis ipsam nulla, doloremque iusto eveniet inventore debitis incidunt!</td>
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