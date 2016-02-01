<!DOCTYPE html>
<html>
<head>
	<title>MVC Model</title>
	<script  type="text/javascript" src="js/script.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<script type="text/javascript" src="js/script.js"></script>

</head>
<body>
<?php
	include 'config/config.php';
	include 'includes/database.php';
	require_once 'model/student_model.php';
	require'views/show_student.php';
	json_encode($students);
?>
<script type="text/javascript">

	HttpRequest();


</script>
<div class="siem">
	<h1>MD2 leerling app</h1>
	<a href="#">random leerling</a><br>
	<div class="name">
		<img src="http://3.bp.blogspot.com/-3COVCT94JFQ/U5oD5oS2VNI/AAAAAAAAI_8/JH0Spiq6VbQ/s1600/Hi-smiley.png">
		<h2>dave van rossum</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
	</div>
	<br>
	<hr>
	<div class="selectbox">
	Top 3 <select>
			<option>hoi</option>
		</select>
	</div>
	<table border="1px">
		<tr>
			<td><div class="number">1</div></td>
			<td>dave</td>
		</tr>
		<tr>
			<td><div class="number">2</div></td>
			<td>dave</td>
		</tr>
		<tr>
			<td><div class="number">3</div></td>
			<td>dave</td>
		</tr>
	</table>
	<hr>
	<canvas width="30%">
		
	</canvas>
	<table border="1px" width="65%">
			<tr>
			<td><div class="number">1</div></td>
			<td>dave</td>
		</tr>
		<tr>
			<td><div class="number">2</div></td>
			<td>dave</td>
		</tr>
		<tr>
			<td><div class="number">3</div></td>
			<td>dave</td>
		</tr>
	</table>
</div>

</body>
</html>