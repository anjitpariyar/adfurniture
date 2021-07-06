<?php
$pagetitle = 'sendmessage';
$active = 'message';
include 'header.php';
include './template/factorymanager.php';
$activeTab = 'worker';
?>

<main  class="factoryadmin home-page addworker remove messages">
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
						<h1 class="section-title center">Send Message</h1>
						<form method="" action="">
							<div class="row">
								<div class="input-field col s12">
									<select multiple>
										<option value="" disabled selected>Select Person (You can select multiple)</option>
										<option value="1">Laxman Adhakari</option>
										<option value="2">Matt howerd</option>
										<option value="3">Jemes Horikita</option>
										<option value="1">Laxman Adhakari</option>
										<option value="2">Matt howerd</option>
										<option value="3">Jemes Horikita</option>
									</select>
								</div>
								<div class="input-field col s12">
									<input placeholder="Subject" type="text" class="validate">
								</div>
								<div class="input-field col s12">
									<textarea class="materialize-textarea" placeholder="Message"></textarea>
								</div>
								<div class="input-field col s12">
									<button type="submit">send</button>
								</div>
							</div>
						</form>
					</div>
				</article>

				<article class="card welcome work-messages">
					<div class="card-content">
						<div class="card-panel">
							<h3 class="card-title">this is the Subject of message</h3>
							<p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur reprehenderit error, expedita hic repellendus unde, quae sapiente. Asperiores, nesciunt quasi. Similique, tempore sunt ratione, error quis fugiat non quos dolor porro nihil, fugit iste neque dolore ipsa repudiandae sit at.</p>
							<p class="text-muted">Jan 02, 2020</p>
						</div>
						<div class="card-panel">
							<h3 class="card-title">this is the Subject of message</h3>
							<p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur reprehenderit error, expedita hic repellendus unde, quae sapiente. Asperiores, nesciunt quasi. Similique, tempore sunt ratione, error quis fugiat non quos dolor porro nihil, fugit iste neque dolore ipsa repudiandae sit at.</p>
							<p class="text-muted">Jan 02, 2020</p>
						</div>
						<div class="card-panel">
							<h3 class="card-title">this is the Subject of message</h3>
							<p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur reprehenderit error, expedita hic repellendus unde, quae sapiente. Asperiores, nesciunt quasi. Similique, tempore sunt ratione, error quis fugiat non quos dolor porro nihil, fugit iste neque dolore ipsa repudiandae sit at.</p>
							<p class="text-muted">Jan 02, 2020</p>
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
	});
</script>
</body>
</html>