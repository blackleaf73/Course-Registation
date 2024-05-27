<?php
  include ("conn.php");
  $Faculties = $conn->query("SELECT * FROM `Faculties`");

  $majorID      = "";
  $major_name   = "";
  $FacultyID    = "";


  if(isset($_GET["majorID"])) {
    $Majors = $conn->query("SELECT * FROM majors WHERE majorID = ".$_GET["majorID"]." ");
    $result = $Majors->fetch_array();


    $majorID    = $_GET["majorID"];
    $major_name = $result["major_name"];
    $FacultyID  = $result["FacultyID"];
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
  <h3>ADD MAJOR INFORMATION FORM</h3>
  <form class="form-horizontal" action="Major_save.php" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">MAJOR  :</label>
      <div class="col-sm-10">
        <input type="hidden" name="majorID" value="<?= $majorID ?>">
        <input type="text" class="form-control" id="major_name" placeholder="MAJOR NAME" name="major_name" value="<?= $major_name ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">FACULTY  :</label>
      <div class="col-sm-10">
        <select class="form-select" name="FacultyID">
          <?php foreach ($Faculties as $key => $val) { ?>
            <?php if($val['FacultyID'] == $FacultyID){?>
            <option value="<?= $val['FacultyID']?>" selected><?= $val['Faculty_name'] ?></option>
            <?php }else{ ?>
            <option value="<?= $val['FacultyID']?>"><?= $val['Faculty_name']?></option>
            <?php } ?>
          <?php } ?>
          
        </select>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10 bRight">
        <a href="Major_Lists.php" class="button buttonDelete">BACK</a>
        <button type="submit" class="button buttonAdd">SAVE</button>
      </div>
    </div>
  </form> 
  
  
</div>
  
</body>
</html>


