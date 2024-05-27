<?php
include ("conn.php");

$Enrolls = $conn->query("SELECT * FROM `enrolls` INNER JOIN students ON students.studentID = enrolls.studentID INNER JOIN courses ON courses.courseID = enrolls.courseID");
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
  <h3>REGISTERED LIST</h3>
    <div class="bRight">
      <a href="Enroll_Form.php" class="button buttonAdd"  >ADD REGISTER INFORMATION</a>
    </div><br>

  
  <div class="table-responsive">          
    <table class="table">
      <thead>
        <tr align="center">
          <td>#</td>
          <td>NAME</td>
          <td>COURSE</td>
          <td>CREDIT</td>
          <td>SEMESTER</td>
          <td>YEAR</td>
          <td>OPTION</td>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($Enrolls as $key => $value) { ?>
        <tr>
            <td><?=  $key+1 ?></td>
            <td><?= $value['student_name']?></td>
            <td><?= $value['course_name']?></td>
            <td align="center"><?= $value['credit']?></td>
            <td align="center"><?= $value['semester']?></td>
            <td align="center"><?= $value['year']?></td>
            <td align="center">
              <a href="Enroll_Form.php?enrollID=<?= $value['enrollID']?>" class="button">EDIT</a>
              <a href="Enroll_delete.php?enrollID=<?= $value['enrollID']?>" class="button buttonDelete">DELETE</a>
            </td>
        </tr>
        <?php } ?>
        
      </tbody>
    </table>
  </div>
</div>
  
</body>
</html>


