<?php
	while ($student = $result->fetch_assoc()) {
		echo $student['Firstname'];
		echo $student['Lastname'];
		echo $student['Class'];
		echo $student['Age'];
		echo $student['Height (cm)'];
		echo $student['Gender'];
		echo $student['Eye color'];
		echo "<br>";
	}
?>