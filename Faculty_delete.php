<?php 
	include ("conn.php");

	$delete = "DELETE FROM `Faculties` WHERE `FacultyID` = '".$_GET['FacultyID']."'";

	if ($conn->query($delete)) {
		echo "
		    <script>
		      alert('DELETED')
		      window.location.href = 'Faculties_List.php'
		    </script>
		  ";
	}
	

?>
