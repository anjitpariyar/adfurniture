<?php
$pagetitle = 'inbox';
$active = 'inbox';
include './workerheader.php';
include 'headerlogo.php';
$activeTab = 'inbox';
?>

<main  class="factoryadmin home-page addworker remove messages worker ">
	<div class="rest-rule">
		<div class="row">
			<aside class="col s12 m2 category">
				<?php include './workernav.php'?>
			</aside>
			<aside class="col s12 m10 main ">
				<nav class=" custombreadcrumb">
					<div class="nav-wrapper rest-rule">
						<div class="col s12">
							<a href="#!" class="breadcrumb">message from manager ( new message <mark>2</mark> )</a>
						</div>
					</div>
				</nav>
				<article class="card welcome work-messages ">
					<div class="card-content">
						<div class="card-panel  unseen">
							<h3 class="card-title">this is the Subject of message</h3>
							<p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur reprehenderit error, expedita hic repellendus unde, quae sapiente. Asperiores, nesciunt quasi. Similique, tempore sunt ratione, error quis fugiat non quos dolor porro nihil, fugit iste neque dolore ipsa repudiandae sit at.</p>
							<p class="text-muted"><span><i class="material-icons">visibility_off</i>unseen</span>Jan 02, 2020</p>
						</div>
						<div class="card-panel">
							<h3 class="card-title">this is the Subject of message</h3>
							<p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur reprehenderit error, expedita hic repellendus unde, quae sapiente. Asperiores, nesciunt quasi. Similique, tempore sunt ratione, error quis fugiat non quos dolor porro nihil, fugit iste neque dolore ipsa repudiandae sit at.</p>
							<p class="text-muted"><span><i class="material-icons">visibility</i>seen</span>Jan 02, 2020</p>
						</div>
						<div class="card-panel">
							<h3 class="card-title">this is the Subject of message</h3>
							<p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur reprehenderit error, expedita hic repellendus unde, quae sapiente. Asperiores, nesciunt quasi. Similique, tempore sunt ratione, error quis fugiat non quos dolor porro nihil, fugit iste neque dolore ipsa repudiandae sit at.</p>
							<p class="text-muted"><span><i class="material-icons">visibility</i>seen</span>Jan 02, 2020</p>
						</div>
					</div>
				</article>	
			</aside>

		</div>
	</div>
</main>

<?php include './workerfooter.php' ?>
</body>
</html>