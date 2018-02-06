<!--Includes files for new-customer.php-->
<?php

				
				$email = "";
				$password = "";
				$firstname = "";
				$lastname = "";
				$phone = "";
				$address = "";
				$city = "";
				$zip = "";
				$errors = array();

				//Connecting to database
				$db = mysqli_connect('localhost', 'root', '', 'orderfood');

				//When sign up button is clicked
				if(isset($_POST['signup']))
				{
					$email = $_POST['email'];
					$password = $_POST['password'];
					$firstname = $_POST['firstname'];
					$lastname = $_POST['lastname'];
					$phone = $_POST['phone'];
					$address = $_POST['address'];
					$city = $_POST['city'];
					$zip = $_POST['zip'];


					//Ensure form fields are properly filled
					if(empty($firstname))
						array_push($errors, "FirstName is required");
					if(empty($lastname))
						array_push($errors, "LastName is required");
					if(empty($phone))
						array_push($errors, "Phone number is required");
					if(empty($address))
						array_push($errors, "Address is required");
					if(empty($city))
						array_push($errors, "City is required");
					if(empty($zip))
						array_push($errors, "Zip is required");

					//If there are no errors, save user to database
					if(count($errors) == 0)
					{
						$sql = "INSERT INTO customer (email, password, firstname, lastname, phone, address, city, zip) 
					VALUES ('$email', '$password', '$firstname', '$lastname', '$phone', '$address', '$city', '$zip')";
						mysqli_query($db, $sql);
						header('location: signup-success.php');
					}
				}

			

?>
