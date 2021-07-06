<?php
$pagetitle = 'reception';
$active = 'reception';
include 'header.php';
include './template/factorymanager.php';
$activeTab = 'other';
?>
<div class="factoryadmin data order-page">
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
							<div class="card-content center print warrenty">
								<h1 class="card-title">National Warranty Card</h1>
								<div class="logo"><img src="./images/hdhublogo.png" alt=""></div>
								<p class="para">
									Your HD Furniture is warranty for 5yrs from the date of purchase against all defects due to manufacturing. This warranty doesn’t cover the scratches and other caused by misuses. This warranty voids unless bears the date of purchase, model no. and stamp of seller and should be updated in our system.
								</p>
								<form action="" method="" target="" class="row">
									<aside class="input-field col s6 mb-2">
										<input type="text" class="datepicker" id="dop">
										<label for="dop" >Date of purchase</label>
										<div class="input-field">
											<input type="text"  id="modalno">
											<label for="modalno" >Model no</label>
										</div>

									</aside>
									<div class="input-field col s6">
										<textarea id="stamp" class="materialize-textarea" placeholder=""></textarea>
										<label for="stamp">Stamp of seller</label>
									</div>
									<div class="input-field col s12">
										<button type="submit" class="active">Save & Print</button>
									</div>

								</form>
							</div>
						</article>
						<article class="card welcome ">
							<div class="card-content center print ">
								<h1 class="card-title">Delivery Receipt Form</h1>
								<div class="logo"><img src="./images/hdhublogo.png" alt=""></div>
								<p class="para">Ittavatta- 7, Jhapa</p>
								<p class="para"><a href="tel:9815033555">9815033555</a>, <a href="mailto:hdfurniturehub@gmail.com">hdfurniturehub@gmail.com</a></p>
								
								<form action="" method="" target="">
									<div class="row">
										<div class="input-field col s6 ">
											<div class="input-field">
												<input type="number"  id="invoice">
												<label for="invoice" >Invoice no.</label>
											</div>

										</div>
										<div class="input-field col s6 ">
											<div class="input-field">
												<input type="text"  id="rcpt_date" class="datepicker">
												<label for="rcpt_date" >Date</label>
											</div>

										</div>
									</div>
									<h2 class="card-title mark">Vehicle details</h2>
									<div class="row">
										<div class="input-field col s6 ">
											<div class="input-field">
												<input type="text"  id="driver_name">
												<label for="driver_name" >Driver Name</label>
											</div>

										</div>
										<div class="input-field col s6 ">
											<div class="input-field">
												<input type="tel"  id="driver_contact">
												<label for="driver_contact" >Contact no</label>
											</div>

										</div>
										<div class="input-field col s6 m4 ">
											<div class="input-field">
												<input type="text"  id="driver_no">
												<label for="driver_no" >Vehicle No</label>
											</div>

										</div>
										<div class="input-field col s6 m4 ">
											<div class="input-field">
												<input type="text"  id="driver_depart">
												<label for="driver_depart" >Depart at</label>
											</div>

										</div>
										<div class="input-field col s6 m4 ">
											<div class="input-field">
												<input type="text"  id="driver_delivery">
												<label for="driver_delivery" >Delivered at</label>
											</div>

										</div>
									</div>


									<h2 class="card-title mark">Delivery Details</h2>
									<div class="row">
										<div class="general">
											<p>Laxman adhakari</p>
											<p>Id:- <span>010110</span></p>
											<p>+977 9825131071</p>
											<p>kathandu, Nepal</p>
											<p>Company:- <span>EB preals</span></p>
										</div>
										<table class="responsive-table highlight">
											<thead class="main-header">
												<tr>
													<th>S.N</th>
													<th>Products</th>
													<th>Qt</th>
													<th>Rate</th>
													<th>Total </th>
													<th>Remark</th>	
												</tr>
											</thead>

											<tbody>
												<tr>
													<td>1</td>
													<td>CHAIR ALADIN</td>
													<td>2 X</td>
													<td>Nrs 12,000</td>
													<td>Nrs 24,000</td>
													<td>Nice</td>
													
												</tr>
												<tr>
													<td>2</td>
													<td>Sofa mamara</td>
													<td>1 X</td>
													<td> 1,12,000</td>
													<td>1,12,000</td>
													<td>okey</td>
													
												</tr>
												<tr>
													<td>3</td>
													<td>End Table</td>
													<td>3 X</td>
													<td>Nrs 26,000</td>
													<td>Nrs 73,000</td>
													<td>Nice</td>
													
												</tr>
												

											</tbody>
											<tfoot>
												<tr>
													<th  colspan="2"> Sub total: <span>NRS 2,14,000</span></th>

													<th  colspan="2"> Delivery Fee :- <span>NRS 200</span></th>

													<th  colspan="2"> Total Amount :- <span>NRS 2,14,200</span></th>

													
												</tr>
											</tfoot>
										</table>
									</div>
									<h2 class="card-title mark">Receiver details</h2>
									<div class="row">
										<div class="input-field col s6 m4">
											<div class="input-field">
												<input type="text"  id="rec_date" >
												<label for="rec_date" >Name</label>
											</div>

										</div>
										<div class="input-field col s6 m4">
											<div class="input-field">
												<input type="text"  id="rec_date" class="datepicker">
												<label for="rec_date" >Date</label>
											</div>

										</div>
										<div class="input-field col s6 m4">
											<div class="input-field">
												<input type="text"  id="rec_time" class="timepicker">
												<label for="rec_time" >Time</label>
											</div>

										</div>
										<div class="input-field col s6 m4">
											<div class="input-field">
												<input type="text"  id="rec_sig"  placeholder="">
												<label for="rec_sig" >Signature</label>
											</div>

										</div>
									</div>

									<div class="input-field ">
										<button type="submit" class="active">Save & Print</button>
									</div>

								</form>
							</div>
						</article>
					</section>
				</aside>	
			</div>
		</div>
	</main>
</div>

<?php include './template/factoryfooter.php' ?>
<script>
	$(document).ready(function(){
		$('.datepicker').datepicker();
		$('.timepicker').timepicker();
		$('.print button[type="submit"]').click(function(e){
			// $(this).parents('.parent').print();
			return false;
		})
	})
</script>

</body>
</html>