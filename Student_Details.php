<?php
include ("conn.php");

$Enrolls = $conn->query("SELECT * FROM `enrolls` INNER JOIN students ON students.studentID = enrolls.studentID INNER JOIN courses ON courses.courseID = enrolls.courseID WHERE students.studentID = '".$_GET["studentID"]."'");
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
  <h3>REGISTRATION enroll_Lists</h3>
    <div class="bRight">
      <a href="Student_Lists.php" class="button buttonAdd"  >BACK</a>
    </div><br>

  
  <div class="table-responsive">          
    <table class="table">
      <thead>
        <tr align="center">
          <td>#</td>
          <td>COURSE</td>
          <td>CREDIT</td>
          <td>SEMESTER</td>
          <td>YEAR</td>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($Enrolls as $key => $value) { ?>
        <tr>
            <td align="center"><?=  $key+1 ?></td>
            <td align="center"><?= $value['course_name']?></td>
            <td align="center"><?= $value['credit']?></td>
            <td align="center"><?= $value['semester']?></td>
            <td align="center"><?= $value['year']?></td>
        </tr>
        <?php } ?>
        
      </tbody>
    </table>
  </div>
</div>
  
</body>
</html>


