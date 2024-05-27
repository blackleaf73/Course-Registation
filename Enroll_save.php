<?php
include ("conn.php");

$enrollID         = $_POST["enrollID"];
$semester         = $_POST["semester"];
$year             = $_POST["year"];
$credit           = $_POST["credit"];
$courseID         = $_POST["courseID"];
$studentID        = $_POST["studentID"];

if ($enrollID != "") {
	$update = "UPDATE `enrolls` SET `semester`='".$semester."',`year`='".$year."',`credit`='".$credit."',`courseID`='".$courseID."',`studentID`='".$studentID."' WHERE `enrollID`='".$enrollID."'";
	if ($conn->query($update)) {
		echo "
		    <script>
		      alert('SVAED')
		      window.location.href = 'enroll_Lists.php'
		    </script>
		  ";
	}
}else{
	$insert = "INSERT INTO `enrolls`(`semester`, `year`, `credit`, `courseID`, `studentID`) VALUES ('".$semester."','".$year."','".$credit."','".$courseID."','".$studentID."')";
	if ($conn->query($insert)) {
		echo "
		    <script>
		      alert('SAVED')
		      window.location.href = 'enroll_Lists.php'
		    </script>
		  ";
	}else{
		echo $conn->error;
	}
}


?>