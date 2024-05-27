<?php 
	include ("conn.php");

	$delete = "DELETE FROM `students` WHERE `studentID` = '".$_GET['studentID']."'";

	if ($conn->query($delete)) {
		echo "
		    <script>
		      alert('DELETED')
		      window.location.href = 'Student_Lists.php'
		    </script>
		  ";
	}
	

?>
