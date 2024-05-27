<?php
  include ("conn.php");
  $Students = $conn->query("SELECT * FROM `students` ");
  $Courses = $conn->query("SELECT * FROM `courses`");

  $enrollID       = "";
  $semester       = "";
  $year           = "";
  $credit         = "";
  $courseID       = "";
  $studentID      = "";


  if(isset($_GET["enrollID"])) {
    $enrolls = $conn->query("SELECT * FROM enrolls WHERE enrollID = ".$_GET["enrollID"]." ");
    $result = $enrolls->fetch_array();


    $enrollID         = $_GET["enrollID"];
    $semester         = $result["semester"];
    $year             = $result["year"];
    $credit           = $result["credit"];
    $courseID         = $result["courseID"];
    $studentID        = $result["studentID"];
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
  <form class="form-horizontal" action="Enroll_save.php" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-3" for="email">NAME  :</label>
      <div class="col-sm-9">
        <input type="hidden" name="enrollID" value="<?= $enrollID ?>">
        <select class="form-select" name="studentID">
          <?php foreach ($Students as $key => $val) { ?>
            <?php if($val['studentID'] == $studentID){?>
            <option value="<?= $val['studentID']?>" selected><?= $val['student_name'] ?></option>
            <?php }else{ ?>
            <option value="<?= $val['studentID']?>"><?= $val['student_name']?></option>
            <?php } ?>
          <?php } ?>
          
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="email">COURSE DETAIL  :</label>
      <div class="col-sm-9">
       <select class="form-select" name="courseID">
          <?php foreach ($Courses as $key => $val) { ?>
            <?php if($val['courseID'] == $courseID){?>
            <option value="<?= $val['courseID']?>" selected><?= $val['course_name'] ?></option>
            <?php }else{ ?>
            <option value="<?= $val['courseID']?>"><?= $val['course_name']?></option>
            <?php } ?>
          <?php } ?>
          
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="email">CREDIT  :</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="credit"  name="credit" value="<?= $credit ?>" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="email">SEMESTER  :</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="semester"  name="semester" value="<?= $semester ?>" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="email">YEAR  :</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="year"  name="year" value="<?= $year ?>" required>
      </div>
    </div>
   
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10 bRight">
        <a href="enroll_Lists.php" class="button buttonDelete">BACK</a>
        <button type="submit" class="button buttonAdd">SAVE</button>
      </div>
    </div>
  </form> 
  
  
</div>
  
</body>
</html>


