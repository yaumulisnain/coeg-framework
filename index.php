<?php

/**
 * Created By : Ade Yusuf Yaumul Isnain
 * Version    : 1.0.0
 */
?>

<?php
	
include 'config.php';

#INCLUDE ALL CLASS 	
$class = scandir(CLASS_PATH, 0);
unset($class[0], $class[1]);

foreach ($class as $key => $value) 
{
 	include CLASS_PATH . '/' . $value;
}

#INCLUDE ALL APP
function _readdir($main)
{
  	$app = scandir($main);
  	unset($app[0], $app[1]);

  	foreach ($app as $key => $value) 
	{
		#$ext = pathinfo($value);
		#echo $ext['extension'];

		if(is_dir($main . '/' . $value))
		{
			$dir = $main.'/'.$value;
			#echo "" . $dir ." Adalah Direktori <br>";
			_readdir($dir);
		}
		else
		{
			$ext = pathinfo($value);
			if($ext['extension'] == "php")
		 	{
		 		include $main . '/' . $value;
		 		#echo $main . '/' . $value . " Sudah ter-Include<br>";
		 	}
		}
	}
}

_readdir(APP_FOLDER);

#ROUTING
$route = new Route();
$route->add('/', "SignIn");
$route->add('/cashier', "Cashier");

$route->submit();
