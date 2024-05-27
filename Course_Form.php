<?php
  include ("conn.php");
  $Teachers = $conn->query("SELECT * FROM `teachers`");

  $courseID      = "";
  $course_name   = "";
  $teacherID    = "";


  if(isset($_GET["courseID"])) {
    $Courses = $conn->query("SELECT * FROM courses WHERE courseID = ".$_GET["courseID"]." ");
    $result = $Courses->fetch_array();


    $courseID    = $_GET["courseID"];
    $course_name = $result["course_name"];
    $teacherID  = $result["teacherID"];
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
  <h3>ADD COURSE INFORMATION FORM</h3>
  <form class="form-horizontal" action="Course_save.php" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">COURSE  :</label>
      <div class="col-sm-10">
        <input type="hidden" name="courseID" value="<?= $courseID ?>">
        <input type="text" class="form-control" id="course_name" placeholder="COURSE NAME" name="course_name" value="<?= $course_name ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">TEACHER  :</label>
      <div class="col-sm-10">
        <select class="form-select" name="teacherID">
          <?php foreach ($Teachers as $key => $val) { ?>
            <?php if($val['teacherID'] == $teacherID){?>
            <option value="<?= $val['teacherID']?>" selected><?= $val['teacher_name'] ?></option>
            <?php }else{ ?>
            <option value="<?= $val['teacherID']?>"><?= $val['teacher_name']?></option>
            <?php } ?>
          <?php } ?>
          
        </select>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10 bRight">
        <a href="Course_List.php" class="button buttonDelete">BACK</a>
        <button type="submit" class="button buttonAdd">SAVE</button>
      </div>
    </div>
  </form> 
  
  
</div>
  
</body>
</html>


