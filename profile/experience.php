<?php 
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
              <h2>Teaching Experience Dashboard</h2>
            </div>
              <!-- Nav bar ends -->

            <div class="container my-5">
            <a href="./newExperience.php"><button type="button" class="btn btn-warning"><h4>Add New</h4></button></a>
            </div>

        <div class="container my-5" id="experience">
          <table class="table" id="myTable">
            <caption></caption>
            <thead>
              <tr>
                <th scope="col">Sl.No.</th>
                <th scope="col">University Name</th>
                <th scope="col">Designation</th>
                <th scope="col">Description</th>
                <th scope="col">Start Date</th>
                <th scope="col">End Date</th>
              </tr>
            </thead>
            <tbody>
                    <?php
                      $sql = "SELECT * FROM `experience`";
                      $result = mysqli_query($conn, $sql);
                      $sno=0;
                      while($row = mysqli_fetch_assoc($result)){ ?>
                       <?php $sno = $sno+1; ?>
                        <tr>
                              <td> <?php echo $sno; ?> </td>
                              <td> <?php echo $row['universityName']; ?> </td>
                              <td> <?php echo $row['designation']; ?> </td>
                              <td> <?php 
                                      $list_items = explode("\n", $row['Disc']);
                                        echo '<ul>';
                                                    foreach($list_items as $list_item)
                                                    if(!empty($list_items)){
                                                        echo '<li>' . $list_item . '</li>';
                                                    }
                                        echo '</ul>';
                                    ?> </td>
                              <td> <?php echo $row['startDate']; ?> </td>
                              <td> <?php echo $row['endDate']; ?> </td>
                              <td><?php echo "<button type='button' class='btn btn-success'>Update</button>" ?></td>
                              <td><?php echo "<button type='button' class='delete btn btn-danger'>Delete</button>" ?></td>
                         
                        </tr> 
                    <?php }?>
            </tbody>
          </table>
        </div>
      </body>
</html>