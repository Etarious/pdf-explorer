<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Screen Shot</title>
	<!-- CSS only -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<div class="container-fluid p-0" style="width: 100%;">
		<div class="no-gutters" style='width: 100%;'>
				<div class="card shadowed">
				<div class="ui secondary pointing menu">
				  <a class="active item">
				    Home
				  </a>
				  <a class="item">
				    Messages
				  </a>
				  <a class="item">
				    Friends
				  </a>
				  <div class="right menu">
				    <a class="item btn btn-md btn-success" href="#" id="showRegisterModal">
				      Get Started
				    </a>
				  </div>
				</div>
				<h3><strong>Get Daily Updates on Programming Hacks, curated from top websites</strong></h3>
				<h6>Pick a plan below and join over <strong>120,000 companies</strong> that upgrade their Basecamp.</h6>
				<hr>
					<h5><strong>Get started with payment that suites you ...</strong></h5>
		<div class="row" style="text-align: center; display: block; margin: auto;">
			<div class="col" style="max-width: 85%; margin: auto;">
				<div><img src="img/best_values.png" width="80px"></div>
				<div class="row" style="margin-top: 20px;">
					<div class="col-md" style="padding: 10px;">
						<div class="card inner" style="border: 2px solid #725EAD; background-color: #F9F9F9;">
							<h5><strong>Pay annually</strong></h5>
							<button class="button" style="margin: 5px 0px;">Choose this plan</button>
							<div class="price-list">
								<ul>
									<li><i class="fa fa-check-circle" style="color: #725EAD;"></i><strong> $999/year</strong> - 2 months free</li>
									<li><i class="fa fa-check-circle" style="color: #725EAD;"></i> 1TB storage</li>
									<li><i class="fa fa-check-circle" style="color: #725EAD;"></i> 1 year money back guarantee</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md" style="padding: 10px;">
						<div class="card inner">
							<h5><strong>Pay monthly</strong></h5>
							<button class="button" style="margin: 5px 0px;">Choose this plan</button>
							<div class="price-list">
								<ul>
									<li><i class="fa fa-check-circle" style="color: #725EAD;"></i><strong> $99/month</strong></li>
									<li><i class="fa fa-check-circle" style="color: #725EAD;"></i> 500GB storage</li>
									<li><i class="fa fa-check-circle" style="color: #725EAD;"></i> Cancel any time</li>
								</ul>
							</div>
						</div>
					</div>
					</div>
					</div>
				</div>

			</div>
				
			</div>
	

	</div>


	<!-- Modals Here -->

		<!-- Register Modal -->
		<div class="ui modal text-center" id="registerModal">
		  <i class="close icon"></i>
		  <div class="header">
		    Register to Get Started for Free
		  </div>
		  <div class="image content">
		    <div class="description">
		      <div class="ui header">We carefully curated and corrected hacks, for you.</div>

					<!-- Register -->
						<div id="register" style="margin-top: 20px;">
		<div class="card shadowed" style="max-width: 600px;">
			<form class="ui form" method="POST" style="padding: 20px;">
				<h3 class="ui dividing header">Register</h3>
				<div class="two fields">
					<div class="field">
						<label for="firstname">Firstname</label>
						<input type="name" id="firstname" name="firstname" class="form-control popup-form-info" placeholder="e.g. John" data-content="This should contain a valid name" value="<?php if (isset($_POST['firstname'])) echo $_POST['firstname'] ?>">
					</div>
					<div class="field">
						<label for="lastname">Lastname</label>
						<input type="name" id="lastname" name="lastname" class="form-control popup-form-info" placeholder="e.g. James" data-content="This should contain a valid name" value="<?php if (isset($_POST['firstname'])) echo $_POST['lastname'] ?>">
					</div>
				</div>
				<div class="two fields">
					<div class="field">
						<label for="email">Email</label>
						<input type="email" id="email" name="email" class="form-control popup-form-info" placeholder="e.g. name@email.com" data-content="This should contain a valid E-mail address" value="<?php if (isset($_POST['email'])) echo $_POST['email'] ?>">
					</div>
					<div class="field">
						<label for="tel">Phone Number</label>
						<input type="tel" id="tel" name="tel" class="form-control popup-form-info" placeholder="000-0000-0000 make use of hyphens ' - '" data-content="Please make use of the hyphens e.g. 000-0000-0000" value="<?php if (isset($_POST['tel'])) echo $_POST['tel'] ?>">
					</div>
				</div>
				<div class="two fields">
					<div class="field">
						<label for="password">Password</label>
						<input type="password" id="password" name="password" class="form-control popup-form-info" placeholder="Password" data-content="Password must contain at least 8 characters, upper-case, lower-case, and number.">
					</div>
					<div class="field">
						<label for="confirm">Confirm-Password</label>
						<input type="password" id="confirm" name="confirm" class="form-control popup-form-info" placeholder="Confirm-Password" data-content="This should be exactly the same as the Password">
					</div>
				</div>
				
				<input type="submit" name="submit-register" class="ui violet basic button" value="Submit">
				<input type="reset" name="reset" class="ui button basic secondary" value="Reset">
			</form>
			<p>Already Registered? <a href='#' id="showLoginModal">Log in here instead</a></p>
			<div class="mb-5"></div>

			<?php

				require("process/register_process.php");

			?>
		</div>
	</div>
	<!-- End of Register Modal -->

	
	<!-- Register Form Ends Here -->

		      
		    </div>
		  </div>
		  <div class="actions">
		    <div class="ui red deny button">
		      Close
		    </div>
		  </div>
		</div>



		<!-- Login Modal -->
			<div class="ui modal text-center" id="loginModal">
		  <i class="close icon"></i>
		  <div class="header">
		    Log into your Account
		  </div>
		  <div class="image content">
		    <div class="description">
		      <div class="ui header">We carefully curated and corrected hacks, for you.</div>

					<!-- Login Form -->
						<div id="login" style="margin-top: 20px;">
		<div class="card shadowed" style="max-width: 600px;">
			<form class="ui form" method="POST" style="padding: 20px;">
				<h3 class="ui dividing header">Log in</h3>
				<div class="field">
					<label for="login-email">Email</label>
					<input type="email" id="email" name="login-email" class="form-control popup-form-info" placeholder="e.g. name@email.com" data-content="This should contain a valid E-mail address" value="<?php if (isset($_POST['login-email'])) echo $_POST['login-email'] ?>">
				</div>
				<div class="field">
					<label for="login-password">Password</label>
					<input type="password" id="login-password" name="login-password" class="form-control popup-form-info" placeholder="Password" data-content="Password must contain at least 8 characters, upper-case, lower-case, and number.">
				</div>
				<input type="submit" name="submit-login" class="ui violet basic button" value="Submit">
				<input type="reset" name="reset" class="ui button basic secondary" value="Reset">
			</form>
			<p>Not Registered? <a href="#" id="reshowRegisterModal">Register here</a></p>
			<div class="mb-5"></div>

			<?php

				require("process/login_process.php");

			?>
		</div>
	</div>

					<!-- Login Form Ends Here -->

		      
		    </div>
		  </div>
		  <div class="actions">
		    <div class="ui red deny button">
		      Close
		    </div>
		  </div>
		</div>

		<!-- End of Login Modal -->


	<!-- End of Modals here -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="third_parties/semantic-ui/semantic.min.js"></script>
<script>
	$('#showRegisterModal').on('click', function(e){
		$('#registerModal')
		.modal({
			closable: false
		})
  		.modal('show');

  		e.preventDefault();
	})

	$('#reshowRegisterModal').on('click', function(e){
		$('#registerModal')
		.modal({
			closable: false
		})
  		.modal('show');

  		e.preventDefault();
	})


	//LoginModal 
	//
	$("#showLoginModal").on('click', function(e){
		$('#loginModal')
		.modal({
			closable: false
		})
  		.modal('show');

  		e.preventDefault();



	})
	
	
</script>
</body>
</html>