<!DOCTYPE>
<html>

<head>

	<title>FoodOrd</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

	<script src="https://use.fontawesome.com/4742b844ee.js"></script>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<style>

		.jumbotron {

			background-image: url(first_img.jpg);
		}
		.newest-delicacies {

			text-align: center;
			margin-top: 50px;
			margin-bottom: 50px;
		}
		#footer {

			background-color: #B0B0B0;
			padding-top: 150px;
			margin-top: 150px;
			text-align: center;
			padding-bottom: 150px;
		}
		.icons {

			width: 50px;
		}

		body {

			position: relative;
		}
		@media (min-width:34em)
		{
			.card-deck > .card
			{
				width: 29%;
				flex-wrap: wrap;
				flex: initial; 
			}
		}

		.card-img-top {

			width: 100%;

		}

	</style>

</head>

<body data-spy="scroll" data-target="#navbar" data-offset="150">


	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="navbar">
		<a class="navbar-brand mb-0 h1" href="#">FoodOrd</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="#jumbotron">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#delicacies">Delicacies</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#restaurants">Restaurants</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#footer">ContactUs</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Sign Up
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="new-customer.php">New Customer</a>
						<a class="dropdown-item" href="existing-customer.php">Existing customer</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>



	<div class="jumbotron" id="jumbotron">
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	</div>


	<div class="container" id="delicacies">
		<h1 class="newest-delicacies">Newest Delicacies</h1>

		<div class="card-deck-wrapper">
			<div class="card-deck">
				<div class="card">
					<img class="card-img-top" src="gulab-jamun.jpg" alt="Card image cap" style="height: 250px">
					<div class="card-body">
						<h4 class="card-title"><i class="fa fa-cutlery" aria-hidden="true"></i> Gulab Jamun</h4>
						<p class="card-text">Gulab jamun (also spelled gulaab jamun) is a milk-solid-based South Asian sweet, made mainly from milk solids, traditionally from freshly curdled milk. It is often garnished with dried nuts like almonds to enhance flavour.</p>
					</div>
				</div>
				<div class="card">
					<img class="card-img-top" src="chalupa.jpg" alt="Card image cap" style="height: 250px">
					<div class="card-body">
						<h4 class="card-title"><i class="fa fa-cutlery" aria-hidden="true"></i> Mexican Chalupa</h4>
						<p class="card-text">Chalupas are made by pressing a thin layer of masa dough around the outside a small mold,  then deep frying the result to produce crisp, shallow corn cups. These are filled with various ingredients such as shredded chicken, pork, chopped onion, chipotle pepper, red salsa, and/or green salsa.</p>
					</div>
				</div>
				<div class="card">
					<img class="card-img-top" src="quesadilla.jpeg" alt="Card image cap" style="height: 250px">
					<div class="card-body">
						<h4 class="card-title"><i class="fa fa-cutlery" aria-hidden="true"></i> Quesadilla</h4>
						<p class="card-text">Quesadilla is a tortilla, usually a flour tortilla but also sometimes made with a corn tortilla, which is filled with cheese and then grilled. </p>
					</div>
				</div>
			</div>
		</div>


		<div class="container" id="restaurants">
			<h1 class="newest-delicacies">Top Rated Restaurants</h1>

			<div class="card-deck card-deck-wrapper">
				<div class="card">
					<img class="card-img-top" src="gramin.jpg" alt="Card image cap" style="height: 250px">
					<div class="card-body card-block">
						<h4 class="card-title"><i class="fa fa-h-square" aria-hidden="true"></i> Gramin</h4>
						<p class="card-text">Gramin serves vegetarian lunch, dinner and serves snacks in the time between lunch and dinner. The ambience is typically rustic and has a rural charm. True to its name it gives the visitor a feeling that he is in a typical village setting with mud walls and other paraphernalia. The food served is North Indian and is one of the most affordable and tasty North Indian food that you will find in Bangalore. The place is normally crowded on weekends both during lunch and dinner and hence it is best to come early to avoid waiting.</p>
					</div>
				</div>
				<div class="card">
					<img class="card-img-top" src="the-black-pearl.jpg" alt="Card image cap" style="height: 250px">
					<div class="card-body card-block">
						<h4 class="card-title" id="black-pearl"><i class="fa fa-h-square" aria-hidden="true"></i> The Black Pearl</h4>
						<p class="card-text">It is an Asian novelty bar and grill restaurant named after the infamous pirate ship serving international food. The best part about this place is the engaging ambience which will just keep you occupied for most of the time. The food is also great and service is also awesome. Menu has unique options for food lover- ctopus/ squid / rabbit. Best place for team outing. Definitely a place for revisits. It serves North Indian, European and Mediterranean.</p>
					</div>
				</div>
				<div class="card">
					<img class="card-img-top" src="onesta.jpeg" alt="Card image cap" style="height: 250px">
					<div class="card-body card-block">
						<h4 class="card-title"><i class="fa fa-h-square" aria-hidden="true"></i> Onesta</h4>
						<p class="card-text"> It's a perfect place for pizza lovers. The mocktails are also good. Desserts looks so attractive and nothing is worth. Freshly made pizzas, being served by cheerful staff. What more one needs. The sweet dishes served are as well very tasty. The tarts especially. The thin crust pizzas looked like tortillas with cheese and stuffings. This place is famous for its pizza. It has variety, no doubt. The beverage menu is better. The ambience is really good. The staff too is friendly. </p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="footer">

			<div class = "column">
				<h2>Contact us: </h2><br>
				<p class="lead">Email: foodord@food.com</p>
				<p class="lead">Phone: 9876543210</p><br>
				<h2>Follow us: </h2><br>
				<div class="row justify-content-center">
					<a href=""><img class="icons" src="facebook-icon.png"></a>
					<a href=""><img class="icons" src="google-icon.png"></a>
					<a href=""><img class="icons" src="linkedin-icon.png"></a>
					<a href=""><img class="icons" src="twitter-icon.png"></a>
				</div>
			</div>

		</div>





	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>


	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>


</body>

</html>