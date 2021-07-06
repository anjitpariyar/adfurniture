<?php
$pagetitle = 'addworker';
$active = 'add';
include 'header.php';
include './template/factorymanager.php';
$activeTab = 'worker';
?>

<main  class="factoryadmin home-page addworker">
	<div class="">
		<div class="row">
			<aside class="col s12 m2 category">
				<?php 
				include './template/factorynav.php'
				?>
			</aside>
			<aside class="col s12 m10 main ">
				<article class="card welcome overview ">
					<div class="card-content ">
						<h1 class="section-title center">Add Workers</h1>
						<div class="card__step">
							<span class="active" data-step="1"></span>
							<span data-step="2"></span>
							<span data-step="3"></span>
							<span data-step="4"></span>


						</div>
						<div class="step active">
							<div class="card__body step01 ">
								<form action="">
									<h2 class="card-title mark">Personal Information</h2>
									<div class="row">
										<div class="input-field col s12 m6">
											<input id="full_name" type="text" class="validate">
											<label for="full_name" class="active">Full Name</label>
										</div>
										<div class="input-field col s12 m6">
											<input id="email" type="email" class="validate" >
											<label for="email" class="active">Email</label>
										</div>
										<div class="input-field col s12 m6">
											<input id="mob_no" type="tel" class="validate">
											<label for="mob_no" class="active">Mobile no</label>

										</div>
										<div class="input-field col s12 m6">
											<input id="contact_no" type="tel" class="validate" >
											<label for="contact_no" class="active">Contact no</label>
										</div>
										<div class="input-field col s12 m6">
											<input type="text" class="datepicker">
											<label for="dob" class="active">DOB</label>

										</div>
										<div class="input-field col s12 m6 m-2">
											<p style="margin:0;"><label>Gender</label></p>
											<p style="margin-bottom:0;">
												<label>
													<input name="Gender" type="radio" >
													<span>Male</span>
												</label>
												<label>
													<input name="Gender" type="radio">
													<span>Female</span>
												</label>
												<label>
													<input name="Gender" type="radio">
													<span>Other</span>
												</label>
											</p>
										</div>
										<div class="input-field col s12 m6">
											<input id="guardian" type="text" class="validate" >
											<label for="guardian" class="active">Guardian</label>

										</div>
										<div class="input-field col s12 m6">
											<select>
												<option value="" disabled selected>Choose your option</option>
												<option value="1" >Single</option>
												<option value="2">Married</option>
												<option value="3">In a relationship</option>
											</select>
											<label>Marital St.</label>
										</div>
									</div>
									<h2 class="card-title mark">Profile picture</h2>
									<div class="row">
										<div class="file-field input-field col s12">
											<div class="btn">
												<span>Upload</span>
												<input type="file">
											</div>
											<div class="file-path-wrapper">
												<input class="file-path validate" type="text">
											</div>
										</div>
									</div>

									<div class="card__action modal-footer">
										<button type="submit" class="next active">Next</button>
									</div>
								</form>
							</div>
						</div>
						<div class="step ">
							<div class="card__body step02 ">
								<form action="">
									<h2 class="card-title mark">Permanent Address</h2>
									<div class="row">
										<div class="input-field col s6 m4">
											<input  id="p_district" type="text" class="validate" >
											<label for="p_district">District</label>
										</div>
										<div class="input-field col s6 m4">
											<input id="p_vdc" type="text" class="validate" >
											<label for="p_vdc">VDC</label>
										</div>
										<div class="input-field col s6 m4">
											<input  id="p_wardno" type="text" class="validate" value="">
											<label for="p_wardno">Ward No:</label>

										</div>
									</div>

									<h2 class="card-title mark">Temporary Address</h2>
									<div class="row">
										<div class="input-field col s6 m4">
											<input  id="t_district" type="text" class="validate" >
											<label for="t_district">District</label>
										</div>
										<div class="input-field col s6 m4">
											<input id="t_vdc" type="text" class="validate" >
											<label for="t_vdc">VDC</label>
										</div>
										<div class="input-field col s6 m4">
											<input  id="t_wardno" type="text" class="validate" value="">
											<label for="t_wardno">Ward No:</label>

										</div>
									</div>


									<div class="card__action">
										<a href="#" class="prev">Prev</a>
										<button type="submit" class="next">Next</button>
									</div>
								</form>

							</div>
						</div>

						<div class="step ">
							<div class="card__body step03 ">
								<form action="">
									<h2 class="card-title mark">Emergency</h2>
									<div class="row">
										<div class="input-field col s12 m6">
											<input  id="em__full_name" type="text" class="validate" >
											<label for="em__full_name">Full Name</label>
										</div>
										<div class="input-field col s12 m6">
											<input id="em_rel" type="text" class="validate" >
											<label for="em_rel">Relationship</label>
										</div>
										<div class="input-field col s6 m4">
											<input  id="em_mob_no" type="tel" class="validate" >
											<label for="em_mob_no">Phone no</label>

										</div>
										<div class="input-field col s6 m4">
											<input id="em_contact_no" type="tel" class="validate" >
											<label for="em_contact_no">Home Contact</label>
										</div>
										<div class="input-field col s6 m4">
											<input id="em_email" type="email">
											<label for="em_email">Email</label>
										</div>

									</div>

									<h2 class="card-title mark">Employee Details</h2>
									<div class="row">
										<div class="input-field col s12 m6 l3">
											<input  id="start" type="text" class="timepicker">
											<label for="start">Starts at</label>
										</div>
										<div class="input-field col s12 m6 l3">
											<input id="pos" type="text" class="validate" >
											<label for="pos">Position</label>
										</div>
										<div class="input-field col s12 m6 l3">
											<p style="margin:0;"><label>Status</label></p>
											<p style="margin-bottom:0;">
												<label>
													<input name="status" type="radio" checked />
													<span>Full Time</span>
												</label>
												<label>
													<input name="status" type="radio" />
													<span>Part Time</span>
												</label>
											</p>
										</div>
										<div class="input-field col s12 m6 l3">
											<select>
												<option value="" disabled selected>Choose Payment Method</option>
												<option value="1" >esewa</option>
												<option value="2">Khalti</option>
												<option value="3">Cash</option>
											</select>
											<label>Payment Method</label>
										</div>
									</div>


									<div class="card__action">
										<a href="#" class="prev">Prev</a>
										<button type="submit" class="next">Next</button>
									</div>
								</form>

							</div>
						</div>
						<div class="step ">
							<div class="card__body step03 ">
								<form action="">
									<h2 class="card-title mark">Banking Details</h2>
									<div class="row">
										<div class="input-field col s12 m6 m4">
											<input  id="bank_name" type="text" class="validate">
											<label for="bank_name">Bank Name</label>
										</div>
										<div class="input-field col s12 m6 m4">
											<input id="branch__code" type="number" class="validate" >
											<label for="branch__code">Branch code</label>
										</div>
										<div class="input-field col s12 m6 m4">
											<input id="branch__no" type="number" class="validate" >
											<label for="branch__no">Acc. No</label>
										</div>
										<div class="input-field col s12 m6 m4">
											<input id="branch__addr" type="text" class="validate" >
											<label for="branch__addr">Branch Address</label>
										</div>
										<div class="input-field col s12 m6 m4">
											<input id="acc__name" type="text" class="validate">
											<label for="acc__name">Account Name</label>
										</div>
									</div>

									<h2 class="card-title mark">Health</h2>
									<div class="row">
										<div class="input-field col s12 ill-trigger">
											<p style="margin:0;"><label>Do you suffer from any illness that may affect your work?</label></p>
											<p style="margin-bottom:0;">
												<label>
													<input name="illness" type="radio" class="yes" />
													<span>Yes</span>
												</label>
												<label>
													<input name="illness" type="radio"  />
													<span>No</span>
												</label>
											</p>
										</div>
										<div class="input-field col s12 ill">
											<textarea id="illness__desc" class="materialize-textarea"></textarea>
											<label for="illness__desc">if yes please describe. All informational will be confidental</label>
										</div>
									</div>


									<div class="card__action">
										<a href="#" class="prev">Prev</a>
										<button type="submit">Add worker</button>
									</div>
								</form>

							</div>
						</div>
					</div>
				</article>
			</aside>

		</div>
	</div>
