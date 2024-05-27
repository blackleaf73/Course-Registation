<?php
  include ("conn.php");
  $Teachers = $conn->query("SELECT * FROM `teachers` ");

  $studentID      = "";
  $student_name   = "";
  $student_tel    = "";
  $student_address    = "";
  $teacherID    = "";


  if(isset($_GET["studentID"])) {
    $Students = $conn->query("SELECT * FROM students WHERE studentID = ".$_GET["studentID"]." ");
    $result = $Students->fetch_array();


    $studentID        = $_GET["studentID"];
    $student_name     = $result["student_name"];
    $student_tel      = $result["student_tel"];
    $student_address  = $result["student_address"];
    $teacherID        = $result["teacherID"];
  }

?>

<!DOCTYPE html>
<html>
<head>
<title>Academic Data Collection</title>
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
  <h3>ADD STUDENT INFORMATION FORM</h3>
  <form class="form-horizontal" action="Student_save.php" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-3" for="email">NAME  :</label>
      <div class="col-sm-9">
        <input type="hidden" name="studentID" value="<?= $studentID ?>">
        <input type="text" class="form-control" id="student_name" name="student_name" value="<?= $student_name ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="email">ADDRESS  :</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="student_address"  name="student_address" value="<?= $student_address ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="email">TEL.  :</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="student_tel"  name="student_tel" value="<?= $student_tel ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="email">ADVISOR  :</label>
      <div class="col-sm-9">
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
        <a href="Student_Lists.php" class="button buttonDelete">BACK</a>
        <button type="submit" class="button buttonAdd">SAVE</button>
      </div>
    </div>
  </form> 
  
  
</div>
  
</body>
</html>


