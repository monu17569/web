
<?php

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
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
  
  <title></title>
</head>
<body>
    
<div class="card text-white bg-info mb-3 my-5" >
  <div class="card-header"><h2>Degree</h2></div>
  <div class="card-body">
    <!-- <h5 class="card-title">Success card title</h5> -->
    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
  

    <div class="container my-5" id="degree" >
      <table class="table" id="myTable">
        <caption></caption>
        <thead>
          <tr>
            <th scope="col">Sl.No.</th>
            <th scope="col">Course Name</th>
            <th scope="col">University Name</th>
            <th scope="col">Start Date</th>
            <th scope="col">End Date</th>
          </tr>
        </thead>
        <tbody>
                <?php
                  $sql = "SELECT * FROM `degree`";
                  $result = mysqli_query($conn, $sql);
                  $sno=0;
                  while($row = mysqli_fetch_assoc($result)){
                    $sno=$sno+1; 
                    echo "<tr>
                          <th>".$sno."</th>
                          <td>".$row['courseName']."</td>
                          <td>".$row['universityName']."</td>
                          <td>".$row['startDate']."</td>
                          <td>".$row['endDate']."</td>
                          </tr>";

                  } 
                ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</body>
</html>