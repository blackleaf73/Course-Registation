<?php
include ("conn.php");

$studentID 			= $_POST['studentID'];
$student_name 		= $_POST['student_name'];
$student_tel 		= $_POST['student_tel'];
$student_address 	= $_POST['student_address'];
$teacherID 			= $_POST['teacherID'];

if ($studentID != "") {
	$update = "UPDATE `students` SET `student_name`='".$student_name."',`student_address`='".$student_address."',`student_tel`='".$student_tel."',`teacherID`='".$teacherID."' WHERE `studentID`='".$studentID."'";
	if ($conn->query($update)) {
		echo "
		    <script>
		      alert('SAVED')
		      window.location.href = 'Student_Lists.php'
		    </script>
		  ";
	}
}else{
	$insert = "INSERT INTO `students`(`student_name`, `student_address`, `student_tel`, `teacherID`) VALUES ('".$student_name."','".$student_address."','".$student_tel."','".$teacherID."')";
	if ($conn->query($insert)) {
		echo "
		    <script>
		      alert('SAVED')
		      window.location.href = 'Student_Lists.php'
		    </script>
		  ";
	}
}


?>