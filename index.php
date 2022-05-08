
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
<body>
  
    <!-- importing degree.php -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
       $('#myTable').DataTable();
        } );
    </script> -->
          <!-- Navigation menu starts -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Qualification
              </a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="#degree">Degree</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Research
              </a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="#indexingatsci">Journal(Indexing in SCI)</a></li>
                <a class="dropdown-item" href="#indexingatscopus">Journal (Indexing in SCOPUS)</a></li>
                <a class="dropdown-item" href="#referred">Journal Referred</a></li>
                <li><a class="dropdown-item" href="#bookchapter">Book Chapter</a></li>
                <li><a class="dropdown-item" href="#conference">Conference</a></li>
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
              </ul>
            </li>
          </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
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
        </div>
      </div>
    </nav>
    <!-- Navigation menu ends -->


<!-- HOMEPAGE INFO  -->
<div class="container py-4">
  <div class="row align-items-md-stretch">
      <div class="col-md-4">
        <div class="h-100 p-5 bg-light border rounded-6">
          <a href="#">
            <img src="./img/img1.png" alt="Image">
          </a>  
        </div>
      </div>
      <div class="col-md-8">
        <div class="h-100 p-5 text-white bg-dark rounded-3">
          <h2>Teacher name</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> 
          <p>Laudantium, amet suscipit. Cupiditate</p> 
          <p>suscipit animi repellat</p> 
          <p>quia tempora expedita earum<p> 
        </div>
      </div>   
  </div>
</div>

<!-- END OF HOMEPAGE INFO -->

    <h2>2. Qualification  2.1 Degree</h2>
    <?php 
        include('./dynamic/degree.php');
    ?>
     <h4>Below Degree</h4> 
    
    <h2>3. Research   </h2>
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


    <h2>4. Teaching ---- 4.1 Subject Expertise  4.2 Experience </h2>
    <?php
        include('./dynamic/expertise.php');
    ?>
    <h4>Below Expertise</h4>
    <?php
        include('./dynamic/experience.php');
    ?>
    <h4>Below Experience</h4>
    <h2>5. Recognition ---- 5.1 Awards  5.2 Workshop</h2>
    <?php
        include('./dynamic/awards.php');
    ?>
    <h4>Below awards</h4>
    <?php
        include('./dynamic/workshop.php');
    ?>
    <h4>Below workshop</h4>
    
    
    <h2>6.Contact</h2>


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


