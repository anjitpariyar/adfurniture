<?php
$pagetitle = 'Contact-us';
$active = 'contactus';
include 'header.php';
include './template/nav.php';
?>

<nav class=" custombreadcrumb">
	<div class="nav-wrapper section-rule">
		<div class="col s12">
			<a href="./index.php" class="breadcrumb">Home</a>
			<a href="#!" class="breadcrumb">Contact Us</a>
		</div>
	</div>
</nav>

<main class="login contactus">
	<div class="section-rule">
		<div class="wrapper row">
			<div class="card horizontal">
				<div class="card-image">
					<img src="./images/JPEG/alexandru-acea-Zg9R__O-8fM-unsplash.jpg">
				</div>
				<div class="card-stacked login-part">
					<div class="card-content">
						<h3 class="card-title">Lets Talk</h3>
						<div class="row">
							<form class="col s12" method="" action="">
								<div class="row">
									<div class="input-field col s12">
										<input placeholder="My Name" type="text" class="validate">
									</div>
									<div class="input-field col s12">
										<input placeholder="My Email" type="email" class="validate">
									</div>
									<div class="input-field col s12">
										<input placeholder="My Subject" type="text" class="validate">
									</div>
									<div class="input-field col s12">
										<textarea class="materialize-textarea" placeholder="My Message"></textarea>
									</div>
									<div class="input-field col s12">
										<button type="submit">Submit</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col s12 m6 l4">
				<div class="card-panel">
					
					<ul>
						<li>
							<a href="tel:9825131071"><i class="material-icons">phone_iphone</i>+977 982-52-31-071</a>
						</li>
						<li>
							<a href="tel:9825131071"><i class="material-icons">phone_in_talk</i>01-112255</a>
						</li>
					</ul>

				</div>
			</div>
			<div class="col s12 m6 l4">
				<div class="card-panel mail">
					
					<ul>
						<li><a href="mailto:anjitpariyargmail.com"><i class="material-icons">mail</i>hdfurniturehub@gmail.com</a></li>
						<li><a href="mailto:anjitpariyargmail.com"><i class="material-icons">mail</i>info.hdfurniturehub@gmail.com</a></li>
					</ul>

				</div>
				
			</div>
			<div class="col s12 l4">
				<div class="card-panel map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2458.633089874429!2d17.505136215622983!3d51.95888198541299!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470523985b0f404b%3A0x349ffe78b5509c33!2sHdfurniture!5e0!3m2!1sen!2snp!4v1585071677368!5m2!1sen!2snp" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
				
			</div>

		</div>
	</div>
</main>




<?php
include 'footer.php';
?>
<script type="text/javascript" src="./js/custom.js"></script>
</body>
</html>