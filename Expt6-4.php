<!doctype html>
<html>
	<style>
		table
		{
			border-collapse: collapse;
			font-size: 300%;
			text-align: center;

		}
		td
		{
			width:50px;
		}
		table,td
		{		
			border: 1px solid black;
		}
	</style>
	<body>
		<center>
			<table>
				<?php 
					$a=1;
					while($a<=7)
					{
						echo "<tr>";
						$b=1;
						while($b<=7)
						{
							$c=$a*$b;
							echo "<td>".$c."</td>";
							$b++;
						}
						echo "</tr>";
						$a++;
					}
				?>
			</table>
		</center>
	</body>
</html>