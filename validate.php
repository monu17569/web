<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$database = "portfolio";
 //Create a conncetion
 $conn = mysqli_connect($servername,$username,$password,$database);

 //Die if connection was not successful
 if (!$conn){ 
   die("Sorry we failed to connect :" .mysqli_connect_error());
 }

?>

<?php
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
			echo "<script language='javascript'>";
			echo "alert('WRONG INFORMATION')";
			echo "</script>";
			die();
		}
}
?>
