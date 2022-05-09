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
        <!-- Nav bar starts -->
        <div class="alert alert-primary my-2" role="alert">
          <h2>Subject Expertise Dashboard</h2>
        </div>
          <!-- Nav bar ends -->

        <div class="container my-5">
        <a href="./newExpertise.php"><button type="button" class="btn btn-warning"><h4>Add New</h4></button></a>
        </div>

   <div class="container my-5" id="expertise">
     <table class="table" id="myTable">
       <caption></caption>
       <thead>
         <tr>
           <th scope="col">Sl.No.</th>
           <th scope="col">Subject</th>
           <th scope="col">Percentage</th>
         </tr>
       </thead>
       <tbody>
               <?php
                 $sql = "SELECT * FROM `subjectExpertise`";
                 $result = mysqli_query($conn, $sql);
                 $sno=0;
                 while($row = mysqli_fetch_assoc($result)){
                   $sno=$sno+1; 
                   echo "<tr>
                         <th scope='row'>".$sno."</th>
                         <td>".$row['subj']."</td>
                         <td>".$row['perc']."</td>
                         <td><button type='button' class='btn btn-success'>Update</button></td>
                         <td><button type='button' class='delete btn btn-danger'>Delete</button></td>
                         </tr>";

                 } 
               ?>
       </tbody>
     </table>
   </div>
</body>
</html>