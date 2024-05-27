<?php
include ("conn.php");

$Majors = $conn->query("SELECT * FROM `majors` INNER JOIN Faculties ON Faculties.FacultyID = majors.FacultyID");
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
  <h3>MAJOR LIST</h3>
    <div class="bRight">
      <a href="Major_Form.php" class="button buttonAdd"  >ADD MAJOR INFORMATION</a>
    </div>

  
  <div class="table-responsive">          
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>MAJOR</th>
          <th>FACULTY</th>
          <th>OPTION</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($Majors as $key => $value) { ?>
        <tr>
            <td><?=  $key+1 ?></td>
            <td><?= $value['major_name']?></td>
            <td><?= $value['Faculty_name']?></td>
            <td>
              <a href="Major_Form.php?majorID=<?= $value['majorID']?>" class="button">EDIT</a>
              <a href="Major_delete.php?majorID=<?= $value['majorID']?>" class="button buttonDelete">DELETE</a>
            </td>
        </tr>
        <?php } ?>
        
      </tbody>
    </table>
  </div>
</div>
  
</body>
</html>


