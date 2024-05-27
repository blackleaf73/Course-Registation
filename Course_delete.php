<?php 
	include ("conn.php");

	$delete = "DELETE FROM `courses` WHERE `courseID` = '".$_GET['courseID']."'";

	if ($conn->query($delete)) {
		echo "
		    <script>
		      alert('DELETED')
		      window.location.href = 'Course_List.php'
		    </script>
		  ";
	}
	

?>
