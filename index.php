
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

  <style type="text/css">
		.circle {
			width: 58px;
			height: 60px;
			/* padding: 8px 8px; */
			border-radius: 50px;
			/* font-size: 15px;
			text-align: center; */
		}

    .photo {
			width: 139px;
			height: 145px;
      border-radius: 70px;
		}
	</style>

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
              </div>   
          </div>
        </div>

        <div class="container py-1 my-2 border border-success">
          <div class="col-md-12">
            <h2>Latest </h2>
            <marquee  direction="left"  scrollamount="3">
              <a href="https://www.google.com" target="_blank" style="text-decoration:none">google text.</a>
            </marquee>
              <marquee  direction="right"  scrollamount="3">
              <a href="" target="_blank" style="text-decoration:none">scrolling text.</a>
            </marquee>
              <marquee  direction="left"  scrollamount="3">
              <a href="" target="_blank"  style="text-decoration:none"> scrolling text.</a>
            </marquee>
          </div>
        </div>
        
        <div class="container py-1 my-2 border border-success">
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

          <div class="container py-1 my-2 border border-success">
            <div class="row align-items-md-stretch">
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

              <div class="col-md-2"></div>

              <div class="col-md-6">
                <h2></h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.
                  0532844070144!2d77.20279981739795!3d28.688052634332706!2m3!1f0!2f0!3f0!3m
                  2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd928daadb91%3A0x76aa925fc6e58347!2s
                  Department%20of%20Computer%20Science%2C%20University%20of%20Delhi!5e0!3m2!1
                  sen!2sin!4v1652797182876!5m2!1sen!2sin" width="500" height="245" style="border:
                  0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
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


