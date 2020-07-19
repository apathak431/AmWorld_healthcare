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
						.person {
							margin-bottom: 20px;
							margin-top: 20px;
						}
						.person img {
							border: 5px solid darkblue;
							padding: 10px 10px 10px 10px;
							height: 230px;
							margin-bottom: 20px;
						}
					</style>
					<h1>About Us</h1>
				
					<div class="row">
						<div class="col-lg-6">
							<h3>Our Mission</h3>
							<p>Continue to leverage our significant economies of scale and global market exposure to deliver valuable synergies for our member companies period, while maintaining a strong technology lineup and offering client breakthrough in-organic growth.</p>
						</div>
						<div class="col-lg-6">
							<h3>Our Vision</h3>
							<p>To bridge Trans-continental gaps via creating a sustainable model, which remains immune of socio-economic & geopolitical factors.</p>
						</div>
					</div>
					
					<h3>Our Process</h3>
					<p> Determining addressable market size & potential,
					Competitive intelligence,
					Determining regulations, duties and taxes,
					Getting end customer feedback on needs gaps,
					Determining price, positioning and branding,
					Developing a proposed India market strategy</p>

					<h3>Key Specialization</h3>
					<p>Emerging market strategy
					Global Expansion Strategy
					Cultural Adaptation
					Localization & Innovation
					Conceptualization
					Franchise Development</p>
					
					<h3>Governing Board & Executive Management </h3>
					
					<div class="person">
						<h4> Paritosh Kanti (Principal Consultant- Aerospace & Defense) </h4>
						<img src="https://www.amworldadvisor.com/wp-content/uploads/2020/01/pic2.jpg">
						<p> Mr. Paritosh has served the Indian Airforce in various Defense and Civil divisions for over 37 Years. He was interim part of various defense projects in France & Russia for Aviation related and specializes in aerospace ammunition. Lately headed the Security division of Indian Oil Corporation SBU based at Indore. </p>
					</div>
					
					<div class="person">
						<h4> Tushar Kanti (Senior Consultant – Marine & Shipping) </h4>
						<img src="https://www.amworldadvisor.com/wp-content/uploads/2020/01/pic1.png">
						<p> Mr. Tushar being a gold medalist in Marine Engineering has served Shipping/Logistic Giants across Globe for over 40 years. He has managed critical positions in German & Japanese Shipping Industry and has extensive knowledge in the same.</p>
					</div>

					<div class="person">
						<h4> Amit Bhowmick – Head of Transaction Advisory </h4>
						<p> Invest India Certified - monitors the complete gamut of  Transaction Advisory of AMWORLD  Trans -Continental M&A and  manages a varied portfolio of diversified companies operating globally. These  companies range from Energy, Manufacturing, Engineering Services. Mr. Bhowmick is also Associate Director with  other  several Indian companies. He has handled multi-million- dollar transactions in the field ofM&A. He has worked on tr-party international deals involving US, Italy, Mainland China-Japan, Philippines, Indonesia & Oceania.</p>
					</div>
					
					<div class="person">
						<h4> Priya Das - HR Director </h4>		
						<img src="https://www.amworldadvisor.com/wp-content/uploads/2020/01/pic4.png">
						<p>Priya Das has over 12 years of experience in end to end Human Capital management, she overviews complete deployment of staffing in various projects dependent on task force. Previously she has lead hospitality projects with Mayfair Hotels & Resort, Sayaji Hotels & Chains & Barbeque Nations and leading as Human Resource  Consultant for  many MNCs like E-Dictate IT Solution </p>
					</div>
				</div>
				<div class="col-sm-3">
	        		<?php include 'includes/sidebar.php'; ?>
	        	</div>
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