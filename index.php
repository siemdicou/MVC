<!DOCTYPE html>
<html>
<head>
	<title>MVC Model</title>
	<script  type="text/javascript" src="js/script.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<script type="text/javascript" src="js/script.js"></script>

</head>
<body>

<!--  -->



<?php


	include 'config/config.php';
	require 'includes/database.php';
	require_once 'model/student_model.php';
	require'views/show_student.php';
	json_encode($students);
?>
<script type="text/javascript">

	// HttpRequest();

</script>

<!--  -->
<!--     <h1>{{title}}</h1>
    <div class="body">
      {{body}}
    </div> -->
  </div>
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0/handlebars.js"></script>
<script src="app/models/StudentsModel.js"></script>
<script src="app/views/RandomStudentView.js"></script>
<script src="app/app.js"></script>
</body>
</html>

  <div class="entry">
  <div class="siem">
	<h1>MD2 leerling app</h1>
	<div id="shuffle">random leerling</div><br>
	
<!--<div>gras</div>-->

	<div class="name">
		<img src="http://3.bp.blogspot.com/-3COVCT94JFQ/U5oD5oS2VNI/AAAAAAAAI_8/JH0Spiq6VbQ/s1600/Hi-smiley.png">
		<div class="container"><h2>hi</h2></div>
		<script id="students-template" type="text/x-handlebars-template">
		<h2 data-id="{{id}}">{{firstName}}</script></h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
	</div>
	<br>
	<br>
	<hr>
	<div class="selectbox">
	Top 3 <select>
			<option>Kleinste</option>
			<option>Grootste</option>
			<option>Oudste</option>
			<option>Jongste</option>
		</select>
	</div>
	<table border="1px" id="table1">
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

	<canvas width="120" height="120"></canvas>
		<table border="1px" id="table2">
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0/handlebars.js"></script>
<script src="thisExamples.js"></script>
<script src="util/EventDispatcher.js"></script>
<script src="util/HttpRequest.js"></script>
<script src="app/models/StudentsModel.js"></script>
<script src="app/views/RandomStudentView.js"></script>
<script src="app/app.js"></script>
</body>
</HTML>
