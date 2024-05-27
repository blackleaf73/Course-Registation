<?php 
	include ("conn.php");

	$delete = "DELETE FROM `enrolls` WHERE `enrollID` = '".$_GET['enrollID']."'";

	if ($conn->query($delete)) {
		echo "
		    <script>
		      alert('DELETED')
		      window.location.href = 'enroll_Lists.php'
		    </script>
		  ";
	}
	

?>
