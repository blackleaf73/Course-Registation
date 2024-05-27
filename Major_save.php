<?php
include ("conn.php");

$majorID 		= $_POST['majorID'];
$major_name 	= $_POST['major_name'];
$FacultyID 		= $_POST['FacultyID'];

if ($majorID != "") {
	$update = "UPDATE `majors` SET `major_name`='".$major_name."',`FacultyID`='".$FacultyID."' WHERE `majorID`='".$majorID."'";
	if ($conn->query($update)) {
		echo "
		    <script>
		      alert('SAVED')
		      window.location.href = 'Major_Lists.php'
		    </script>
		  ";
	}
}else{
	$insert = "INSERT INTO `majors`(`major_name`, `FacultyID`) VALUES ('".$major_name."','".$FacultyID."')";
	if ($conn->query($insert)) {
		echo "
		    <script>
		      alert('SAVED')
		      window.location.href = 'Major_Lists.php'
		    </script>
		  ";
	}
}


?>