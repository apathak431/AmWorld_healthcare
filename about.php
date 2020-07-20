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
					<h1>About Us</h1>
					<p><b>WHEAT-GRASS-CAPSULE AMWORLD Healthcare and Wellness</b> as name suggest is focused to provide high quality herbal products for healthcare and wellness sector. Our effort is to address the preventable ailments before they become surgical issues. Unfortunately Indian youth have one of the highest rate of mental illness in the world. Over 150 million individuals seek mental health care and serenity. We want to create awareness that healthy mind resides in a healthy body which can be regain with a healthy regime.</p>
					<p><b>Healthcare division</b> will focus on addressing 300 ailments through Herbal and Ayurvedic compositions – 100% natural products & vegan composition, Formulated by MD Ayurvedic experts. AMWORLD Wheat Grass Powder is the super food which gives you abundance of vitamins. AMWORLD wheat grass powder helps strengthen natural immune system. Helps in detoxification and thus reduces stress, tension, foul odours of breath and sweat.</p>
					<p><b>AMWORLD  Wheat Grass</b> powder to improve immunity. Helps strengthen immune system (body resistance). Alkaline food that helps balance blood pH towards normal. It also helps increases Haemoglobin (Red Blood Cells count / RBC count) in blood. 100% natural AMWORLD wheatgrass powder.</p>
					<p>It has the ability to heal a number of ailments.</p>
					<p><b>AMWORLD Wheatgrass</b> powder is an effective healer because it contains all minerals known to man, and vitamins A, B-complex, C, E, l and K. It is extremely rich in protein, and contains 17 amino acids, the building blocks of protien.</p>
					<p><b>AMWORLD Wheat Grass</b> powder contains up to 70% chlorophyll, which is an important blood builder. The chlorophyll molecules closely resemble that of the hemin molecule, the pigment which combines with protein to form haemoglobin. Chlorophyll contains enzymes and super- oxide dismutase, a copper-containing protein found in mature red blood cells acts as an antioxidant enzyme that reduces potentially harmful free radicals of oxygen formed during normal metabolic cell processes to oxygen and hydrogen peroxide. This enzyme decomposes superoxide radicals in the body into a more manageable form, thereby helping to slow down the ageing process.</p>
					<p>It is enriched with Vitamin A, C, B1, B2, B3, B6, B12, E, K, folic acid, iron and chlorophyll.
					Suitable for people who has vitamin deficiency or any health problem.</p>
					<p>Has number of health benefits such as boost immunity, reduce fatigue, weight loss and detoxification.
					It is prepared from tender shoots of wheat.</p>
					<p><b>AMWORLD Wheat Grass</b> Powder helps to make you healthy and strong.</p>
					<img src="https://www.amworldadvisor.com/wp-content/uploads/2020/07/Healtcare-Products.jpg" class="img-responsive" alt="">
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