</main>

<?php include './template/factoryfooter.php' ?>
<script>
	$(document).ready(function(){
		$('select').formSelect();
		$('.panel a').fancybox({});
		$('.timepicker').timepicker({
			container: 'body'
		});
		$('.datepicker').datepicker({
			container: 'body'
		});
		
		$('.ill-trigger input.yes:checked').parents('.ill-trigger').next().show();

		$('.ill-trigger input').click(function(e){
			console.log($(this));
			if($(this).hasClass('yes')){
				console.log('okey')
				$(this).parents('.ill-trigger').next().show('slow');
			}
			else{
				$(this).parents('.ill-trigger').next().hide('slow');
			}
		})

		function next(e){
			e.preventDefault();
			var spanActive= $('.card__step .active');
			spanActive.removeClass('active');
			spanActive.next().addClass('active');

			var parent= $(e.target).parents('.step');
			parent.toggle();
			parent.next().toggle();
		}
		function prev(e){
			e.preventDefault();
			var spanActive= $('.card__step .active');
			spanActive.removeClass('active');
			spanActive.prev().addClass('active');

			var parent= $(e.target).parents('.step');
			parent.toggle();
			parent.prev().toggle();
		}

		$('.step button.next').click(function(e){
			next(e);
		})
		$('.step a.prev').click(function(e){
			prev(e);
		})
	});
</script>
</body>
</html>