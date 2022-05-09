<?php 
$update = false;
$delete = false;
//connect to database
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
    if(isset($_GET['delete'])){
      $id = $_GET['delete'];
      $delete = true;
      $sql = "DELETE FROM `indexingatsci` WHERE `id` = $id";
      $result = mysqli_query($conn, $sql);
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
      if (isset( $_POST['idEdit'])){
        // Update the record
      $id = $_POST['idEdit'];
      $description = $_POST["descriptionEdit"];
      $impactfactor = $_POST["impactfactorEdit"];

    // Sql query to be executed
      $sql = "UPDATE `indexingatsci` SET `Disc` = '$description' , `impactfactor` = '$impactfactor' WHERE `indexingatsci`.`id` = $id";
      $result = mysqli_query($conn, $sql);
      if($result){
        $update = true;
      }
      else{
          echo "We could not update the record successfully";
      }
      }}

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

      <!-- Edit modal -->
      <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="./sci.php" method="post">
                  <div class="modal-body">
                  
                    <input type="hidden" name="idEdit" id="idEdit">

                    <div class="mb-3">
                      <label for="description" class="form-label"> <h5>Description</h5></label>
                      <input type="text" class="form-control" id="descriptionEdit" name="descriptionEdit" required >
                    </div>

                    <div class="mb-3">
                      <label for="impactfactor" class="form-label"> <h5>Impact Factor</h5></label>
                      <input type="text" class="form-control" id="impactfactorEdit" name="impactfactorEdit" required>
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
      <h2>SCI Dashboard</h2>
    </div></a>
      <!-- Nav bar ends -->

      <!-- for displaying alerts -->
      <?php if($delete){
            echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong>Warning!</strong> Your data has been deleted successfully.";
            echo "<a href='./sci.php'>";
            echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div></a>"; 
          } ?>
        <?php if($update){
            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>Success!</strong> Your data has been updated successfully.";
            echo "<a href='./sci.php'>";
            echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div></a>";
          } ?>


    <div class="container my-5">
     <a href="./newSci.php"><button type="button" class="btn btn-warning"><h4>Add New</h4></button></a>
    </div>

   <div class="container my-5" id="indexingatsci">
     <table class="table" id="myTable">
       <caption></caption>
       <thead>
         <tr>
           <th scope="col">Sl.No.</th>
           <th scope="col">Description</th>
           <th scope="col">Impact Factor</th>
         </tr>
       </thead>
       <tbody>
               <?php
                 $sql = "SELECT * FROM `indexingatsci`";
                 $result = mysqli_query($conn, $sql);
                 $sno=0;
                 while($row = mysqli_fetch_assoc($result)){
                   $sno=$sno+1; 
                   echo "<tr>
                         <th scope='row'>".$sno."</th>
                         <td>".$row['Disc']."</td>
                         <td>".$row['impactfactor']."</td>
                         <td><button type='button' class='edit btn btn-success' id=".$row['id'].">Update</button></td>
                         <td><button type='button' class='delete btn btn-danger' id=d".$row['id'].">Delete</button></td>
                         </tr>";
                 } 
               ?>
       </tbody>
     </table>
   </div>

   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>

   <!-- Optional JavaScript; choose one of the two! -->
  <script>
       edits = document.getElementsByClassName('edit');
       Array.from(edits).forEach((element) =>{
       element.addEventListener("click",(e) =>{
       console.log("edit");
       tr = e.target.parentNode.parentNode;
       description = tr.getElementsByTagName("td")[0].innerText;
       impactfactor = tr.getElementsByTagName("td")[1].innerText;
       console.log(description, impactfactor);
       descriptionEdit.value = description;
       impactfactorEdit.value = impactfactor;
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
          window.location = `./sci.php?delete=${id}`;
        }
        else {
          console.log("no");
        }
      })
    })
 </script> 

     <!--  Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>