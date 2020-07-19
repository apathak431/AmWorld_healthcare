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
					<html>
					
<head>
	<meta charset="UTF-8">
	<title>About us</title>
	
</head>
<style>
.infoTitle{
	display:block;
	margin-left:auto;
	margin-right:auto;
	margin-top:2%;
	border: 2.4px solid black;
	background-color:white;
	Width: 95%;
	font-size:1.5em;
	font-weight:bold;
}
body{
	background-color:#FFe6ee;
}

.header{
	position:absolute;
	top:0;
	background-color:#00ff00;
	color:white;
	border-bottom:2px solid white;
	width: 100%
}



p{
	padding:1%;
}


.link{
	color:black;
	font-family:Avenir Book;	
	float:left;
	margin-left:2px;
	margin-right:2px;
;}
.inbetween{
	color:black;
	float:left;
	margin-left:2px;
	margin-right:2px;
}
</style>
</head>
<body>

	<div class="infoTitle">About Us</div>
	<div class="info">
	<h3><center>Our Vision</center></h3>
	
<p>To bridge Trans-continental gaps via creating a sustainable model ,which remains immune of socio-economic & geopolitical factors.</p>

	<h3><center>Our Mission</center></h3>
<p>Continue to leverage our significant economies of scale and global market exposure to deliver valuable synergies for our member companies period, while maintaining a strong technology lineup and offering client breakthrough in-organic growth.</p>

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

<h3><center>Governing Board & Executive Management </center><h3>

<h4> Paritosh Kanti (Principal Consultant- Aerospace & Defense ) </h4>

<img src="https://www.amworldadvisor.com/wp-content/uploads/2020/01/pic2.jpg" alt="HTML5 Icon" style="width:128px;height:128px;">

<p> Mr. Paritosh has served the Indian Airforce in various Defense and Civil divisions for over 37 Years. He was interim part of various defense projects in France & Russia for Aviation related and specializes in aerospace ammunition. Lately headed the Security division of Indian Oil Corporation SBU based at Indore. </p>

<h4> Tushar Kanti (Senior Consultant – Marine & Shipping) </h4>

<img src="https://www.amworldadvisor.com/wp-content/uploads/2020/01/pic1.png" alt="HTML5 Icon" style="width:128px;height:128px;">

<p> Mr. Tushar being a gold medalist in Marine Engineering has served Shipping/Logistic Giants across Globe for over 40 years. He has managed critical positions in German & Japanese Shipping Industry and has extensive knowledge in the same.</p>

<h4> Amit  Bhowmick  – Head of Transaction Advisory </h4>
 
<p> Invest India Certified- monitors the complete gamut of  Transaction Advisory of AMWORLD  Trans -Continental M&A and  manages a varied portfolio of diversified companies operating globally. These  companies range   from  Energy   ,  Manufacturing ,  Engineering Services. Mr. Bhowmick is also Associate Director with  other  several Indian companies. He has handled multi-million- dollar transactions in the field ofM&A. He has worked on tr-party international deals  involving  US ,Italy ,Mainland China-Japan, Philippines, Indonesia & Oceania.</p>

<h4> Priya  Das- HR Director </h4>
 
<img src="https://www.amworldadvisor.com/wp-content/uploads/2020/01/pic4.png" alt="HTML5 Icon" style="width:128px;height:128px;">

<p>Priya Das has over 12 years of experience in end to end Human Capital management ,she overviews complete deployment of staffing in various projects dependent on task force . Previously she has lead hospitality projects with Mayfair Hotels & Resort , Sayaji Hotels & Chains & Barbeque Nations and leading as Human Resource  Consultant for  many MNCs like E-Dictate  IT Solution </p>

</div>
</div>

</body>
</html>
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