<?php 
$update = false;
$delete = false;
// Connect to the Database 
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
  $sql = "DELETE FROM `workshop` WHERE `id` = $id";
  $result = mysqli_query($conn, $sql);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  if (isset( $_POST['idEdit'])){
    // Update the record
      $id = $_POST['idEdit'];
      $organization = $_POST["organizationEdit"];
      $topic = $_POST["topicEdit"];
      $startDate = $_POST["sdEdit"];
      $endDate = $_POST["edEdit"];


    // Sql query to be executed
      $sql = "UPDATE `workshop` SET `organization` = '$organization' , `topic` = '$topic',`startDate` = '$startDate' ,`endDate` = '$endDate' WHERE `workshop`.`id` = $id";
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
                <form action="./workshop.php" method="post">
                  <div class="modal-body">
                  
                    <input type="hidden" name="idEdit" id="idEdit">

                    <div class="mb-3">
                      <label for="organization" class="form-label"> <h5>Organization</h5></label>
                      <input type="text" class="form-control" id="organizationEdit" name="organizationEdit" required >
                    </div>

                    <div class="mb-3">
                      <label for="topic" class="form-label"> <h5>Topic</h5></label>
                      <input type="text" class="form-control" id="topicEdit" name="topicEdit" required>
                    </div>
          
                    <div class="mb-3">
                      <label for="startDate" ><h5>Start Date</h5></label>
                      <input type="date" class="form-control"  id="sdEdit" name="sdEdit" required >
                    </div>
          
                    <div class="mb-3">
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
          <h2>Workshop Dashboard</h2>
        </div></a>
          <!-- Nav bar ends -->

        <!-- for displaying alerts -->
        <?php if($delete){
            echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong>Warning!</strong> Your data has been deleted successfully.";
            echo "<a href='./workshop.php'>";
            echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div></a>"; 
          } ?>
        <?php if($update){
            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>Success!</strong> Your data has been updated successfully.";
            echo "<a href='./workshop.php'>";
            echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div></a>";
          } ?>
      

        <div class="container my-5">
        <a href="./newWorkshop.php"><button type="button" class="btn btn-warning"><h4>Add New</h4></button></a>
        </div>




   <div class="container my-5" id="workshop">
     <table class="table" id="myTable">
       <caption></caption>
       <thead>
         <tr>
           <th scope="col">Sl.No.</th>
           <th scope="col">Organization</th>
           <th scope="col">Topic</th>
           <th scope="col">Start Date</th>
           <th scope="col">End Date</th>
         </tr>
       </thead>
       <tbody>
               <?php
                 $sql = "SELECT * FROM `workshop`";
                 $result = mysqli_query($conn, $sql);
                 $sno=0;
                 while($row = mysqli_fetch_assoc($result)){
                   $sno=$sno+1; 
                   echo "<tr>
                         <th scope='row'>".$sno."</th>
                         <td>".$row['organization']."</td>
                         <td>".$row['topic']."</td>
                         <td>".$row['startDate']."</td>
                         <td>".$row['endDate']."</td>
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
       organization = tr.getElementsByTagName("td")[0].innerText;
       topic = tr.getElementsByTagName("td")[1].innerText;
       startDate = tr.getElementsByTagName("td")[2].innerText;
       endDate = tr.getElementsByTagName("td")[3].innerText;
       console.log(organization, topic, startDate, endDate);
       organizationEdit.value = organization;
       topicEdit.value = topic;
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
          window.location = `./workshop.php?delete=${id}`;
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