<?php
$pagetitle = 'customfurniture';
$active = 'customfurniture';
include 'header.php';
include './template/nav.php';
?>

<nav class=" custombreadcrumb">
	<div class="nav-wrapper section-rule">
		<div class="col s12">
			<a href="./index.php" class="breadcrumb">Home</a>
			<a href="#!" class="breadcrumb">Custome furniture</a>
		</div>
	</div>
</nav>

<main class="login contactus idea">
	<div class="section-rule">
		<h2 class="section-title">Tell Us Your Idea</h2>
		<div class="wrapper row">
			<div class="card horizontal">
				<div class="card-image">
					<img src="./images/JPEG/alexandru-acea-Zg9R__O-8fM-unsplash.jpg">
				</div>
				<div class="card-stacked login-part">
					<div class="card-content">
						<div class="row">
							<form class="col s12" method="" action="">
								<div class="row">
									<div class="input-field col s12">
										<input placeholder="My Name" type="text" class="validate" required="">
									</div>
									<div class="input-field col s12">
										<input placeholder="My Phone No" type="tel" class="validate" required="">
									</div>
									<div class="input-field col s12">
										<input placeholder="My Furniture Title" type="text" class="validate" required="">
									</div>
									<div class="input-field col s12 file" >

										<div class="bttn">
											<span>Photo or sketch</span>
											<input type="file" multiple id="file">
											<label for="file"><i class="material-icons ">file_upload</i>Upload a file</label> 
										</div>
									</div>
									<div class="input-field col s12">
										<textarea class="materialize-textarea" placeholder="My Message"></textarea>
									</div>
									<div class="input-field col s12">
										<button type="submit">Submit Your idea</button>
									</div>
								</div>
							</form>
						</div>
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
		$("form .bttn input").focus(function(){
			var elem = $(this);
   			if($(this).val()){
   				$(this).parent().find('label').addClass('active');
   			}
   			else
   				$(this).parent().find('label').removeClass('active');

   	});
	})
</script>
</body>
</html>