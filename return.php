<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue layout-top-nav">
	<div class="wrapper">

		<?php include 'includes/navbar.php'; ?>

		<div class="content-wrapper">
			<div class="container">

				<!-- Main content -->
				<section class="content">
					<div class="row">

						<div class="col-sm-9">
							<?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='alert alert-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}
					?>

							<style>
								p {
									margin-bottom: 15px;
								}

								table {
									font-family: arial, sans-serif;
									border-collapse: collapse;
									width: 100%;
								}

								td,
								th {
									border: 1px solid black;
									text-align: left;
									padding: 8px;
								}

								tr:nth-child(even) {
									background-color: #dddddd;
								}

							</style>
							<h1>Product Return & Refund Policy</h1>
							<h3><b>AMWorld Healthcare & Wellness's Customer Product Refund Policy</b></h3>
							<h4><b>We stand behind the quality of AMWorld Healthcare & Wellness's products.</b></h4>
							<p>
								AMWorld Healthcare & Wellness stands behind the quality of its products and guarantees your satisfaction. If for any reason you are not completely satisfied with the products, you may return it within 30 days of purchase for a refund as per the terms of the Returns Policy. <br>
								The refund policy is applicable only for products in marketable condition, and partially used products (30%) accompanied with an invoice. This policy does not apply to products that have been intentionally damaged or misused. It is incumbent upon AMWorld Healthcare & Wellness Direct Seller/Preferred Customer to follow the Customer Product Refund Policy in letter and spirit.
							</p>
							<h3><b>AMWorld Healthcare & Wellness's Returns Policy for Direct Seller/PC</b></h3>
							<p>
								Direct Seller/PC may return the products within 30 days of purchase as follows:
							</p>
							
							<table>
								<tr>
									<th>Condition</th>
									<th>Time Period</th>
									<th>Invoice</th>
									<th>Payment</th>
								</tr>
								<tr>
									<td>Marketable* </td>
									<td>Within 30 days of purchase</td>
									<td>Yes</td>
									<td>DAP</td>
								</tr>
								<tr>
									<td></td>
									<td>Within 30 days of purchase</td>
									<td>No</td>
									<td>DAP less GST</td>
								</tr>

								<tr>
									<td>Unmarketable**</td>
									<td>Within 30 days of purchase</td>
									<td>Yes</td>
									<td>DAP less GST</td>
								</tr>
								<tr>
									<td></td>
									<td>Within 30 days of purchase</td>
									<td>No</td>
									<td>DAP less GST</td>
								</tr>

								<tr>
									<td>Excess Stock***</td>
									<td>Within 60 days of purchase</td>
									<td>Yes</td>
									<td>DAP</td>
								</tr>
								<tr>
									<td></td>
									<td>Within 60 days of purchase</td>
									<td>No</td>
									<td>DAP less GST</td>
								</tr>
							</table>
							<br>
							<p>
							GST (Goods & Services Tax) <br>
							*Marketable refers to products that are unopened, unused, not expired and, not seasonal, discontinued or special promotional products and/or services.<br>
							**Unmarketable are products which have been partially used (30%).<br>
							***Excess stock refers to products greater than or equal to six in number<br>
							</p>
							
							<h3><b>Reference Notes</b></h3>
							<ul>
								<li>The Direct Sellers/PC must return the product(s) to AMWorld Healthcare & Wellness Pick up Center’s.</li>
								<li>Period of return for products is calculated as the number of days from the Invoice Date, to the date of receipt at the AMWorld Healthcare & Wellness Office.</li>
								<li>Condition refers to the condition in which the stock is received back from the Direct Seller/PC as a return. The product can be 'marketable' or 'unmarketable' depending on the condition of the returned stock as assessed by the Returns executive at the AMWorld Healthcare & Wellness office.</li>
								<li>Points/Net Sales Volume adjustment of Products returned up till 25th of each month shall be processed in the same month. Total Points/Net Sales Volume of the returned products will be deducted from the returning ABO's account.</li>
								<li>The Product Return Policy does not apply to open packs of literature and videos or other sales aids.</li>
								<li>Total returns cannot exceed the quantity appearing on the Invoice.</li>
								<li>If products are returned by customers directly to AMWorld Healthcare & Wellness, Points/Net Sales Volume adjustment shall be done from the Direct Seller's account & any excess amount paid shall be recoverable from Direct Seller. Customer need to update Bank account details on AMWorld Healthcare & Wellness website to get the refund amount for product return.</li>								
							</ul>
							
							<h3><b>Cooling Off</b></h3>
							<p>
								Should a new Direct Seller choose to terminate the Contract and exit the AMWorld Healthcare & Wellness business during first 90 days of Joining, he/she will be able to return all the Products and material (purchased from AMWorld Healthcare & Wellness) and get full refund (as per refund policy for marketable & non-marketable products).
							</p>
							
						</div>
						<div class="col-sm-3">
							<?php include 'includes/sidebar.php'; ?>
						</div>
					</div>
				</section>
			</div>
		</div>
		<?php include 'includes/footer.php'; ?>
	</div>

	<?php include 'includes/scripts.php'; ?>
</body>

</html>
