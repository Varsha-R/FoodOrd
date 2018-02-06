
<?php

$errors = array();

//Connecting to database
$db = mysqli_connect('localhost', 'root', '', 'orderfood');

//Log in user from existing user page
if(isset($_POST['login']))
{
	session_start();

	$firstname = $_POST['firstname'];
	$password = $_POST['password'];

	//Ensure form fields are properly filled
	if(empty($firstname))
		array_push($errors, "Username is required");
	if(empty($password))
		array_push($errors, "Password is required");

	if(count($errors) == 0)
	{
		$_SESSION['firstname'] = $firstname;
		$query = "SELECT * FROM customer WHERE firstname='{$_SESSION['firstname']}' and password='$password' ";
		$result = mysqli_query($db, $query);
		$row = mysqli_fetch_assoc($result);
		$_SESSION['cust_id']=$row['id'];

		if(mysqli_num_rows($result) == 1)
		{

			header('location: restaurant-list.php');
		}
		else
			array_push($errors, "Wrong Name/Password");
	}
}

?>