<?php

	$students = array();
	while ($student = $result->fetch_assoc()) {
		$students[] = $student;
		}

	echo json_encode($students);
?>
