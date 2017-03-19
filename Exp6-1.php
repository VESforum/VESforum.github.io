<!doctype html>
<html>
	<body>
		<?php
			$a= "Shravan";
			$b= "Jain";
		?>
		String 1: <?php echo $a ?><br>
		String 2: <?php echo $b ?><br>
		<br>
		Concatinated String: <?php echo $a." ".$b ?><br>
		<br>
		Reverse: <?php echo strrev($a." ".$b) ?><br>
		<br>
		String Length of 1st String: <?php echo strlen($a) ?><br>
		<br>
		Substring: <?php echo substr($a,4) ?><br>
		<br>
		String Compare: <?php 
			if(strcmp($a,$b)==0)
				echo "String are equal";
			else
				echo "String are not equal";
		?><br>
		<br>
		String Replace: <?php echo str_replace("Jain","Chikale",$a." ".$b) ?>
	</body>
</html>