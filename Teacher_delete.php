<?php 
	include ("conn.php");

	$delete = "DELETE FROM `teachers` WHERE `teacherID` = '".$_GET['teacherID']."'";

	if ($conn->query($delete)) {
		echo "
		    <script>
		      alert('DELETED')
		      window.location.href = 'Teacher_Lists.php'
		    </script>
		  ";
	}
	

?>
