<?php
error_reporting(E_ALL);
ini_set('display_errors',1);


function displayValues($array,$request_method)
{	
	$temp=array();
	
	if($request_method == "GET")
	{
		if(count($array) < 1)
		{
			echo " {\"Type\":\"GET\" , \"parameters\" : null}";
		}
		else
		{
			$temp = json_encode($array);
			echo " {\"Type\":\"GET\" , \"parameters\" : $temp }";
		}
	}
	else
	{
		if(count($array) < 1)
		{
			echo " {\"Type\":\"POST\" , \"parameters\" : null}";
		}
		else
		{
			$temp = json_encode($array);
			echo " {\"Type\":\"POST\" , \"parameters\" : $temp }";
		}
	}
};


if("GET"== $_SERVER['REQUEST_METHOD'])
{
	displayValues($_GET,"GET");
}
else
{
	displayValues($_POST,"POST");
}
	
?>
