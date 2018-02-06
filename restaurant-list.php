<?php session_start(); ?>
<!DOCTYPE>
<html>

	<head>

		<title>List of restaurants</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

		<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<meta http-equiv="x-ua-compatible" content="ie=edge">

	</head>

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


	<body>


		<div id="topbar">
			<p id="welcome"><?php echo "Welcome " . $_SESSION['firstname'] . "!<br>"; ?></p>
		</div>
		
		<div id="whitespace"></div>



		<div class="container">
			
			<table>
			
				<tr height="50px">
				
					<th width="105px">ID</th>
					<th width="415px">Restaurant Name</th>
					<th width="465px">Address</th>
					<th>Ratings</th>
				
				</tr>
			
			</table>
			
			<form method="get">

			<?php 

			$db = mysqli_connect('localhost', 'root', '', 'orderfood');

			$sql = "SELECT  id, name, address, city, ratings FROM restaurant";
			$result = mysqli_query($db, $sql);
						
			
			if(mysqli_num_rows($result) > 0)
			{
				echo "<table>";
				for($i=0; $row = mysqli_fetch_assoc($result); $i++)
				{
					echo "<tr><td name='sel-res'><a href='menu-list.php?id=".$row['id']."'> " . $row["id"]. " </td></a><td> ". $row["name"]. "</td><td>". $row["address"]. "</td><td>" . $row["ratings"]."</td></tr>"; 
					
				}
				echo "</table>";
			}
			else
			{
				echo "0 results";
			}
				

			?>
				</form>

		</div>


		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>


		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>


		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

	</body>

</html>