<?php 
session_start();
if(!isset($_SESSION['adminname'])){
  header("Location: ./admin.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Dashboard</title>
  </head>
  <body>
    <!-- link to go to admin page -->
      <div class="alert alert-primary my-2" role="alert">
        <h2>Dashboard
        <a href="./logout.php"><button type="button" 
        class="btn btn-danger float-right"><h4>LOGOUT</h4></button></a>
        </h2> 
      </div>

    <div class="container">
        <div class="row my-5">
          <div class="col-lg">
            <a href="./profile/degree.php" style="text-decoration: none;">
              <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                <div class="card-header"><h4>Degree</h4></div> 
              </div>
            </a>
          </div>
          <div class="col-lg">
              <a href="./profile/sci.php" style="text-decoration: none;">
                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                  <div class="card-header"><h4>SCI</h4></div> 
                </div>
              </a>
          </div>
          <div class="col-lg">
          <a href="./profile/scopus.php" style="text-decoration: none;">
            <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                
                  <div class="card-header"><h4>SCOPUS</h4></div>
                
            </div></a>            
          </div>
        </div>

        <div class="row my-5">
          <div class="col-lg"><a href="./profile/referred.php" style="text-decoration: none;">
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                
                  <div class="card-header"><h4>Referred</h4></div>
                
            </div></a>
          </div>
          <div class="col-lg"><a href="./profile/bookchapter.php" style="text-decoration: none;">
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                
                  <div class="card-header"><h4>Book Chapter</h4></div>
                
            </div></a>
          </div>
          <div class="col-lg"><a href="./profile/conference.php" style="text-decoration: none;">
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            
              <div class="card-header"><h4>Conference</h4></div>
            </div></a>
          </div>
        </div> 
        <div class="row my-5">
          <div class="col-lg"><a href="./profile/expertise.php" style="text-decoration: none;">
            <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
              
                <div class="card-header"><h4>Expertise</h4></div>
              
            </div></a>
          </div>
          <div class="col-lg"><a href="./profile/experience.php" style="text-decoration: none;">
            <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                
                  <div class="card-header"><h4>Experience</h4></div>
               
            </div> </a>
          </div>
          <div class="col-lg"><a href="./profile/awards.php" style="text-decoration: none;">
            <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                
                  <div class="card-header"><h4><h4>Awards</h4></h4></div>
                
            </div></a>
          </div>
        </div>
      <div class="row my-5">
        <div class="col-lg"><a href="./profile/workshop.php" style="text-decoration: none;">
          <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                
                  <div class="card-header"><h4>Workshop</h4></div>
              
          </div></a>
        </div>
        <div class="col-lg"><a href="./profile/reviewer.php" style="text-decoration: none;">
          <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                
                  <div class="card-header"><h4>Reviewer</h4></div>
              
          </div></a>
        </div>
        <div class="col-lg"><a href="./profile/fdp.php" style="text-decoration: none;">
          <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                
                  <div class="card-header"><h4>FDP</h4></div>
              
          </div></a>
        </div>
      </div>
      
      <div class="row my-5">
        <div class="col-lg"><a href="./profile/books.php" style="text-decoration: none;">
          <div class="card text-white bg-info mb-3" style="max-width: 18rem;">     
                  <div class="card-header"><h4>Books</h4></div>   
          </div></a>
        </div>
        <div class="col-lg"><a href="./profile/membership.php" style="text-decoration: none;">
          <div class="card text-white bg-info mb-3" style="max-width: 18rem;">    
                  <div class="card-header"><h4>Membership</h4></div>    
          </div></a>
        </div>
      </div>
      
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>