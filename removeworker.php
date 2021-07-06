<?php
$pagetitle = 'removeworker';
$active = 'remove';
include 'header.php';
include './template/factorymanager.php';
$activeTab = 'worker';
?>

<main  class="factoryadmin home-page addworker remove">
	<div class="rest-rule">
		<div class="row">
			<aside class="col s12 m2 category">
				<?php 
				include './template/factorynav.php'
				?>
			</aside>
			<aside class="col s12 m10 main ">
				<article class="card welcome overview">
					<div class="card-content ">
						<h1 class="section-title center">Remove Workers</h1>
						<form method="" action="">
							<div class="row">
								<div class="input-field col s12 ">
									<select>
										<option value="" disabled selected>Worker Job</option>
										<option value="1">Carpenter</option>
										<option value="2">Painter</option>
										<option value="3">Fitter</option>
									</select>
								</div>

								<div class="input-field col s12">
									<input placeholder="Worker ID: " type="number" class="validate" >
								</div>

								<div class="input-field col s12 ">
									<input placeholder="Your Password" type="password" class="validate">
								</div>
								<div class="input-field col s12">
									<button type="submit">Remove Worker</button>
								</div>
							</div>
						</form>
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
	});
</script>
</body>
</html>