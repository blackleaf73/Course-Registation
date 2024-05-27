<?php
include ("conn.php");

$teacherID 			= $_POST['teacherID'];
$teacher_name 		= $_POST['teacher_name'];
$teacher_position 	= $_POST['teacher_position'];

if ($teacherID != "") {
	$update = "UPDATE `teachers` SET `teacher_name`='".$teacher_name."',`teacher_position`='".$teacher_position."' WHERE `teacherID`='".$teacherID."'";
	if ($conn->query($update)) {
		echo "
		    <script>
		      alert('SAVED')
		      window.location.href = 'Teacher_Lists.php'
		    </script>
		  ";
	}
}else{
	$insert = "INSERT INTO `teachers`(`teacher_name`, `teacher_position`) VALUES ('".$teacher_name."','".$teacher_position."')";
	if ($conn->query($insert)) {
		echo "
		    <script>
		      alert('SAVED')
		      window.location.href = 'Teacher_Lists.php'
		    </script>
		  ";
	}
}


?>