<?php
include ("conn.php");

$courseID 		= $_POST['courseID'];
$course_name 	= $_POST['course_name'];
$teacherID 		= $_POST['teacherID'];

if ($courseID != "") {
	$update = "UPDATE `courses` SET `course_name`='".$course_name."',`teacherID`='".$teacherID."' WHERE `courseID`='".$courseID."'";
	if ($conn->query($update)) {
		echo "
		    <script>
		      alert('SAVED')
		      window.location.href = 'Course_List.php'
		    </script>
		  ";
	}
}else{
	$insert = "INSERT INTO `courses`(`course_name`, `teacherID`) VALUES ('".$course_name."','".$teacherID."')";
	if ($conn->query($insert)) {
		echo "
		    <script>
		      alert('SAVED')
		      window.location.href = 'Course_List.php'
		    </script>
		  ";
	}else{
		echo $conn->error;
	}
}


?>