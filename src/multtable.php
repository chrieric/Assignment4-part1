<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
	
function dataValidation($array)
{
	$var_b = True;
			
	foreach($array as $k => $v)
	{
		if($v != null)
		{
			if($v!=(integer)$v)
			{
				$var_b = False;
				echo $k . ' Must be an integer';
			}
		}
		else
		{
			$var_b = False;
			echo 'Missing parameter ' . $k;
		}
	}
	
	return $var_b;
};
			
function isLessThan($array)
{
	$mincand = $array['min-multiplicand'];
	$maxcand = $array['max-multiplicand'];
	$minplier = $array['min-multiplier'];
	$maxplier = $array['max-multiplier'];
			
	if($mincand > $maxcand)
	{
		echo 'Minimum multiplicand is greater than maximum';
	}
	elseif($minplier > $maxplier)
	{
		echo 'Minimum multiplier is greater than maximum multiplier';
	}
	else
	{
		return True;
	}
};

function createTable($array)
{
	$min_h = $array['min-multiplicand'];
	$max_h = $array['max-multiplicand']+2; 
	$min_w = $array['min-multiplier'];
	$max_w = $array['max-multiplier']+2;
	
	echo '<table style="border:1px solid black;border-collapse:collapse;">';
	echo "<caption>Multiplicand Table</caption>";
	
	for($k=$min_h;$k < $max_h;$k++)
	{
		echo '<th style="border:1px solid black;">';
		echo '</th>';
	}
	
	for($i=$min_h; $i < $max_h;$i++)
	{
		echo '<tr>';
		for($j=$min_w;$j < $max_w;$j++)
		{
			echo '<td style="border:1px solid black;">';
			echo $i*$j;
			echo '</td>';
		}
		echo '</tr>';
		//echo $height;
	}
	echo '</table>';
}

?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8"/>
<head>
	<title>Multiplicand Table</title>
</head>
<body>
<?php
if(dataValidation($_GET))
{
	if(isLessThan($_GET))
	{
		createTable($_GET);
	}
}
?>
</body>
</html>