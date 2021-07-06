<style>
	footer .visa .section-rule{
		justify-content: flex-end;
	}
</style>
<footer>
	<div class="visa">
		<div class="section-rule">
			<div class="author">
				<p>&copy; 2020. All Copyright are Reserved.<!-- Designed by <a href="https://anjitpariyar.com.np" target="_blank">Anjit</a>. --> </p>
			</div>
		</div>
	</div>
</footer>
<?php include './workertablet.php'; ?>
<!--jquery  -->
<script type="text/javascript" src="../js/jquery.js"></script>
<script src="https://kit.fontawesome.com/021b940a03.js" crossorigin="anonymous"></script>
<!-- aos -->
<!-- fancybox -->
<script type="text/javascript" src="../css/fancybox/jquery.fancybox.min.js"></script>
<!-- owl -->
<!-- materailize -->
<script type="text/javascript" src="../css/materialize/js/materialize.min.js"></script>
<!-- custom -->
<script type="text/javascript">
	$(document).ready(function(){
		$('.logout').click(function(){
			var logout = confirm("Are You Sure, You Want to Logout");
			if (logout == true) {
				$(this).attr("href", "./index.php");
			} 
			else {
				$(this).attr("href", "#!");
			} 
		})
		$('a[data-fancybox="gallery"]').fancybox();
	})
</script>
</script>