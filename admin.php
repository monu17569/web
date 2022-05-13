<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="login.css">
	<title>Login Page</title>
</head>

<body>
	<form action="admin.php" method="POST">
		<div class="login-box">
			<h1>Login</h1>

			<div class="textbox">
				<i class="fa fa-user" aria-hidden="true"></i>
				<input type="text" placeholder="Adminname"
						name="adminname" value="">
			</div>

			<div class="textbox">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="password" placeholder="Password"
						name="password" value="">
			</div>

			<input class="button" type="submit"
					name="login" value="Sign In">
		</div>
	</form>

	<?php
 
 session_start();
//  For localhost
$servername = "localhost";
$username = "root";
$password = "";
$database = "portfolio";

$wrong = false;
// for production
// $servername = "localhost";
// $username = "id18903059_root";
// $password = "DLIcutTda>1k8fju";
// $database = "id18903059_poftfolio";


 //Create a conncetion
 $conn = mysqli_connect($servername,$username,$password,$database);

 //Die if connection was not successful
 if (!$conn){ 
   die("Sorry we failed to connect :" .mysqli_connect_error());
 }
 

if ($_SERVER["REQUEST_METHOD"]== "POST") {
	
	$adminname = $_POST["adminname"];
	$password = $_POST["password"];

  //sql query to fetch admin and password
	$sql = "SELECT * FROM `admin`";
  $result = mysqli_query($conn,$sql);

	$row = mysqli_fetch_assoc($result);
	
		
		if(($row['adminname'] == $adminname) &&
			($row['password'] == $password)) {
				$_SESSION['adminname'] = $row['adminname'];
					header('Location: ./dashboard.php');
		}
		else 
    {
			$wrong=true;
			// echo "<script language='javascript'>";
			// echo "alert('WRONG Adminname or Password')";
			// echo "</script>";
			// die();
		}
}
?>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
 

<?php 
		if($wrong){
								echo "<div class='alert alert-danger alert-dismissible fade show my-2 text-center' role='alert'>
								<strong>Warning!</strong> <b>Username or Password is Incorrect.</b>";
								echo "<a href='./admin.php'>";
								echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
								</div></a>"; 
								die();
							} 
?>

	
</body>

</html>
