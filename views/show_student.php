<?php

	$students = array();
	while ($student = $result->fetch_assoc()) {
		$students[] = $student;
		}
echo '<script>';
echo 'var student = ' . json_encode($students) . ';';
echo '</script>';

	// echo json_encode($students);
?>
