<?php
include ("conn.php");

$Teachers = $conn->query("SELECT * FROM `teachers` ");
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
  <h3>TEACHER LIST</h3>
    <div class="bRight">
      <a href="Teacher_Form.php" class="button buttonAdd"  >ADD TEACHER INFORMATION</a>
    </div>

  
  <div class="table-responsive">          
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>NAME</th>
          <th>POSITION</th>
          <th>OPTION</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($Teachers as $key => $value) { ?>
        <tr>
            <td><?=  $key+1 ?></td>
            <td><?= $value['teacher_name']?></td>
            <td><?= $value['teacher_position']?></td>
            <td>
              <a href="Teacher_Form.php?teacherID=<?= $value['teacherID']?>" class="button">EDIT</a>
              <a href="Teacher_delete.php?teacherID=<?= $value['teacherID']?>" class="button buttonDelete">DELETED</a>
            </td>
        </tr>
        <?php } ?>
        
      </tbody>
    </table>
  </div>
</div>
  
</body>
</html>


