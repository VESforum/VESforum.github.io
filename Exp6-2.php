<!DOCTYPE html>
<html>
	<head>
		<title>Experiment 6</title>
	</head>
	<body>
		<form method="post" action="Exp6-2.php">
			String 1: <input name="string1"><br><br>
			String 2: <input name="string2"><br><br>
			<select name="Option">
				<option value="1">String Concatination</option>
				<option value="2">String Reverse</option>
				<option value="3">String Length</option>
				<option value="4">Substring</option>
				<option value="5">String Comapare</option>
				<option value="6">String Replace</option>
			</select><br><br>
			<input type="submit" name="submit">
		</form>
		<?php
			
			if(ISSET($_POST["submit"]))
			{
				$a= $_POST["string1"];
				$b= $_POST["string2"];
				$c= $_POST["Option"];
				switch($c)
				{
					case "1" : echo $a." ".$b;
						break;
					case "2" : echo strrev($a." ".$b);
						break;
					case "3" : echo strlen($a." ".$b);
						break;
					case "4" : echo substr($a." ".$b,4);
						break;
					case "5" : 
								if(strcmp($a,$b)==0)
									echo "Equal Strings";
								else
									echo "Unequal Strings";
						break;
					case "6" : echo str_replace($b,substr($a." ".$b,4),$a." ".$b);
						break;
				}
			}
		?>
	</body>
</html>