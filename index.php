
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

<body onload="clicked()" >
  
    <!-- Navigation menu starts -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark" >
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- <div class="collapse navbar-collapse" id="navbarNavDark">
          <ul class="navbar-nav">
              <a class="nav-link toggle" href="#"  role="button"  aria-expanded="false">
                Home
              </a>
          </ul>
        </div> -->

        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Education
              </a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="./dynamic/degree.php">Degree</a></li>
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
                <li><a class="dropdown-item" href="./dynamic/phd.php">PHD</a></li>
                <li><a class="dropdown-item" href="./dynamic/mca.php">MCA</a></li>
                <li><a class="dropdown-item" href="./dynamic/msc.php">MSC</a></li>
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
                <li><a class="dropdown-item" href="./dynamic/indexingAtSCI.php">Journal(Indexing in SCI)</a></li>
                <li><a class="dropdown-item" href="./dynamic/indexingAtSCOPUS.php">Journal (Indexing in SCOPUS)</a></li>
                <li><a class="dropdown-item" href="./dynamic/referred.php">Journal Referred</a></li>
                <li><a class="dropdown-item" href="./dynamic/conference.php">Conference</a></li>
                <li><a class="dropdown-item" href="./dynamic/bookchapter.php">Book Chapter</a></li>
                <li><a class="dropdown-item" href="./dynamic/books.php">Books</a></li>
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
                <li><a class="dropdown-item" href="./dynamic/expertise.php">Subject Expertise</a></li>
                <!-- <li><a class="dropdown-item" href="./dynamic/experience.">Experience</a></li> -->
                <li><a class="dropdown-item" href="./dynamic/experience.php">Teaching Experience</a></li>
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
                <li><a class="dropdown-item" href="./dynamic/awards.php">Awards/Fellowship/Grants</a></li>
                <li><a class="dropdown-item" href="./dynamic/workshop.php">Workshop</a></li>
                <li><a class="dropdown-item" href="./dynamic/reviewer.php">Reviewer</a></li>
                <li><a class="dropdown-item" href="./dynamic/fdp.php">FDP(Faculty Development Program)</a></li>
                <li><a class="dropdown-item" href="./dynamic/membership.php">Membership</a></li>
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
                <li><a class="dropdown-item" href="./dynamic/fundedprojects.php">Funded Projects</a></li>
                <li><a class="dropdown-item" href="./dynamic/mca.php">MCA Major Projects</a></li>
                <li><a class="dropdown-item" href="./dynamic/msc.php">MSC Minor/Major</a></li>
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
              <div class="p-4 col-md-2 bg-dark rounded-3">
                  <!-- <a href="#"> -->
                    <img src="./img/img1.jpg" alt="Image" class="photo">
                  <!-- </a>   -->
              </div>
              <div class="col-md-10 bg-secondary rounded-3">
                <div class="row align-items-md-stretch">
                  <div class="col-md-4 text-white">
                  <h2>Dr. Kuldeep Singh</h2>
                      <p>Assistant Professor <br>
                          Department of Computer Science.
                          <br>University of Delhi
                      </p> 
                  </div>
                </div>
                <!-- Links starts -->
                <div class="row align-items-md-stretch">
                  <div class="col-md-6"></div>
                  <div class="col-md-6">
                  <a href="https://github.com/ksbhan" target="_blank"><img src="./img/github.png" alt="Image" title="Github" class="circle" ></a>
                  <a href="https://scholar.google.com/citations?user=J0tK1vwAAAAJ&hl=en" target="_blank"><img src="./img/google-scholar.png" alt="Image" title="Google Scholar"class="circle"></a>
                  <a href="https://orcid.org/my-orcid?orcid=0000-0001-5289-362X" target="_blank"><img src="./img/orcid.jpeg" alt="Image" title="Orcid"class="circle"></a>
                  <a href="https://www.researchgate.net/profile/Kuldeep-Singh-16" target="_blank"><img src="./img/research-gate.png" alt="Image" title="Research-Gate"class="circle"></a>
                  <a href="https://www.scopus.com/authid/detail.uri?authorId=56449820100" target="_blank"><img src="./img/scopus.jpg" alt="Image" title="Scopus" class="circle"></a>
                  <a href="https://dblp.uni-trier.de/pid/81/4530.html" target="_blank"><img src="./img/dblp.png" alt="Image" title="Dblp"class="circle"></a>
                  <a href="https://publons.com/researcher/1828270/kuldeep-singh/" target="_blank"><img src="./img/publons.png" alt="Image" title="Publons"class="circle"></a>
                  </div>
                </div>
                <!-- End of Links -->
              </div>   
          </div>
        </div>
    <!--  Latest  -->
        <div class="container py-1 my-2 border border-success rounded-3">
          <div class="col-md-12">
            <h2>Latest </h2>
            <marquee direction="left"  scrollamount="3">
              <a href="https://www.google.com" target="_blank" style="text-decoration:none">Internal Marks</a>
            </marquee>
              <marquee  direction="right"  scrollamount="3">
              <a href="" target="_blank" style="text-decoration:none">Phd funded Projects</a>
            </marquee>
              <marquee  direction="left"  scrollamount="3">
              <a href="" target="_blank"  style="text-decoration:none">Minor Projects </a>
            </marquee>
          </div>
        </div>

        <!-- Latest Ends -->
        
        <!-- Biograpgy starts -->
        <div class="container py-1 my-2 border border-success rounded-3">
          <div class="col-md-12">
            <h2>Biography</h2>
              <i> I am working as Assistant Professor at Department of Computer Science, 
                  University of Delhi, Delhi-110007, India. I have completed my Ph.D. 
                  from Indian Institute of Technology (Banaras HinduUniversity) Varanasi. 
                  My research area includes High Utility Itemsets Mining, Pattern Mining, 
                  Social Network Analysis, Text Analysis, Influence Maximization and Data Mining.
              </i>
          </div>
        </div>
        <!-- End of Biography -->

          <div class="container py-1 my-2 border border-success rounded-3">
            <div class="row align-items-md-stretch">
              <!-- Contact me starts -->
              <div class="col-md-4">
                <h2>Contact me</h2>
                <h3>Official Address:</h3>
                <p>Department of Computer Science, First Floor, 
                  Faculty of Mathematical Sciences, Room No . 113, 
                  Opposite Daulat Ram College, University of Delhi, 
                  Delhi, 110007</p>
                <h3>Email id:</h3>
                <a href="mailto:ksingh@cs.du.ac.in" target="_blank" class="mail" style="text-decoration:none"><p>ksingh@cs.du.ac.in</p></a>
              </div>
              <!-- End of Contact me -->

              <div class="col-md-2"></div>

              <div class="col-md-6">
                <h2></h2>

                

                <!--Google map-->
                <div id="map-container-google-1" class="z-depth-1-half map-container" >
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.
                                  0532844070144!2d77.20279981739795!3d28.688052634332706!2m3!1f0!2f0!3f0!3m
                                  2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd928daadb91%3A0x76aa925fc6e58347!2s
                                  Department%20of%20Computer%20Science%2C%20University%20of%20Delhi!5e0!3m2!1
                                  sen!2sin!4v1652797182876!5m2!1sen!2sin" frameborder="0"
                     ></iframe>
                </div>
              <!--End of Google Maps -->
              </div>
            </div>
          </div>
        
        <!-- END OF HOMEPAGE INFO -->
    

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

        <!-- footer -->
     <div class="card text-center">
              <div class="card-footer">
               <strong> &copy <?php echo date("Y");?> No. of visits : <span id="visit"></span> </strong>
              </div>
     </div>
     <!-- footer Ends -->

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


