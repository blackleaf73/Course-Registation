<?php 
	include ("conn.php");

	$delete = "DELETE FROM `majors` WHERE `majorID` = '".$_GET['majorID']."'";

	if ($conn->query($delete)) {
		echo "
		    <script>
		      alert('DELETED')
		      window.location.href = 'Major_Lists.php'
		    </script>
		  ";
	}
	

?>
