
<?php


// $insert = false;
$update = false;
$delete = false;
// Connect to the Database
$servername = "localhost";
 $username = "id18903059_useradmin";
 $password = "=M(qUHEVt\7VMiU{";
 $database = "id18903059_poftfolio";

//Create a conncetion
$conn = mysqli_connect($servername,$username,$password,$database);

//Die if connection was not successful
if (!$conn){ 
  die("Sorry we failed to connect :" .mysqli_connect_error());
}

if(isset($_GET['delete'])){
  $id = $_GET['delete'];
  $delete = true;
  $sql = "DELETE FROM `degree` WHERE `id` = $id";
  $result = mysqli_query($conn, $sql);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset( $_POST['idEdit'])){
    // Update the record
      $id = $_POST['idEdit'];
      $courseName = $_POST["coursenameEdit"];
      $universityName = $_POST["unameEdit"];
      $startDate = $_POST["sdEdit"];
      $endDate = $_POST["edEdit"];


      // Sql query to be executed
        $sql = "UPDATE `degree` SET `courseName` = '$courseName' , `universityName` = '$universityName',`startDate` = '$startDate' ,`endDate` = '$endDate' WHERE `degree`.`id` = $id";
        $result = mysqli_query($conn, $sql);
        if($result){
          $update = true;
        }
        else{
            echo "We could not update the record successfully";
        }
      }

      // else{
      //       $courseName = $_POST["courseName"];
      //       $universityName = $_POST["universityName"];
      //       $startDate = $_POST["startDate"];
      //       $endDate = $_POST["endDate"];
      //       // Sql query to be executed
      //       $sql = "INSERT INTO degree (courseName, universityName, startDate, endDate) VALUES ('$courseName','$universityName','$startDate','$endDate')";
      //       $result = mysqli_query($conn, $sql);

      //       if($result){ 
      //           $insert = true;
      //       }
      //       else{
      //           echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
      //       } 
      //     }
        }




   //Sql query to be executed
  // $sql = "INSERT INTO `degree`(`courseName`, `universityName`, `startDate`, `endDate`) VALUES ('$courseName','$universityName','$startDate','$endDate')";
  // $result = mysqli_query($conn, $sql);

  // if($result){
  //   // echo "THe record has been inserted sucessfully";
  //   // $insert = true;
  // }
  // else{
  //   echo "The record was not inserted successfully because of this error ". mysqli_error($conn);
  // } -->

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
          <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="./degree.php" method="post">
                  <div class="modal-body">
                  
                    <input type="hidden" name="idEdit" id="idEdit">

                    <div class="form-group"> 
                      <label for="courseName" > <h5>Course Name</h5></label>
                      <input type="text" class="form-control" id="coursenameEdit" name="coursenameEdit" required >
                    </div>
          
                    <div class="form-group">
                      <label for="universityName" > <h5>University Name</h5></label>
                      <input type="text" class="form-control" id="unameEdit" name="unameEdit" required>
                    </div>
          
                    <div class="form-group">
                      <label for="startDate" ><h5>Start Date</h5></label>
                      <input type="date" class="form-control"  id="sdEdit" name="sdEdit" required >
                    </div>
          
                    <div class="form-group">
                      <label for="endDate" ><h5>End Date</h5></label>
                      <input type="date" class="form-control" id="edEdit" name="edEdit" required>
                    </div>                   
                  </div>
                  <div class="modal-footer d-block mr-auto">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                </form>
              </div>
            </div>
          </div>


      <!-- Nav bar starts -->
    <a href="../dashboard.php" style="text-decoration: none;">
      <div class="alert alert-primary my-2" role="alert">
          <h2>Degree Dashboard</h2>
      </div>
    </a>
      <!-- Nav bar ends -->
     <!-- for displaying alerts -->
      <!-- <?php 
          if($insert){
            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>Success!</strong> Your data has been inserted successfully.";
            echo "<a href='./degree.php'>";
            echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div></a>";
          } ?> -->
      <?php if($delete){
            echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong>Warning!</strong> Your data has been deleted successfully.";
            echo "<a href='./degree.php'>";
            echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div></a>"; 
          } ?>
        <?php if($update){
            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>Success!</strong> Your data has been updated successfully.";
            echo "<a href='./degree.php'>";
            echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div></a>";
          } ?>
      

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
                <th scope="col">University monu</th>
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
                                <td><button type='button' class='delete btn btn-danger' id=d".$row['id'].">Delete</button></td>
                                </tr>";
                                //  echo '<button type="button" class="btn btn-success">Success</button>';
                        } 
                      ?>
              </tbody>
      </table>     
   </div>

   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <!-- <script>
    $(document).ready(function () {
      $('#myTable').DataTable();

    });
  </script> -->

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
       idEdit.value = e.target.id;
       console.log(e.target.id);
       $('#editModal').modal('toggle');
     })
   })

   deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        id = e.target.id.substr(1);

        if (confirm("Are you sure you want to delete !")) {
          console.log("yes");
          window.location = `./degree.php?delete=${id}`;
          // TODO: Create a form and use post request to submit a form
        }
        else {
          console.log("no");
        }
      })
    })
 </script> 

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   

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