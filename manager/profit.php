<?php
$pagetitle = 'Costing and Profit Desiding Sheet';
$active = 'profit';
include './workerheader.php';
include 'headerlogo.php';
$activeTab = 'profit';
?>

<main  class="factoryadmin home-page order-single worker ready profit">
	<div class="rest-rule">
		<div class="row">
			<aside class="col s12 m2 category">
				<?php include './workernav.php'?>
			</aside>
			<aside class="col s12 m10 main">
				<section class="rest-rule">
					<h2 class="section-title">Costing and Profit Desiding Sheet</h2>
					<div  class="profitlink">
						<a href="#profittable">View Costing and Profit data Sheet?</a>
						
					</div>
					<article class="card welcome">
						<div class="card-content">
							<div class="intro">		
								<p>Customer Name:- <span>Laxman adhakari</span></p>
								<p class="text-muted">Address <span>Kathmandu, Nepal</span></p>
								<p class="text-muted">Ordered Date <span>Jan 02, 2020</span></p>
								<p class="text-muted">Delivered Date<span>Feb 02, 2020</span></p>
							</div>

							<table class="responsive-table highlight">
								<thead class="">
									<tr>
										<th>SN</th>
										<th>Items</th>
										<th>Material Cost (NRS) </th>
										<th>Worker Cost (NRS)</th>
										<th>Transport</th>
										<th>Action</th>
									</tr>
								</thead>

								<tbody>
									<tr>
										<td>1</td>
										<td>Witherspoon Side Chair (Set of 2)</td>
										<td>
											<input  type="number" class="validate">
										</td>
										<td>
											<input  type="number" class="validate">
										</td>
										<td>
											<input  type="number" class="validate">
										</td>
										<td>
											<button>Calculate Profit</button>
										</td>
									</tr>
									<tr>
										<td>2</td>
										<td>Witherspoon Side Chair (Set of 2)</td>
										<td>
											<input  type="number" class="validate">
										</td>
										<td>
											<input  type="number" class="validate">
										</td>
										<td>
											<input  type="number" class="validate">
										</td>
										<td>
											<button>Calculate Profit</button>
										</td>
									</tr>
									<tr>
										<td>3</td>
										<td>Witherspoon Side Chair (Set of 2)</td>
										<td>
											<input  type="number" class="validate">
										</td>
										<td>
											<input  type="number" class="validate">
										</td>
										<td>
											<input  type="number" class="validate">
										</td>
										<td>
											<button>Calculate Profit</button>
										</td>
									</tr>

								</tbody>
								<tfoot class="striped">
									<tr>
										<td>CGST: 24%</td>
										<td>Vat: 26%</td>
										<td colspan="2">Profit: NA</td>
										<td colspan="2">Total Rate: NRS 12,000</td>
									</tr>
								</tfoot>
							</table>
						</div>

					</article>

					<article class="card welcome">
						<div class="card-content">
							<div class="intro">		
								<p>Customer Name:- <span>Laxman adhakari</span></p>
								<p class="text-muted">Address <span>Kathmandu, Nepal</span></p>
								<p class="text-muted">Ordered Date <span>Jan 02, 2020</span></p>
								<p class="text-muted">Delivered Date<span>Feb 02, 2020</span></p>
							</div>

							<table class="responsive-table ">
								<thead class="">
									<tr>
										<th>SN</th>
										<th>Items</th>
										<th>Material Cost (NRS) </th>
										<th>Worker Cost (NRS)</th>
										<th>Transport</th>
										<th>Action</th>
									</tr>
								</thead>

								<tbody>
									<tr>
										<td>1</td>
										<td>Witherspoon Side Chair (Set of 2)</td>
										<td>
											<input  type="number" class="validate">
										</td>
										<td>
											<input  type="number" class="validate">
										</td>
										<td>
											<input  type="number" class="validate">
										</td>
										<td>
											<button>Calculate Profit</button>
										</td>
									</tr>
									<tr>
										<td>2</td>
										<td>Witherspoon Side Chair (Set of 2)</td>
										<td>
											<input  type="number" class="validate">
										</td>
										<td>
											<input  type="number" class="validate">
										</td>
										<td>
											<input  type="number" class="validate">
										</td>
										<td>
											<button>Calculate Profit</button>
										</td>
									</tr>
									<tr>
										<td>3</td>
										<td>Witherspoon Side Chair (Set of 2)</td>
										<td>
											<input  type="number" class="validate">
										</td>
										<td>
											<input  type="number" class="validate">
										</td>
										<td>
											<input  type="number" class="validate">
										</td>
										<td>
											<button>Calculate Profit</button>
										</td>
									</tr>

								</tbody>
								<tfoot class="striped">
									<tr>
										<td>CGST: 24%</td>
										<td>Vat: 26%</td>
										<td colspan="2">Profit: NA</td>
										<td colspan="2">Total Rate: NRS 12,000</td>
									</tr>
								</tfoot>
							</table>
						</div>

					</article>
				</section>

				<section class="rest-rule" id="profittable">
					<h2 class="section-title">Costing and Profit Desiding Sheet(view only)</h2>
					<article class="card welcome">
						<div class="card-content">
							<div class="intro">		
								<p>Customer Name:- <span>Laxman adhakari</span></p>
								<p class="text-muted">Address <span>Kathmandu, Nepal</span></p>
								<p class="text-muted">Ordered Date <span>Jan 02, 2020</span></p>
								<p class="text-muted">Delivered Date<span>Feb 02, 2020</span></p>
							</div>

							<table class="responsive-table ">
								<thead class="">
									<tr>
										<th>SN</th>
										<th>Items</th>
										<th>Material Cost (NRS) </th>
										<th>Worker Cost (NRS)</th>
										<th>Transport</th>
									</tr>
								</thead>

								<tbody>
									<tr>
										<td>1</td>
										<td>Witherspoon Side Chair (Set of 2)</td>
										<td>
											<p class="price">1,114,000</p>
										</td>
										<td>
											<p class="price">114,000</p>
										</td>
										<td>
											<p class="price">4,000</p>
										</td>
									</tr>
									<tr>
										<td>2</td>
										<td>Witherspoon Side Chair (Set of 2)</td>
										<td>
											<p class="price">1,114,000</p>
										</td>
										<td>
											<p class="price">14,000</p>
										</td>
										<td>
											<p class="price">4,000</p>
										</td>
									</tr>
									<tr>
										<td>3</td>
										<td>Witherspoon Side Chair (Set of 2)</td>
										<td>
											<p class="price">1,114,000</p>
										</td>
										<td>
											<p class="price">14,000</p>
										</td>
										<td>
											<p class="price">4,000</p>
										</td>
									</tr>

								</tbody>
								<tfoot class="striped">
									<tr>
										<td>CGST: 24%</td>
										<td>Vat: 26%</td>
										<td>Total Rate: NRS 12,000</td>
										<td colspan="2"  class="profile">Profit: NRS 11,000</td>
									</tr>
								</tfoot>
							</table>
						</div>

					</article>
					<article class="card welcome">
						<div class="card-content">
							<div class="intro">		
								<p>Customer Name:- <span>Laxman adhakari</span></p>
								<p class="text-muted">Address <span>Kathmandu, Nepal</span></p>
								<p class="text-muted">Ordered Date <span>Jan 02, 2020</span></p>
								<p class="text-muted">Delivered Date<span>Feb 02, 2020</span></p>
							</div>

							<table class="responsive-table ">
								<thead class="">
									<tr>
										<th>SN</th>
										<th>Items</th>
										<th>Material Cost (NRS) </th>
										<th>Worker Cost (NRS)</th>
										<th>Transport</th>
									</tr>
								</thead>

								<tbody>
									<tr>
										<td>1</td>
										<td>Witherspoon Side Chair (Set of 2)</td>
										<td>
											<p class="price">1,114,000</p>
										</td>
										<td>
											<p class="price">114,000</p>
										</td>
										<td>
											<p class="price">4,000</p>
										</td>
									</tr>
									<tr>
										<td>2</td>
										<td>Witherspoon Side Chair (Set of 2)</td>
										<td>
											<p class="price">1,114,000</p>
										</td>
										<td>
											<p class="price">14,000</p>
										</td>
										<td>
											<p class="price">4,000</p>
										</td>
									</tr>
									<tr>
										<td>3</td>
										<td>Witherspoon Side Chair (Set of 2)</td>
										<td>
											<p class="price">1,114,000</p>
										</td>
										<td>
											<p class="price">14,000</p>
										</td>
										<td>
											<p class="price">4,000</p>
										</td>
									</tr>

								</tbody>
								<tfoot class="striped">
									<tr>
										<td>CGST: 24%</td>
										<td>Vat: 26%</td>
										<td>Total Rate: NRS 12,000</td>
										<td colspan="2" class="profile">Profit: NRS 11,000</td>
									</tr>
								</tfoot>
							</table>
						</div>

					</article>
					

				</section>
			</aside>	
		</div>
	</div>
</main>

<?php include './workerfooter.php' ?>
<script>
	$(document).ready(function(){

		$(".profit table td input").focus(function(){
			var elem = $(this);
   		// Save current value of element
   		elem.data('oldVal', elem.val());

   		// Look for changes in the value
   		elem.bind("propertychange change click keyup input paste", function(event){
      	// If value has changed...
      	if (elem.data('oldVal') != elem.val()) {
       		// Updated stored value
       		elem.data('oldVal', elem.val());

       // Do action
       if(elem.val() < 1){
       	elem.val('1');
       }
       

   }
});
   	});
		if($(window).width()<486){
			$('.cart-page table.striped').addClass('responsive-table');
		}


	});
</script>
</body>
</html>