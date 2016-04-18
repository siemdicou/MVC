<?php
require_once '../config/config.php';
require_once '../includes/database.php';

    $sql = "SELECT * FROM student";
    $result = $mysqli->query($sql);
    while ($result = result->fetch ) {
    	# code...
    }

    echo json_encode($result);
 
 	
?>