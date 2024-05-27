<?php
include ("conn.php");

$Faculties = $conn->query("SELECT * FROM `Faculties`");
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
  <h3>FACULTY LIST</h3>
    <div class="bRight">
      <a href="Faculty_Form.php" class="button buttonAdd"  >ADD FACULTY INFORMATION</a>
    </div>

  
  <div class="table-responsive">          
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>FACULTY</th>
          <th>OPTION</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($Faculties as $key => $value) { ?>
        <tr>
            <td><?=  $key+1 ?></td>
            <td><?= $value['Faculty_name']?></td>
            <td>
              <a href="Faculty_Form.php?FacultyID=<?= $value['FacultyID']?>" class="button">EDIT</a>
              <a href="Faculty_delete.php?FacultyID=<?= $value['FacultyID']?>" class="button buttonDelete">DELETE</a>
            </td>
        </tr>
        <?php } ?>
        
      </tbody>
    </table>
  </div>
</div>
  
</body>
</html>


