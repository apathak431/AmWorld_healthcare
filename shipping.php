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
					</style>
					<h1>Shipping and Pickup Policy</h1>
					<p>
						Orders may be placed online on website, by phone and picked up at any of our Service Center’s. Details are given below: <br>
						<b><h3>Picking Up Orders</h3></b>
						Pickup orders can be placed at any of the offices. Payment options for PUC Orders can be Cash, Demand Draft, Credit Card and Debit Card.
						<br>Pickup hours for all Service Center’s are: <br>
						</p>
						<ul>
							<li>Monday through Friday 10:00 a.m. - 06:00 p.m</li>
							<li>Saturday 10:00 a.m. - 01:30 p.m</li>
							<li>Sunday (Closed)</li>
						</ul>
					<p> 
						<b><h3>Home Delivery</h3></b>
						Home Delivery orders can be placed on website, AMWorld Healthcare & Wellness App or by phone or at offices only.
					</p>
					<h3><b>Payment</b></h3>					
					<p>	
						Payment mode options for these orders can be:
					</p>
						<ul>
							<li>Orders placed at Office: Cash, Demand Draft, Debit Card or Credit Card.</li>
							<li>Orders placed at Call Center by phone: Credit Card and Pay-by-Challan.</li>
							<li>Orders placed at Website: Credit Card, Debit Card, Net Banking, Paytm, PayUmoney</li>
							<li>Orders placed at AMWorld Healthcare & Wellness App: Credit Card, Debit Card, Net Banking, Paytm, PayUmoney.</li>
						</ul>
					
					<h3><b>Home Delivery Schedule</b></h3>
					<p>
						Standard Delivery orders will be delivered within:
					</p>
					<ul>
							<li>Local: 3 business days after the invoice date.</li>
							<li>Up-Country: 7 business days after the invoice date.</li>
							<li>Outside Delivery Area (Remote Locations): 7 business days after the invoice date.</li>	
					</ul>
					
					<h3><b>Home Delivery Orders Delivery Fees</b></h3>
					<p>
						Delivery fees depends on Order Value
					</p>
					<ul>
							<li>Local:</li>
							<ul>
								<li>Less than Rs. 3000: Rs 50.49/- inclusive of GST</li>
								<li>Above Rs. 3000: Nil</li>
							</ul>
							
							<li>Up-Country:</li>
							<ul>
								<li>Less than Rs. 6000: Rs 121.95/- inclusive of GST</li>
								<li>Above Rs. 6000: Nil</li>
							</ul>	
					</ul>
					
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
