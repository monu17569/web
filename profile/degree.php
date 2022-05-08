
<?php

// $insert = false; 
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
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $courseName = $_POST["coursename"];
  $universityName = $_POST["uname"];
  $startDate = $_POST["sd"];
  $endDate = $_POST["ed"];


  //Sql query to be executed
  // $sql = "INSERT INTO `degree`(`courseName`, `universityName`, `startDate`, `endDate`) VALUES ('$courseName','$universityName','$startDate','$endDate')";
  // $result = mysqli_query($conn, $sql);

  // if($result){
  //   // echo "THe record has been inserted sucessfully";
  //   // $insert = true;
  // }
  // else{
  //   echo "The record was not inserted successfully because of this error ---->". mysqli_error($conn);
  // }
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
          <!-- Edit modal -->
          <!-- Modal -->
          <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="editModalLabel">Edit this Degree</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="./degree.php" method="post">
                <div class="modal-body">
                  
                    <input type="hidden" name="snoEdit" id="snoEdit">

                    <div class="mb-3">
                      <label for="courseName" class="form-label"> <h5>Course Name</h5></label>
                      <input type="text" class="form-control" id="coursename" name="coursenameEdit" required >
                    </div>
          
                    <div class="mb-3">
                      <label for="universityName" class="form-label"> <h5>University Name</h5></label>
                      <input type="text" class="form-control" id="uname" name="unameEdit" required>
                    </div>
          
                    <div class="mb-3">
                      <label for="startDate" class="form-label"><h5>Start Date</h5></label>
                      <input type="date" class="form-control"  id="sd" name="sdEdit" required >
                    </div>
          
                    <div class="mb-3">
                      <label for="endDate" class="form-label"><h5>End Date</h5></label>
                      <input type="date" class="form-control" id="ed" name="edEdit" required>
                    </div> 
                    <button type="submit" class="btn btn-primary">Submit Info</button>
                  
                </div></form>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>


      <!-- Nav bar starts -->
    <div class="alert alert-primary my-2" role="alert">
      <h2>Degree Dashboard</h2>
    </div>
      <!-- Nav bar ends -->
     <!-- for displaying alerts -->
     <!-- <?php 
      if($insert){
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> Your data has been inserted successfully.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
      }
    ?> -->

    <!-- form to edit starts -->
    <!-- <div class="container my-4">
        <h3>Edit your Info</h3>
        <form action="./degree.php" method="post">
          <div class="mb-3">
            <label for="courseName" class="form-label"> <h5>Course Name</h5></label>
            <input type="text" class="form-control" id="coursename" name="coursename" required >
          </div>

          <div class="mb-3">
            <label for="universityName" class="form-label"> <h5>University Name</h5></label>
            <input type="text" class="form-control" id="uname" name="uname" required>
          </div>

          <div class="mb-3">
            <label for="startDate" class="form-label"><h5>Start Date</h5></label>
            <input type="date" class="form-control"  id="sd" name="sd" required >
          </div>

          <div class="mb-3">
            <label for="endDate" class="form-label"><h5>End Date</h5></label>
            <input type="date" class="form-control" id="ed" name="ed" required>
          </div> 
          <button type="submit" class="btn btn-primary">Submit Info</button>
      </form>
    </div> -->
    <!-- Form to edit ends -->

     <div class="container my-5">
     <a href="./newDegree.php"><button type="button" class="btn btn-warning"><h4>Add New</h4></button></a>
     </div>
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
                                <td><button type='button' class='edit btn btn-success' id=".$row['id'].">Update</button></td>
                                <td><button type='button' class='delete btn btn-danger'>Delete</button></td>
                                </tr>";
                          //  echo '<button type="button" class="btn btn-success">Success</button>';

                        } 
                      ?>
              </tbody>
      </table>     
   </div>

   <!-- Optional JavaScript; choose one of the two! -->
  <script>
   edits = document.getElementsByClassName('edit');
   Array.from(edits).forEach((element) =>{
     element.addEventListener("click",(e) =>{
       console.log("edit");
       tr = e.target.parentNode.parentNode;
       courseName = tr.getElementsByTagName("td")[0].innerText;
       universityName = tr.getElementsByTagName("td")[1].innerText;
       startDate = tr.getElementsByTagName("td")[2].innerText;
       endDate = tr.getElementsByTagName("td")[3].innerText;
       console.log(courseName, universityName, startDate, endDate);
       coursenameEdit.value = courseName;
       unameEdit.value = universityName;
       sdEdit.value = startDate;
       edEdit.value = endDate;
       snoEdit.value = e.target.id;
       console.log(e.target.id);
       $('#editModal').modal('toggle');
     })
   })
 </script> 

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