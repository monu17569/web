
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="style.css">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    
  <title>Homepage</title>
</head>
<body onload="clicked()">
  
  
    <!-- importing degree.php -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
       $('#myTable').DataTable();
        } );
    </script> -->
          <!-- Navigation menu starts -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark" >
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Home</a>
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
                <li><a class="dropdown-item" href="#degree">Degree</a></li>
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
                <li><a class="dropdown-item" href="#phd">PHD</a></li>
                <li><a class="dropdown-item" href="#mca">MCA</a></li>
                <li><a class="dropdown-item" href="#msc">MSC</a></li>
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
                <li><a class="dropdown-item" href="#indexingatsci">Journal(Indexing in SCI)</a></li>
                <li><a class="dropdown-item" href="#indexingatscopus">Journal (Indexing in SCOPUS)</a></li>
                <li><a class="dropdown-item" href="#referred">Journal Referred</a></li>
                <li><a class="dropdown-item" href="#conference">Conference</a></li>
                <li><a class="dropdown-item" href="#bookchapter">Book Chapter</a></li>
                <li><a class="dropdown-item" href="#books">Books</a></li>
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
                <li><a class="dropdown-item" href="#expertise">Subject Expertise</a></li>
                <li><a class="dropdown-item" href="#experience">Experience</a></li>
                <li><a class="dropdown-item" href="#experience">Teaching Experience</a></li>
                <li><a class="dropdown-item" href="#experience">Adminstrative Experience</a></li>
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
                <li><a class="dropdown-item" href="#awards">Awards/Fellowship/Grants</a></li>
                <li><a class="dropdown-item" href="#workshop">Workshop</a></li>
                <li><a class="dropdown-item" href="#reviewer">Reviewer</a></li>
                <li><a class="dropdown-item" href="#fdp">FDP(Faculty Development Program)</a></li>
                <li><a class="dropdown-item" href="#membership">Membership</a></li>
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
                <li><a class="dropdown-item" href="#fundedprojects">Funded Projects</a></li>
                <li><a class="dropdown-item" href="#mca">MCA Major Projects</a></li>
                <li><a class="dropdown-item" href="#msc">MSC Minor/Major</a></li>
              </ul>
            </li>
          </ul>
      </div>
        <!-- <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Contact
              </a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Contact us</a></li>
              </ul>
            </li>
          </ul>
        </div> -->
      </div>
    </nav>
    <!-- Navigation menu ends -->

<div class="container  bg-light py-4 my-5">
    
        <!-- HOMEPAGE INFO  -->
        <div class="container py-1 my-2">
          <div class="row align-items-md-stretch">
              <div class="col-md-4">
                <div class="p-5 bg-light border rounded-2">
                  <a href="#">
                    <img src="./img/img1.jpg" alt="Image">
                  </a>  
                </div>
              </div>
              <div class="col-md-8">
                <div class="h-100 p-3 text-white bg-dark rounded-3">
                  <h2>Dr. Kuldeep Singh</h2>
                  <p>Assistant Professor <br> Department of Computer Science.<br>University of Delhi</p> 
                </div>
              </div>   
          </div>
        </div>
        <!-- <h4>Below Degree</h4> --> 
        
        <!-- END OF HOMEPAGE INFO -->
    <h2>2. Education  2.1 Degree</h2>
     <?php 
        include('./dynamic/degree.php');
     ?>
     <h4>Below Degree</h4>
    
    <h2>3. Supervision  3.1 PHD  3.2 MCA Major  3.3 MSC Major/Minor</h2>
    <?php
        include('./dynamic/phd.php');
    ?>
    <h4>Below PHD</h4>
    <?php
        include('./dynamic/mca.php');
    ?>
    <h4>Below MCA </h4>
    <?php
        include('./dynamic/msc.php');
    ?>
    <h4>Below MSC</h4>

    <h2>4. Research   </h2>
    <?php
        include('./dynamic/indexingAtSCI.php');
    ?>
    <h4>Below Indexing At SCI</h4>
    <?php
        include('./dynamic/indexingAtSCOPUS.php');
    ?>
    <h4>Below Indexing At SCOPUS</h4>
    <?php
        include('./dynamic/referred.php');
    ?>
    <h4>Below Referred</h4>
    <?php
        include('./dynamic/bookchapter.php');
    ?>
    <h4>Below Book Chapter</h4>
    <?php
        include('./dynamic/conference.php');
    ?>
    <h4>Below COnference</h4>
    <?php
        include('./dynamic/books.php');
    ?>
    <h4>Below Books</h4>


    <h2>5. Teaching  5.1 Subject Expertise  5.2 Experience </h2>
    <?php
        include('./dynamic/expertise.php');
    ?>
    <h4>Below Expertise</h4>
    <?php
        include('./dynamic/experience.php');
    ?>
    <h4>Below Experience</h4>
    <h2>6. Recognition  6.1 Awards  6.2 Workshop 6.3 Reviewer 6.4 FDP  6.5 Membership</h2>
    <?php
        include('./dynamic/awards.php');
    ?>
    <h4>Below awards</h4>
    <?php
        include('./dynamic/workshop.php');
    ?>
    <h4>Below workshop</h4>
    <?php
        include('./dynamic/reviewer.php');
    ?>
    <h4>Below Reviewer</h4>
    <?php
        include('./dynamic/fdp.php');
    ?>
    <h4>Below FDP</h4>
    <?php
        include('./dynamic/membership.php');
    ?>
    <h4>Below membership</h4>

    <h2>7.Projects   7.1 Funded Projects  7.2 MCA Major  7.3 MSC Major/Minor</h2>
    <?php
        include('./dynamic/fundedprojects.php');
    ?>
    <h4>Below Funded Projects</h4>
    <?php
        include('./dynamic/mca.php');
    ?>
    <h4>Below MCA Major</h4>
    <?php
        include('./dynamic/msc.php');
    ?>
    <h4>Below MSC Major/Minor</h4>
    
    <h2>8.Contact</h2>

     <!--For Counting no of visits--> 
     <script>
        function clicked() {
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "https://api.countapi.xyz/hit/drkuldeepsingh.000webhostapp.com/awesomeclick");
            xhr.responseType = "json";
            xhr.onload = function(){
                var visit=this.response.value;
                console.log(visit);
                document.getElementById("visit").innerText = visit
                // $("#visit").text(visit)
            }
            xhr.send();
        }
    </script>

     <div class="card text-center">
              <div class="card-footer">
               <strong> &copy 2022 No. of visits : <span id="visit"></span> </strong>
              </div>
     </div>

</div>


     <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>
</html>


