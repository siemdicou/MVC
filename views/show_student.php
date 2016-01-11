<?php
	while ($student = $result->fetch_assoc()) {
		echo $student['Firstname', 'Lastname', 'Class', 'Age', 'Height (cm)', 'Gender', 'Eye Color'];
	}
?>