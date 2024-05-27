<?php
  include ("conn.php");

  $FacultyID = "";
  $Faculty_name = "";


  if(isset($_GET["FacultyID"])) {
    $Faculties = $conn->query("SELECT * FROM Faculties WHERE FacultyID = ".$_GET["FacultyID"]." ");
    $result = $Faculties->fetch_array();


    $FacultyID = $_GET["FacultyID"];
    $Faculty_name = $result["Faculty_name"];
  }

?>

<!DOCTYPE html>
<html>
<head>
<title>COURSE REGISTRATION</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">
<link href='https://fonts.googleapis.com/css?family=Kanit' rel='stylesheet'>
</head>
<body>

<?php include("navbar.php")?>



<div class="container">
  <h3>ADD FACULTY INFORMATION FORM</h3>
  <form class="form-horizontal" action="Faculty_save.php" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">FACULTY  :</label>
      <div class="col-sm-10">
        <input type="hidden" name="FacultyID" value="<?= $FacultyID ?>">
        <input type="text" class="form-control" id="Faculty_name" placeholder="FACULTY NAME" name="Faculty_name" value="<?= $Faculty_name ?>">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10 bRight">
        <a href="Faculties_List.php" class="button buttonDelete">BACK</a>
        <button type="submit" class="button buttonAdd">SAVE</button>
      </div>
    </div>
  </form> 
  
  
</div>
  
</body>
</html>


