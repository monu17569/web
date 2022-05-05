
<!-- insert for degree -->
<!-- INSERT INTO `degree` (`id`, `courseName`, `universityName`, `startDate`, `endDate`) VALUES (NULL, 'Bachelor of Commerce (B.Com)', 'Punjab University, Chandigarh', '2003-07-01', '2005-08-01'); -->
<!DOCTYPE html>
<html lang="en">
<head>
  <h1>Home Page</h1>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1">

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
    <?php
        include('./dynamic/degree.php');
    ?>
    <h2>Below Degree</h2>
    <?php
        include('./dynamic/experience.php');
    ?>
    <h2>Below Experience</h2>
    <?php
        include('./dynamic/expertise.php');
    ?>
    
    <h2>Footer</h2>
</body>
</html>


