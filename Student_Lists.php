<?php
include ("conn.php");

$Students = $conn->query("SELECT * FROM `students` INNER JOIN teachers ON teachers.teacherID = students.teacherID");
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
  <h3>STUDENT LIST</h3>
    <div class="bRight">
      <a href="Student_Form.php" class="button buttonAdd"  >ADD STUDENT INFORMATION</a>
    </div>

  
  <div class="table-responsive">          
    <table class="table">
      <thead>
        <tr align="center">
          <td>#</td>
          <td>NAME</td>
          <td>ADDRESS</td>
          <td>TEL.</td>
          <td>ADVISOR</td>
          <td>OPTION</td>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($Students as $key => $value) { ?>
        <tr>
            <td><?=  $key+1 ?></td>
            <td><?= $value['student_name']?></td>
            <td><?= $value['student_address']?></td>
            <td><?= $value['student_tel']?></td>
            <td><?= $value['teacher_name']?></td>
            <td>
              <a href="Student_Details.php?studentID=<?= $value['studentID']?>" class="button">REGISTERED DETAIL</a>
              <a href="Student_Form.php?studentID=<?= $value['studentID']?>" class="button">EDIT</a>
              <a href="Student_delete.php?studentID=<?= $value['studentID']?>" class="button buttonDelete">DELETE</a>
            </td>
        </tr>
        <?php } ?>
        
      </tbody>
    </table>
  </div>
</div>
  
</body>
</html>


