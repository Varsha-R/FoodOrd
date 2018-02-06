<?php include('server.php'); ?>
<!DOCTYPE>
<html>

	<head>

		<title>New_Customer</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

		<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<meta http-equiv="x-ua-compatible" content="ie=edge">


		<style>

			html { 

				background: url(new-customer-background.jpg) no-repeat center center fixed; 
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
			}
			body {

				background: none;
				color: #FFF;
			}
			.container {

				text-align: center;
				width: 400px;
			}
			#homePageContainer {

				margin-top: 50px;
				margin-bottom: 50px;
			}
			.error {
				
				width: 92%;
				margin: 0px auto;
				padding: 10px;
				border: 1px solid #A94442;
				color: #A94442;
				background: #F2DEDE;
				border-radius: 5px;
				text-align: left;
			}

		</style>


	</head>

	<body>

		<div class="container" id="homePageContainer">

			<h1>Welcome!</h1>

			<p><strong>Enter your details</strong></p>

			<form method="post" action="new-customer.php">

				<!--Display validation errors here -->
				<?php include('errors.php'); ?>



				<div class="form-group">
					<label for="inputEmail4">Email</label>
					<input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email" value="<?php echo $email; ?>">
				</div>
				<div class="form-group">
					<label for="inputPassword4">Password</label>
					<input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password" value="<?php echo $password; ?>">
				</div>
				<div class="form-group">
					<label for="inputFirstName">First Name</label>
					<input type="text" name="firstname" class="form-control" id="inputFirstName" placeholder="Abc" value="<?php echo $firstname; ?>">
				</div>
				<div class="form-group">
					<label for="inputLastName">Last Name</label>
					<input type="text" name="lastname" class="form-control" id="inputLastName" placeholder="Xyz" value="<?php echo $lastname; ?>">
				</div>
				<div class="form-group">
					<label for="inputPhone">Phone</label>
					<input type="text" name="phone" class="form-control" id="inputPhone" placeholder="0000000000" value="<?php echo $phone; ?>">
				</div>
				<div class="form-group">
					<label for="inputAddress">Address</label>
					<input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Mallathalli" value="<?php echo $address; ?>">
				</div>
				<div class="form-row">
					<div class="form-group col-md-8">
						<label for="inputCity">City</label>
						<select id="inputCity" name="city" class="form-control" value="<?php echo $city; ?>">
							<option selected>Choose...</option>
							<option>Bangalore</option>
						</select>
					</div>
					<div class="form-group col-md-4">
						<label for="inputZip">Zip</label>
						<input type="text" name="zip" class="form-control" id="inputZip" value="<?php echo $zip; ?>">
					</div>
				</div>
				<button type="submit" class="btn btn-primary" name="signup">Sign up</button>
				<!--<a href="existing-customer.php" class="btn btn-primary" name="signup">Sign up</a>-->
			</form>

		</div>





		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>


		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>


		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>


	</body>

</html>

















