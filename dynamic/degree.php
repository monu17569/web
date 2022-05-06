
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
                      //echo "var_dump($row);
                    // echo $sno. "CourseName".$row['courseName']." UniversityName". $row['universityName']."StartDate".$row['startDate']."EndDate".$row['endDate'];
                    // echo "<br>";
                    echo "<tr>
                          <th scope='row'>".$sno."</th>
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
</body>
</html>