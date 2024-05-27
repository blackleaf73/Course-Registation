<?php
  include ("conn.php");

  $teacherID = "";
  $teacher_name = "";
  $teacher_position = "";


  if(isset($_GET["teacherID"])) {
    $teachers = $conn->query("SELECT * FROM teachers WHERE teacherID = ".$_GET["teacherID"]." ");
    $result = $teachers->fetch_array();


    $teacherID        = $_GET["teacherID"];
    $teacher_name     = $result["teacher_name"];
    $teacher_position = $result["teacher_position"];
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
  <h3>ADD TEACHER INFORMATION FORM</h3>
  <form class="form-horizontal" action="Teacher_save.php" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">NAME  :</label>
      <div class="col-sm-10">
        <input type="hidden" name="teacherID" value="<?= $teacherID ?>">
        <input type="text" class="form-control" id="teacher_name" name="teacher_name" value="<?= $teacher_name ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">POSITION  :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="teacher_position" name="teacher_position" value="<?= $teacher_position ?>">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10 bRight">
        <a href="Teacher_Lists.php" class="button buttonDelete">BACK</a>
        <button type="submit" class="button buttonAdd">SAVED</button>
      </div>
    </div>
  </form> 
  
  
</div>
  
</body>
</html>


