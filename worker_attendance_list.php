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
							<h2 class="card-title mark">Today's Attendance</h2>

							<div class="card-content">
								<table class="responsive-table highlight">
									<thead class="main-header">
										<tr>
											<th>S.N</th>
											<th>Name</th>
											<th>Present</th>
											<th>Absent</th>
											<th>Leave</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Laxman adhakari</td>
											<td><label class="green">Present</label></td>
											<td></td>
											<td></td>
											<td><button data-toggle="modal" data-target="leave01" class="modal-trigger">Full Attendance</button></td>
										</tr>
										<tr>
											<td>2</td>
											<td>Laxman adhakari</td>
											<td></td>

											<td><label class="red accent-2">Absent</label></td>
											<td></td>
											<td><button data-toggle="modal" data-target="leave01" class="modal-trigger">Full Attendance</button></td>
										</tr>
										<tr>
											<td>3</td>
											<td>Laxman adhakari</td>
											<td></td>
											<td></td>
											<td><label class="indigo">Leave</label></td>
											
											<td><button data-toggle="modal" data-target="leave01" class="modal-trigger">Full Attendance</button></td>
										</tr>
										<tr>
											<td>4</td>
											<td>Laxman adhakari</td>
											<td><label class="green">Present</label></td>
											<td></td>
											<td></td>
											<td><button data-toggle="modal" data-target="leave01" class="modal-trigger">Full Attendance</button></td>
										</tr>

									</tbody>
									<tfoot>
										<th >Total Present: 26</th>
										<th>Total Absent: 1</th>
										<th>Total Leave: 0</th>
										
									</tfoot>
									
								</table>

							</div>
						</article>

						<div id="leave01" class="modal card ">
							<div class="modal-content para">
								<h2 class="card-title mark">Laxman Adhakari</h2>
								<table class="responsive-table highlight">
									<thead class="main-header">
										<tr>
											<th>Date</th>
											<th>Present Time</th>
											<th>Leave Time</th>
											<th>Work hrs</th>
											<th>Description</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>2020/10/01</td>
											<td>10 am</td>
											<td>5 pm</td>
											<td>7</td>
											<td><ul>
												<li>finished table</li>
												<li>finished bed</li>

											</ul></td>
										</tr>
										<tr>
											<td>2020/10/01</td>
											<td>10 am</td>
											<td>5 pm</td>
											<td>7</td>
											<td><ul>
												<li>finished table</li>
												<li>finished bed</li>

											</ul></td>
										</tr>
										<tr>
											<td>2020/10/01</td>
											<td>10 am</td>
											<td>5 pm</td>
											<td>7</td>
											<td><ul>
												<li>finished table</li>
												<li>finished bed</li>

											</ul></td>
										</tr>
										<tr>
											<td>2020/10/01</td>
											<td>10 am</td>
											<td>5 pm</td>
											<td>7</td>
											<td><ul>
												<li>finished table</li>
												<li>finished bed</li>

											</ul></td>
										</tr>

									</tbody>
									<tfoot>
										<th >Total Present: 26 days</th>
										<th>Total Absent: 5 days</th>
										<th>Total Leave: 150 hrs</th>
										
									</tfoot>
									
								</table>
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