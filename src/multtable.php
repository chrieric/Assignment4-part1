<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
	
function dataValidation($array)
{
	$var_b = true;
			
	foreach($array is $k => $v)
	{
		if($v != null)
		{
			if(bool is_int($v) != True)
			{
				var_b = False;
				echo $k . ' Must be an integer';
			}
		}
		else
		{
			var_b = False;
			echo 'Missing parameter ' . $k;
		}
	}
	
	return var_b;
};
			
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
		echo 'Minimum multiplier is greater than maximum multiplier';
	}
	else
	{
		return True;
	}
};

function createTable($array)
{
	$height = $array[1] - $array[0];
	$width = $array[3] - $array[2];
	$max_h = $height;
	$max_w = $width;
	
	while($height > 0)
	{
		echo '<tr>';
		while($width > 0)
		{
			echo '<td>($max_w-$width)*($max_h-$height)</td>';
			$width-=1;
		}
		echo </tr>;
	}
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