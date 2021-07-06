<?php
$pagetitle = 'store';
$active = 'store';
include 'header.php';
include './template/factorymanager.php';
$activeTab = 'other';
?>

<main  class="factoryadmin home-page addworker remove messages worker store">
	<div class="rest-rule">
		<div class="row">
			<aside class="col s12 m2 category">
				<?php 
				include './template/factorynav.php'
				?>
			</aside>
			<aside class="col s12 main m10">
				<section class="rest-rule">
					<div class="card-title mark">
						Materials in Store
						<form action="">
							<input type="search" placeholder="Search through Material Name or Code">
						</form>
					</div>
					<article class="card welcome">
						<div class="card-content">
							<table class="responsive-table highlight">
								<thead class="main-header">
									<tr>
										<th>M code</th>
										<th>Name</th>
										<th>Size</th>
										<th>Qt</th>
										<th>Rate</th>
										<th>Amount</th>	
										<th>Remarks</th>
									</tr>
								</thead>

								<tbody>
									<tr>
										<td>123</td>
										<td>Ply 18mm</td>
										<td>11" 12" 13"</td>
										<td>5</td>
										<td>500</td>
										<td>2500</td>
										<td>Good Products</td>
									</tr>
									<tr>
										<td>124</td>
										<td>Hard Wood</td>
										<td>13" 9"</td>
										<td>10</td>
										<td>8,000</td>
										<td>80,000</td>
										<td>this is heavy</td>
									</tr>
									<tr>
										<td>125</td>
										<td>Ply 18mm</td>
										<td>11" 12" 13"</td>
										<td>5</td>
										<td>500</td>
										<td>2500</td>
										<td>Good Products</td>
									</tr>
									<tr>
										<td>126</td>
										<td>Hard Wood</td>
										<td>13" 9"</td>
										<td>10</td>
										<td>8,000</td>
										<td>80,000</td>
										<td>this is heavy</td>
									</tr>

								</tbody>
								<tfoot>
									<tr>
										<th class="first" colspan="2"> Total Products :-  <span>4</span></th>

										<th class="second" colspan="2">Total quantity :- <span>30</span></th>

										<th class="third" > Total Amt :- <span>NRS 1,65,000</span></th>

										<th class="fourth" >Overall Remark :- <span>Good</span></th>
									</tr>
								</tfoot>
							</table>
						</div>
					</article>

					<ul class="collapsible">
						<li>
							<div class="collapsible-header">
								<h2 class="card-title mark">Total Imported details 
									<span class="material-icons">
										expand_more
									</span>
								</h2>
							</div>
							<div class="collapsible-body">
								<article class="card welcome">
									<div class="card-content">
										<table class="responsive-table highlight">
											<thead class="main-header">
												<tr>
													<th>Date</th>
													<th>M code</th>
													<th>Name</th>
													<th>Size</th>
													<th>Qt</th>
													<th>Rate</th>
													<th>Amount</th>	
													<th>ShopCode</th>
												</tr>
											</thead>

											<tbody>
												<tr>
													<td>10/11/2020</td>
													<td>123</td>
													<td>Ply 18mm</td>
													<td>11" 12" 13"</td>
													<td>5</td>
													<td>500</td>
													<td>2500</td>
													<td>Birat101</td>
												</tr>
												<tr>
													<td>10/11/2020</td>
													<td>124</td>
													<td>Hard Wood</td>
													<td>13" 9"</td>
													<td>10</td>
													<td>8,000</td>
													<td>80,000</td>
													<td>Jhap102</td>
												</tr>
												<tr>
													<td>10/11/2020</td>
													<td>125</td>
													<td>Ply 18mm</td>
													<td>11" 12" 13"</td>
													<td>5</td>
													<td>500</td>
													<td>2500</td>
													<td>Ktm103</td>
												</tr>
												<tr>
													<td>10/11/2020</td>
													<td>126</td>
													<td>Hard Wood</td>
													<td>13" 9"</td>
													<td>10</td>
													<td>8,000</td>
													<td>80,000</td>
													<td>Ktm104</td>
												</tr>

											</tbody>
											<tfoot>
												<tr>
													<th class="first" colspan="2"> Total Products :-  <span>4</span></th>

													<th class="second" colspan="2">Total quantity :- <span>30</span></th>

													<th class="third" > Total Amt :- <span>NRS 1,65,000</span></th>

													<th class="fourth" >Total Shop :- <span>3</span></th>
												</tr>
											</tfoot>
										</table>
									</div>
								</article>
							</div>
						</li>
						<li>
							<div class="collapsible-header">
								<h2 class="card-title mark">Total Used Material details
									<span class="material-icons">
										expand_more
									</span>
								</h2>
							</div>
							<div class="collapsible-body">
								<article class="card welcome">
									<div class="card-content">
										<table class="responsive-table highlight">
											<thead class="main-header">
												<tr>
													<th>Date</th>
													<th>M code</th>
													<th>Name</th>
													<th>Size</th>
													<th>Qt</th>
													<th>Rate</th>
													<th>Amount</th>	
													<th>ShopCode</th>
												</tr>
											</thead>

											<tbody>
												<tr>
													<td>10/11/2020</td>
													<td>123</td>
													<td>Ply 18mm</td>
													<td>11" 12" 13"</td>
													<td>5</td>
													<td>500</td>
													<td>2500</td>
													<td>Birat101</td>
												</tr>
												<tr>
													<td>10/11/2020</td>
													<td>124</td>
													<td>Hard Wood</td>
													<td>13" 9"</td>
													<td>10</td>
													<td>8,000</td>
													<td>80,000</td>
													<td>Jhap102</td>
												</tr>
												<tr>
													<td>10/11/2020</td>
													<td>125</td>
													<td>Ply 18mm</td>
													<td>11" 12" 13"</td>
													<td>5</td>
													<td>500</td>
													<td>2500</td>
													<td>Ktm103</td>
												</tr>
												<tr>
													<td>10/11/2020</td>
													<td>126</td>
													<td>Hard Wood</td>
													<td>13" 9"</td>
													<td>10</td>
													<td>8,000</td>
													<td>80,000</td>
													<td>Ktm104</td>
												</tr>

											</tbody>
											<tfoot>
												<tr>
													<th class="first" colspan="2"> Total Products :-  <span>4</span></th>

													<th class="second" colspan="2">Total quantity :- <span>30</span></th>

													<th class="third" > Total Amt :- <span>NRS 1,65,000</span></th>

													<th class="fourth" >Total Shop :- <span>3</span></th>
												</tr>
											</tfoot>
										</table>
									</div>
								</article>
							</div>
						</li>
						<li>
							<div class="collapsible-header">
								<h2 class="card-title mark">List of Shop from where we Buy
									<span class="material-icons">
										expand_more
									</span>
								</h2>
							</div>
							<div class="collapsible-body">
								<article class="card welcome">
									<div class="card-content">
										<table class="responsive-table highlight">
											<thead class="main-header">
												<tr>
													<th>S.n</th>
													<th>Name</th>
													<th>Contact</th>
													<th>Address</th>
													<th>Shop code</th>
													<th>Action</th>
													
												</tr>
											</thead>

											<tbody>
												<tr >
													<td>1</td>
													<td>Agrawal hardware</td>
													<td><a href="tel:123"> 9825131071</a></td>
													<td>ktm -19</td>
													<td>123</td>
													<td data-target="mtDetails01" class="modal-trigger"><button>Details</button></td>
													
												</tr>
												<tr>
													<td>2</td>
													<td>Laxman Furniture</td>
													<td><a href="tel:123"> 9825131071</a></td>
													<td>Itahari -19</td>
													<td>124</td>
													<td data-target="mtDetails01" class="modal-trigger"><button>Details</button></td>
												</tr>
												<tr>
													<td>3</td>
													<td>Agrawal hardware</td>
													<td><a href="tel:123"> 9825131071</a></td>
													<td>ktm -19</td>
													<td>123</td>
													<td data-target="mtDetails01" class="modal-trigger"><button>Details</button></td>
												</tr>
												<tr>
													<td>2</td>
													<td>Laxman Furniture</td>
													<td><a href="tel:123"> 9825131071</a></td>
													<td>Itahari -19</td>
													<td>124</td>
													<td data-target="mtDetails01" class="modal-trigger"><button>Details</button></td>
												</tr>

											</tbody>
											<tfoot>
												<tr >
													<th class="first"> Total Shop :-  <span>4</span></th>

													<th class="second" colspan="2">Total Amt :- <span>NRS 1,65,000</span></th>

													<th class="third" colspan="2"> Total Paid :- <span>NRS 1,65,000</span></th>
												</tr>
											</tfoot>
										</table>
									</div>
								</article>
							</div>
						</li>
					</ul>

					<article class="card welcome links">
						<div class="card-content">
							<button class="message modal-trigger" data-target="addMt">Add Products</button>
							<!-- add pulse if only there's some new alert -->
							<button class="remove pulse modal-trigger" data-target="mtAlert" >Stock Alert</button>
							<button  class="message modal-trigger" data-target="mtSend">Send</button>
						</div>
					</article>

					<div id="mtDetails01" class="modal">
						<h2 class="card-title mark">Agrawal hardware
						</h2>
						<article class="card welcome">
							<div class="card-content">
								<table class="responsive-table highlight">
									<thead class="main-header">
										<tr>
											<th>S.n</th>
											<th>Date</th>
											<th>Name</th>
											<th>Size</th>
											<th>Qt</th>
											<th>Rate</th>
											<th>Amount</th>	
										</tr>
									</thead>

									<tbody>
										<tr>
											<td>1</td>
											<td>10/10/2020</td>
											<td>Ply 18mm</td>
											<td>11" 12" 13"</td>
											<td>5</td>
											<td>500</td>
											<td>2500</td>
										</tr>
										<tr>
											<td>2</td>
											<td>10/10/2020</td>
											<td>Hard Wood</td>
											<td>13" 9"</td>
											<td>10</td>
											<td>8,000</td>
											<td>80,000</td>
										</tr>
										<tr>
											<td>3</td>
											<td>10/10/2020</td>
											<td>11" 12" 13"</td>
											<td>Ply</td>
											<td>5</td>
											<td>500</td>
											<td>2500</td>
										</tr>
										<tr>
											<td>4</td>
											<td>10/10/2020</td>
											<td>Hard Wood</td>
											<td>13" 9"</td>
											<td>10</td>
											<td>8,000</td>
											<td>80,000</td>
										</tr>

									</tbody>
									<tfoot>
										<tr>
											<th class="first" colspan="2"> Total Products :-  <span>4</span></th>

											<th colspan="2" > Total Amt :- <span>NRS 1,65,000</span></th>

											<th > Paid Amt :- <span>NRS 65,000</span></th>
											<th > Due Amt :- <span>NRS 1,00,000</span></th>
											<th > Old Due :- <span>NRS 65,000</span></th>

											
										</tr>
									</tfoot>
								</table>
							</div>
						</article>

					</div>
					<div id="mtSend" class="modal">
						<form action="">
							<div class="modal-content">
								<h2 class="card-title mark">Send Products</h2>
								<div class="row">
									<div class="input-field col s12 m6">
										<input type="text" class="datepicker">
										<label for="Date">Date</label>

									</div>
									<div class="input-field col s12 m6">
										<input  id="mcode" type="text" class="validate">
										<label for="mcode">Material Code</label>
									</div>
									<div class="input-field col s12 m6">
										<input id="Name" type="text" class="validate" >
										<label for="Name">Name</label>
									</div>
									<div class="input-field col s12 m6">
										<input  id="size" type="text" class="validate" >
										<label for="size">Size</label>

									</div>
									<div class="input-field col s12 m6">
										<input id="qty" type="number" class="validate" >
										<label for="qty">Quantity</label>
									</div>
									
									<div class="input-field col s12 m6">
										<input  id="scode" type="text" class="validate" >
										<label for="scode">Worker Code</label>

									</div>
									
								</div>
							</div>
							<div class="modal-footer">
								<button type="submit" class="waves-effect waves-light modal-close active">Send</button>
							</div>
						</form>


					</div>
					<div id="addMt" class="modal">
						<form action="">
							<div class="modal-content">
								<h2 class="card-title mark">Add Materials</h2>
								<div class="row">
									<div class="input-field col s12 m6">
										<input  id="mcode" type="text" class="validate">
										<label for="mcode">Material Code</label>
									</div>
									<div class="input-field col s12 m6">
										<input id="Name" type="text" class="validate" >
										<label for="Name">Name</label>
									</div>
									<div class="input-field col s12 m6">
										<input  id="size" type="text" class="validate" >
										<label for="size">Size</label>

									</div>
									<div class="input-field col s12 m6">
										<input id="qty" type="number" class="validate" >
										<label for="qty">Quantity</label>
									</div>
									
									
									<div class="input-field col s12 m6">
										<input  id="rate" type="text" class="validate" >
										<label for="rate">Rate</label>

									</div>
									<div class="input-field col s12 m6">
										<input  id="scode" type="text" class="validate" >
										<label for="scode">Shope Code</label>

									</div>
									<div class="input-field col s12 m6">
										<input type="text" class="datepicker">
										<label for="Date">Date</label>

									</div>
									<div class="input-field col s12 m6">
										<input  id="recived" type="text" class="validate" >
										<label for="recived">Recived By</label>

									</div>
									<!-- <div class="input-field col s12 m6">
										<select>
											<option value="" disabled >Choose your option</option>
											<option value="1" selected>Single</option>
											<option value="2">Married</option>
											<option value="3">In a relationship</option>
										</select>
										<label>Marital St.</label>
									</div> -->

								</div>
							</div>
							<div class="modal-footer">
								<button type="submit" class="waves-effect waves-light modal-close active">Add Product</button>
							</div>
						</form>


					</div>

					<div id="mtAlert" class="modal">
						<h2 class="card-title mark  red accent-1">Alert Materials</h2>
						<article class="card welcome">
							<div class="card-content">
								<table class="responsive-table highlight">
									<thead class="main-header">
										<tr>
											<th>M code</th>
											<th>Name</th>
											<th>Size</th>
											<th>Qt</th>
											<th>Rate</th>
										</tr>
									</thead>

									<tbody>
										<tr>
											<td>123</td>
											<td>Ply 18mm</td>
											<td>11" 12" 13"</td>
											<td>5</td>
											<td>500</td>
											
										</tr>
										<tr>
											<td>124</td>
											<td>Hard Wood</td>
											<td>13" 9"</td>
											<td>10</td>
											<td>8,000</td>
											
										</tr>
										<tr>
											<td>125</td>
											<td>Ply 18mm</td>
											<td>11" 12" 13"</td>
											<td>5</td>
											<td>500</td>
										
										</tr>
										<tr>
											<td>126</td>
											<td>Hard Wood</td>
											<td>13" 9"</td>
											<td>10</td>
											<td>8,000</td>
										
										</tr>

									</tbody>
									<tfoot>
										<tr>
											<th class="first" colspan="2"> Total Products :-  <span>4</span></th>

											<th class="second" colspan="2">Total quantity :- <span>30</span></th>

											<th class="third" > Avg. rate :- <span>NRS 5,000</span></th>

										</tr>
									</tfoot>
								</table>
							</div>
						</article>
					</div>


				</section>
			</aside>	

		</div>
	</div>
</main>

<?php include './template/factoryfooter.php' ?>
<script>
	$(document).ready(function(){
		$('.collapsible').collapsible();
		$('.modal').modal();
		$('select').formSelect();
		
		$('.datepicker').datepicker({
			container: 'body'
		});
		
	});
</script>

</body>
</html>