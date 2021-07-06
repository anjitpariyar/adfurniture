<?php
$pagetitle = 'reception';
$active = 'worker';
include 'header.php';
include './template/factorymanager.php';
$activeTab = 'worker';
?>
<div class="factoryadmin data order-page worker">
	<main  class=" reception ">
		<div class="rest-rule">
			<div class="row">
				<aside class="col s12 m2 category">
					<?php 
					include './template/factorynav.php'
					?>
				</aside>
				<aside class="col s12 m10 ">
					<section class="rest-rule">
						<article class="card welcome">
							<h2 class="card-title mark">Leave Applications</h2>

							<div class="card-content">
								<table class="responsive-table highlight">
									<thead class="main-header">
										<tr>
											<th>S.N</th>
											<th>Name</th>
											<th>Days</th>
											<th>From</th>
											<th>to</th>
											<th>Action</th>
										</tr>
									</thead>

									<tbody>
										<tr>
											<td>1</td>
											<td>Laxman adhakari</td>
											<td>15</td>
											<td>2020/08/30</td>
											<td>2020/09/15</td>
											<td><button data-toggle="modal" data-target="leave01" class="modal-trigger">View details</button></td>
										</tr>
										<tr>
											<td>2</td>
											<td>Laxman adhakari</td>
											<td>15</td>
											<td>2020/08/30</td>
											<td>2020/09/15</td>
											<td><button data-toggle="modal" data-target="leave01" class="modal-trigger">View details</button></td>
										</tr>
										<tr>
											<td>3</td>
											<td>Laxman adhakari</td>
											<td>15</td>
											<td>2020/08/30</td>
											<td>2020/09/15</td>
											<td><button data-toggle="modal" data-target="leave01" class="modal-trigger">View details</button></td>
										</tr>
										<tr>
											<td>4</td>
											<td>Laxman adhakari</td>
											<td>15</td>
											<td>2020/08/30</td>
											<td>2020/09/15</td>
											<td><button data-toggle="modal" data-target="leave01" class="modal-trigger">View details</button></td>
										</tr>

									</tbody>
									
								</table>

							</div>
						</article>

						<div id="leave01" class="modal card ">
							<div class="modal-content para">
								<p ><b>Date:</b>2020/08/02</p>
								<p><b>Laxman Adhakari</b> ID no: <b>12345</b> under the company <b>AB production </b> reporting to the <b>manager as sujan gurung</b> to apply for <b>15 days</b> leave from <b></b> to <b>2020/09/15</b> for going to  <b>this address</b> for following reasons.</p>
								<ul>
									<li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id expedita voluptatem praesentium sapiente.</li>
									<li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id expedita voluptatem praesentium sapiente.</li>
									<li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id expedita voluptatem praesentium sapiente.</li>
									<li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id expedita voluptatem praesentium sapiente.</li>
								</ul>
								<div class="approved">
									<p>Approved By<b> Anjit</b></p>
									<time>Date: 2020/08/20</time>
								</div>
							</div>
						</div>	
					</section>
				</aside>	
			</div>
		</div>
	</main>
</div>

<?php include './template/factoryfooter.php' ?>
<script>
	$(document).ready(function(){
		$('.modal').modal();
		$('.datepicker').datepicker();
		$('.timepicker').timepicker();
		$('textarea#textarea2').characterCounter();
	})
</script>

</body>
</html>