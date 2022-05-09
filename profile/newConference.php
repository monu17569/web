<?php
$duplicate = false;
$insert = false; 
// for localhost
$servername = "localhost";
$username = "root";
$password = "";
$database = "portfolio";


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
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $description = $_POST["description"];
  
    //  duplicate value check
  $dup = mysqli_query($conn,"SELECT * FROM conference WHERE Disc='$description'");
  if(mysqli_num_rows($dup)>0)
  {
    $duplicate =true;
  }else{
    //Sql query to be executed
    $sql = "INSERT INTO conference (Disc) VALUES ('$description')";
    $result = mysqli_query($conn, $sql);
    
    if($result){
      $insert = true;
    }
    else{
      echo "The record was not inserted successfully because of this error ---->". mysqli_error($conn);
    }
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 
  
 <title></title>
</head>
<body>
      <!-- Nav bar starts -->
    <div class="alert alert-primary my-2" role="alert">
      <h2>Edit Your Conference Data  </h2>
    </div>
      <!-- Nav bar ends -->
     <!-- for displaying alerts -->
     <?php 
      if($insert){
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> Your data has been inserted successfully.";
        echo "<a href='./newConference.php'>";
        echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div></a>";
      }
      if($duplicate){
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>Warning!</strong> Duplicate entry not allowed.";
        echo "<a href='./newConference.php'>";
        echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div></a>";
      
      }
    ?>
    <!-- form to edit starts -->
    <div class="container my-4">
        <h3>Edit your Info</h3>
        <form action="./newConference.php" method="post">
          <div class="mb-3">
            <label for="description" class="form-label"> <h5>Description</h5></label>
            <input type="text" class="form-control" id="description" name="description" required >
          </div>

          <button type="submit" class="btn btn-primary my-3"><h5>Submit Info</h5></button>
      </form>
    </div>

    <!-- Form to edit ends -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <!-- for Pagination -->
  <!-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
       $('#myTable').DataTable();
        } );
    </script> -->
</body>
</html>
