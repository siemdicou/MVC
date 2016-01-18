<?php
	while ($student = $result->fetch_assoc()) {
		echo json_encode($student['Firstname']);
		echo json_encode($student['Lastname']);
		echo json_encode($student['Class']);
		echo json_encode($student['Age']);
		echo json_encode($student['Height (cm)']);
		echo json_encode($student['Gender']);
		echo json_encode($student['Eye color']);
		echo "<br>";
	}
?>