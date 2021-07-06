<?php
$pagetitle = 'task';
$active = 'task';
include './workerheader.php';
include 'headerlogo.php';
$activeTab = 'task';
?>

<main  class="factoryadmin home-page worker task">
	<div class="rest-rule">
		<div class="row">
			<aside class="col s12 m2 category">
				<?php include './workernav.php'?>
			</aside>
			<aside class="col s12 m10 main ">
				<nav class=" custombreadcrumb">
					<div class="nav-wrapper rest-rule">
						<div class="col s12">
							<a href="#!" class="breadcrumb">TASk ( New <mark>2</mark> )</a>
						</div>
					</div>
				</nav>

				<article class="card">
					<h2 class="card-title">CHAIR ALADIN#2(6501CH)PU BLACK#B9</h2>
					<div class="card-content">
						<div class=" card horizontal">
							<div class="card-image">
								<img src="../images/JPEG/sketch.png">
								<div class="absolute">
									<a href="../images/JPEG/sketch.png" download class="download"> <i class="material-icons">file_download</i> <span>Download</span></a>
									<a href="../images/JPEG/sketch.png" target="_blank" data-fancybox="gallery" ><i class="material-icons" >zoom_out_map</i> <span>Full View</span> </a>
								</div>					
							</div>
							<div class="card-stacked">
								<p>mesurement: <span>24" x 23" x 24"</span></p>
								<p>color: <span>red</span></p>
								<p class="text-muted">Recived date<span>jan 02, 2020</span></p>

								<div class="card-footer">
									<p><a href="#!" class="finished">Finished Work?</a></p>
									<form action="" method="">
										<div class="row">
											
											<div class="chips col s12">
												<input class="custom-class " placeholder="stocks that are used with quantity">
											</div>
											<div class="input-field col s12">
												<textarea id="textarea1" class="materialize-textarea" placeholder="Remark"></textarea>
											</div>
											<div class="input-field col s12">
												<button type="submit">Submit task</button>
											</div>	
										</div>	
									</form>
								</div>
							</div>
						</div>
					</div>
				</article>	
				<article class="card">
					<h2 class="card-title">CHAIR ALADIN#2(6501CH)PU BLACK#B9</h2>
					<div class="card-content">
						<div class=" card horizontal">
							<div class="card-image">
								<img src="../images/JPEG/sketch.png">
								<div class="absolute">
									<a href="../images/JPEG/sketch.png" download class="download"> <i class="material-icons">file_download</i> <span>Download</span></a>
									<a href="../images/JPEG/sketch.png" target="_blank"><i class="material-icons" data-fancybox="gallery" >zoom_out_map</i> <span>Full View</span> </a>
								</div>					
							</div>
							<div class="card-stacked">
								<p>mesurement: <span>24" x 23" x 24"</span></p>
								<p>color: <span>red</span></p>
								<p class="text-muted">Recived date<span>jan 02, 2020</span></p>

								<div class="card-footer">
									<p><a href="#!" class="finished">Finished Work?</a></p>
									<form action="" method="">
										<div class="row">
											
											<div class="chips col s12">
												<input class="custom-class " placeholder="stocks that are used with quantity">
											</div>
											<div class="input-field col s12">
												<textarea id="textarea1" class="materialize-textarea" placeholder="Remark"></textarea>
											</div>
											<div class="input-field col s12">
												<button type="submit">Submit task</button>
											</div>	
										</div>	
									</form>
								</div>
							</div>
						</div>
					</div>
				</article>	
				<article class="card">
					<h2 class="card-title">CHAIR ALADIN#2(6501CH)PU BLACK#B9</h2>
					<div class="card-content">
						<div class=" card horizontal">
							<div class="card-image">
								<img src="../images/JPEG/sketch.png">
								<div class="absolute">
									<a href="../images/JPEG/sketch.png" download class="download"> <i class="material-icons">file_download</i> <span>Download</span></a>
									<a href="../images/JPEG/sketch.png" target="_blank"><i class="material-icons" data-fancybox="gallery" >zoom_out_map</i> <span>Full View</span> </a>
								</div>					
							</div>
							<div class="card-stacked">
								<p>mesurement: <span>24" x 23" x 24"</span></p>
								<p>color: <span>red</span></p>
								<p class="text-muted">Recived date<span>jan 02, 2020</span></p>

								<div class="card-footer">
									<p><a href="#!" class="finished">Finished Work?</a></p>
									<form action="" method="">
										<div class="row">
											
											<div class="chips col s12">
												<input class="custom-class " placeholder="stocks that are used with quantity">
											</div>
											<div class="input-field col s12">
												<textarea id="textarea1" class="materialize-textarea" placeholder="Remark"></textarea>
											</div>
											<div class="input-field col s12">
												<button type="submit">Submit task</button>
											</div>	
										</div>	
									</form>
								</div>
							</div>
						</div>
					</div>
				</article>	
				
			</aside>

		</div>
	</div>
</main>

<?php include './workerfooter.php' ?>
<script>
	$(document).ready(function(){
		$('.chips').chips();
		if($(window).width()<678){
			$('a.finished').click(function(){
				$(this).parents('.card-footer').find('form').slideToggle();
			})
		}
	});
</script>
</body>
</html>