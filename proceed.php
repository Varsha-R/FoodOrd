<?php session_start(); ?>
<!DOCTYPE>
<html>

	<head>

		<title>Final Order</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

		<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<meta http-equiv="x-ua-compatible" content="ie=edge">



		<style>

			table
			{
				font-family: arial, sans-serif;
				border-collapse: collapse;
				width: 100%;
			}

			td, th
			{
				border: 1px solid #dddddd;
				text-align: center;
				padding: 8px;
			}

			tr:nth-child(even)
			{
				background-color: #dddddd;
			}
			#topbar
			{
				border-top: 1px solid #CCCCCC;
				background-color: #BB1919;
				width: 100%;
				height: 85px;
			}
			#welcome
			{
				padding: 0;
				margin: 0;
				color: white;
				font-size: 40px;
				font-weight: normal;
				padding-top:10px;
				float: left;
				margin-left: 70px;
			}
			#whitespace
			{
				height: 30px;
			}

		</style>


	</head>

	<body>


		<div id="topbar">
			<p id="welcome"><?php echo "Final Order: <br>"; ?></p>
		</div>

		<div id="whitespace"></div>

		<form method="post" action="checkout.php">

			<div class="container">

				<?php

				$db = mysqli_connect('localhost', 'root', '', 'orderfood');

				if(isset($_POST['proceed']))
				{


					if(!empty($_POST['items'])) 
					{
						// Counting number of checked checkboxes.
						$checked_count = count($_POST['items']);
						//echo "You have selected following ".$checked_count." option(s): <br/>";
						// Loop to store and display values of individual checked checkbox.
						foreach($_POST['items'] as $id) 
						{

							$query = "SELECT name,price FROM menu WHERE id='$id'";
							$result = mysqli_query($db, $query);
							$row = mysqli_fetch_assoc($result);
							$name = $row['name'];
							$price = $row['price'];
							/*echo "".$id."<br>" ;
							echo "".$name."<br>";
							echo "".$price."<br><br>";*/
							$query= "DELETE FROM order_items WHERE menu_id = $id";
							$result=mysqli_query($db, $query);

						}
					}
					else
					{ echo "<b>Please Select Atleast One Option.</b>"; }


					$sql = "SELECT  O.menu_id, M.name, O.price FROM menu M, order_items O WHERE M.id=O.menu_id AND  customer_id={$_SESSION['cust_id']}";
					$result = mysqli_query($db, $sql);
					$sum = 0;

					if(mysqli_num_rows($result) > 0)
					{
						echo "<table>";
						for($i=0; $row = mysqli_fetch_assoc($result); $i++)
						{
							echo "<tr><td> " . $row["menu_id"]. " </td><td> ". $row["name"]. "</td><td>". $row["price"]. "</td></tr>" ;
							$sum = $sum + $row['price'];
							
						}
						echo "</table>";
					}
					else
					{
						echo "0 results";
					}

					$sql = "INSERT INTO orders(customer_id, total) VALUES ('{$_SESSION['cust_id']}','$sum') ";
					$result = mysqli_query($db, $sql);
					
					$_SESSION['total'] = $sum;
					
				}
				?>
				
				<div class="container" style="text-align:right">

					<button type="submit" class="btn btn-primary" name="checkout">Checkout</button>

				</div>
				
			</div>
		</form>






		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>


		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>


		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

	</body>

</html>