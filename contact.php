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
                    <h2>Contact Us</h2>
                    <div class="row">
                        <div class="col-lg-8">
                        <form method="post" action="contactus.php"> 
                            <div class="form-group">
                                <input type="text" placeholder="First Name" name="firstname" class="form-control" id="first-name">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Last Name" name="lastname" class="form-control" id="last-name">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Email" name="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <textarea placeholder="Message" name="message" class="form-control" id="message"></textarea>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary btn-lg btn-flat" name="submit" type="submit">
                            </div>
                        </form>
                        </div>
                    </div>
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