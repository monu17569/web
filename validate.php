<?php
 
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

	$admin = mysqli_fetch_assoc($result);
	
		
		if(($admin['adminname'] == $adminname) &&
			($admin['password'] == $password)) {
				header("Location: ./dashboard.php");
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
								echo "<div class='alert alert-danger alert-dismissible fade show my-3' role='alert'>
								<strong>Warning!</strong> <b>Username or Password is Incorrect.</b>";
								echo "<a href='./admin.php'>";
								echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
								</div></a>"; 
								die();
							} 
?>
