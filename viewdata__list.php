<?php
$pagetitle = 'data';
$active = 'data';
include 'header.php';
include './template/factorymanager.php';
$activeTab = 'other';
?>

<main  class="factoryadmin home-page data">
	<div class="rest-rule">
		<div class="row">
			<aside class="col s12 m2 category">
				<?php 
				include './template/factorynav.php'
				?>
			</aside>
			<aside class="col s12 main m10" style="background-color: #f2f2f2">
				<section class="rest-rule">
					<h2 class="section-title">Customer & Dealer payment & order sheet book</h2>
					<article class="card welcome">
						<div class="card-content">
							<table class="responsive-table highlight">
								<thead class="main-header">
									<tr>
										<th>S.N</th>
										<th>Name</th>
										<th>ID</th>
										<th>Ph.No</th>
										<th>Address</th>
										<th>Company</th>	
										<th>Action</th>									

									</tr>
								</thead>

								<tbody>
									<tr>
										<td>1</td>
										<td>Laxman adhakari</td>
										<td>010110</td>
										<td>+977 9825131071</td>
										<td>kathmandu, Nepal</td>
										<td>EB preals</td>
										<td><button onclick='window.location.href="./viewdata.php"' >View details</button></td>
									</tr>
									<tr>
										<td>1</td>
										<td>Laxman adhakari</td>
										<td>010110</td>
										<td>+977 9825131071</td>
										<td>kathmandu, Nepal</td>
										<td>EB preals</td>
										<td><button onclick='window.location.href="./viewdata.php"' >View details</button></td>
									</tr>
									<tr>
										<td>1</td>
										<td>Laxman adhakari</td>
										<td>010110</td>
										<td>+977 9825131071</td>
										<td>kathmandu, Nepal</td>
										<td>EB preals</td>
										<td><button onclick='window.location.href="./viewdata.php"' >View details</button></td>
									</tr>
									<tr>
										<td>1</td>
										<td>Laxman adhakari</td>
										<td>010110</td>
										<td>+977 9825131071</td>
										<td>kathmandu, Nepal</td>
										<td>EB preals</td>
										<td><button onclick='window.location.href="./viewdata.php"' >View details</button></td>
									</tr>

								</tbody>
								<tfoot>
									<tr>
										<th class="first" colspan="2"> Ad. Amt. :-  <span>NRS 16, 1010</span></th>

										<th class="second" colspan="2"> Paid. Amt :- <span>NRS 16, 1010</span></th>

										<th class="third" > Due. Amt :- <span>NRS 10, 1010</span></th>

										<th class="fourth" >Old Due. Amt :- <span>NRS 16, 1010</span></th>

										<th class="price">Total Due. Amt :- <span>NRS 1,16, 1010</span></th>
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
	
</script>

</body>
</html>