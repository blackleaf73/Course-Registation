<?php
include ("conn.php");

$FacultyID 		= $_POST['FacultyID'];
$Faculty_name 	= $_POST['Faculty_name'];

if ($FacultyID != "") {
	$update = "UPDATE `Faculties` SET `Faculty_name`='".$Faculty_name."' WHERE `FacultyID`='".$FacultyID."'";
	if ($conn->query($update)) {
		echo "
		    <script>
		      alert('SAVED')
		      window.location.href = 'Faculties_List.php'
		    </script>
		  ";
	}
}else{
	$insert = "INSERT INTO `Faculties`(`Faculty_name`) VALUES ('".$Faculty_name."')";
	if ($conn->query($insert)) {
		echo "
		    <script>
		      alert('SAVED')
		      window.location.href = 'Faculties_List.php'
		    </script>
		  ";
	}
}


?>