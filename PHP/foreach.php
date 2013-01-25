<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>foreach</title>
</head>

<body>
<?php
$age = array(10,34,20);
foreach($age as $ag){
	echo $ag.", ";
	}
?>
<br />
<?php
foreach($age as $possition => $ag){
	echo $possition.": " .$ag."<br>";
	}
?>
<?php
$price= array("Brand new computer"=>2000, "PHP training"=>3000, "Bihar to Bangalore journey"=>700);
	foreach($price as $key=> $value){
		if(is_int($value)){
			echo $key. " $" .$value."<br/>";
			}else{
				echo $key. ": " .$value."<br/>";
				}
	}
?>
</body>
</html>