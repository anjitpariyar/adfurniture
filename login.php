<?php
$pagetitle = 'Account';
$active = 'login';
include 'header.php';
include './template/nav.php';
$activeTab = 'account';
?>

<nav class=" custombreadcrumb">
	<div class="nav-wrapper section-rule">
		<div class="col s12">
			<a href="./index.php" class="breadcrumb">Home</a>
			<a href="#!" class="breadcrumb">Account</a>
		</div>
	</div>
</nav>

<main class="login">
	<div class="section-rule">
		<div class="wrapper row">
			<div class="card horizontal">
				<div class="card-image">
					<img src="./images/JPEG/35a69119d61f26203fae224f0a7215f3.jpg">
				</div>
				<div class="card-stacked login-part">
					<div class="card-content">
						<div class="row">
							<form class="col s12" action="./account.php">
								<div class="row">
									<div class="input-field col s12">
										<input placeholder="email" id="email" type="email" class="validate">
									</div>
									<div class="input-field col s12">
										<input id="password" type="password" class="validate" placeholder="password">
									</div>
									<div class="input-field col s12">
										<p>
											<label>
												<input type="checkbox" />
												<span>Remember me</span>
											</label>
										</p>
									</div>
									<div class="input-field col s12">
										<!-- <input value="Log in" type="submit" class="validate"> -->
										<button type="submit">Log in</button>
									</div>
								</div>
							</form>
						</div>
						<p class="or center">
							<span>or logIn with</span> 
						</p>
						<div class="loginwith row">
							<div class="col s6">
								<button class="google">
									google
								</button>
							</div>
							<div class="col s6">
								<button class="facebook">
									facebook
								</button>
							</div>
						</div>
						<p class=" col s12">
						<a href="#" id="fgpass">Forget Password</a>
						</p>
						<p class=" col s12">
							Don't have account yet? <a href="#" id="registerlink">register here</a>
						</p>

					</div>
				</div>
				<div class="card-stacked register-part">
					<div class="card-content">
						<div class="row">
							<form class="col s12">
								<div class="row">
									<div class="input-field col s12 m6">
										<input placeholder="Username" type="text" class="validate">
									</div>
									<div class="input-field col s12 m6">
										<input placeholder="email" type="email" class="validate">
									</div>
									<div class="input-field col s12 m6">
										<input type="password" class="validate" placeholder="password">
									</div>
									<div class="input-field col s12 m6">
										<input type="password" class="validate" placeholder="confirm password">
									</div>
									<div class="input-field col s12">
										<p id="showroom">
											<label>
												<input type="checkbox" />
												<span>Owner of Showroom</span>
											</label>
										</p>
										<div class="wrapper">
											<div class="input-field col s12 m6">
												<input placeholder="Company Name" type="text" class="validate">
											</div>
											<div class="input-field col s12 m6">
												<input placeholder="Company Phone" type="tel" class="validate">
											</div>
											<div class="input-field col s12 m6">
												<input type="email" class="validate" validate placeholder="Company Email">
											</div>
											<div class="input-field col s12 m6">
												<input type="text" class="validate" placeholder="Company Address">
											</div>
										</div>
										
									</div>
									<div class="col s12">
										<p>By Clicking Regester You Accept All Our <a href="#">Terms and Conditions</a></p>
									</div>		
									<div class="input-field col s12">
										<!-- <input value="Log in" type="submit" class="validate"> -->
										<button type="submit">Register</button>
									</div>
								</div>
							</form>
						</div>
						<p class="or center">
							<span>or Regester with</span> 
						</p>
						<div class="loginwith row">
							<div class="col s6">
								<button class="google">
									google
								</button>
							</div>
							<div class="col s6">
								<button class="facebook">
									facebook
								</button>
							</div>
						</div>
						<p class=" col s12">
							Already have account? <a href="#" id="loginLink">Login Here</a>
						</p>

					</div>
				</div>
			</div>
		</div>
	</div>
</main>




<?php
include 'footer.php';
?>
<script type="text/javascript" src="./js/custom.js"></script>
<script>
	$(document).ready(function(){
		$('#showroom input').change(function() {
			if(this.checked) {
				$('.card-stacked.register-part .wrapper').show('slow');
				$('.card.horizontal .card-image').addClass('show');
			}
			else{
				$('.card-stacked.register-part .wrapper').hide('slow');
				$('.card.horizontal .card-image').removeClass('show');

			}        
		});
		$('#registerlink').click(function(){
			$('.card-stacked.login-part').hide();
			$('.card-stacked.register-part').show();
		});
		$('#loginLink').click(function(){
			$('.card-stacked.register-part').hide();
			$('.card-stacked.login-part').show();
			$('#showroom input').prop( "checked", false );
			$('.card.horizontal .card-image').removeClass('show');
			$('.card-stacked.register-part .wrapper').hide();

		});
	})
</script>
</body>
</html>