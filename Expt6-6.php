<!doctype html>
<html>
<body>
<h1>How's your weather?</h1>
In <?php echo $_POST["city"]; ?> in the month of <?php echo $_POST["month"]." ".$_POST["year"];  ?> you observed the following weather:
 <ul> 
 <?php
	foreach($_POST["w"] as $check)
		echo "<li>".$check."</li>";
 ?>
</ul>
</body>
</html>