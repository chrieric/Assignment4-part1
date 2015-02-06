ini_set('display_errors',1);
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<title>Multtable</title>
</head>
<body>
<?php
error_reporting(E_ALL);
	<section>
		<header>
		<h3>Placeholder</h3>
		</header>
		
		function dataValidation($array)
		{
			$var_b = true;
			
			foreach($array is $k => $v)
			{
				if($v != null)
				{
					if(bool is_int($v) != true)
					{
					
					}
					else
					{
						'Must be an integer';
					}
				}
				else
				{
					echo 'Missing parameter';
				}
			}
		}
		
		
		
		function isLessThan($array)
		{
			$mincand = $array[0];
			$maxcand = $array[1];
			$minplier = $array[2];
			$maxplier = $array[3];
			
			if($mincand > $maxcand)
			{
				echo 'Minimum multiplicand is greater than maximum';
			}
			else if($minplier > $maxplier)
			{
				echo 'Minimum multiplier is greater than maximum pultiplier';
			}
			else
			{
				
			}
			
		}
	
		<form action='http://web.engr.oregonstate.edu/~chrierc/multtable.php/multtable.php' method='GET'>
		<input type='text' name = 'min-multiplicand' value='Minimum Multiplicand'>
		<input type = 'text' name = 'max-multiplicand' value = 'Maximum Multiplicand'>
		<input type = 'text' name = 'min-multiplier' value = 'Minimum Multiplier'>
		<input type = 'text' name = 'max-multiplier' value = 'Maximum Multiplier'>
		</form>
		
		
	</section
</body>
</html>
?>