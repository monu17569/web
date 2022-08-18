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
 <link rel="stylesheet" href="../style.css">

 <title></title>
</head>
<body>

<!-- Navigation menu starts -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark" >
        <div class="container-fluid">
        <a class="navbar-brand" href="../index.php">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        

          <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Education
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                  <li><a class="dropdown-item" href="./degree.php">Degree</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <!-- Supervision starts-->
          <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Supervision
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                  <li><a class="dropdown-item" href="./phd.php">PHD</a></li>
                  <li><a class="dropdown-item" href="./mca.php">MCA</a></li>
                  <li><a class="dropdown-item" href="./msc.php">MSC</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <!-- Supervision ends -->
          <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Research
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                  <li><a class="dropdown-item" href="./indexingatsci.php">Journal(Indexing in SCI)</a></li>
                  <li><a class="dropdown-item" href="./indexingatscopus.php">Journal (Indexing in SCOPUS)</a></li>
                  <li><a class="dropdown-item" href="./referred.php">Journal Referred</a></li>
                  <li><a class="dropdown-item" href="./conference.php">Conference</a></li>
                  <li><a class="dropdown-item" href="./bookchapter.php">Book Chapter</a></li>
                  <li><a class="dropdown-item" href="./books.php">Books</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Teaching
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                  <li><a class="dropdown-item" href="./expertise.php">Subject Expertise</a></li>
                  <!-- <li><a class="dropdown-item" href="#">Experience</a></li> -->
                  <li><a class="dropdown-item" href="./experience.php">Teaching Experience</a></li>
                  <li><a class="dropdown-item" href="#">Adminstrative Experience</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Recognition
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                  <li><a class="dropdown-item" href="./awards.php">Awards/Fellowship/Grants</a></li>
                  <li><a class="dropdown-item" href="./workshop.php">Workshop</a></li>
                  <li><a class="dropdown-item" href="./reviewer.php">Reviewer</a></li>
                  <li><a class="dropdown-item" href="#">FDP(Faculty Development Program)</a></li>
                  <li><a class="dropdown-item" href="./membership.php">Membership</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Projects
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                  <li><a class="dropdown-item" href="./fundedprojets.php">Funded Projects</a></li>
                  <li><a class="dropdown-item" href="./mca.php">MCA Major Projects</a></li>
                  <li><a class="dropdown-item" href="./msc.php">MSC Minor/Major</a></li>
                </ul>
              </li>
            </ul>
        </div>
        </div>
</nav>
  <!-- Navigation menu ends -->


<div class="container  bg-light py-5 my-5">
  <div  class="container rounded text-dark text-center content mb-3 my-5"><h2>Faculty Development Programe</h2>
   <div class="container table-responsive  my-5" id="fdp">
     <table class="table" id="myTable">
       <caption></caption>
       <thead>
         <tr>
           <th scope="col">Sl.No.</th>
           <th scope="col">Topic</th>
           <th scope="col">Duration</th>
           <th scope="col">Organization</th>
         </tr>
       </thead>
       <tbody>
               <?php
                 $sql = "SELECT * FROM `fdp`";
                 $result = mysqli_query($conn, $sql);
                 $sno=0;
                 while($row = mysqli_fetch_assoc($result)){
                   $sno=$sno+1; 
                   echo "<tr>
                         <th scope='row'>".$sno."</th>
                         <td>".$row['topic']."</td>
                         <td>".$row['duration']."</td>
                         <td>".$row['organization']."</td>
                         </tr>";

                 } 
               ?>
       </tbody>
     </table>
   </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>