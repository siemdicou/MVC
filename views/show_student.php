<?php
	while ($student = $result->fetch_assoc()) {
		echo $student['Firstname'].$student['Lastname'].$student['Class'].$student['Age'].$student['Height (cm)'].$student['Gender'].$student['Eye Color'];
	}
?>