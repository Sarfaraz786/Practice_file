<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$bar = "outside";
function foo(){
	//global $bar;   for show the inside value
	$bar = "inside";
}
foo();
echo $bar;
?>
<br/>
<?php
$bar = "outside";
function foo2($var){
	$var = "inside";
	return $var;
}
$bar = foo2($bar);
echo $bar. "<bar/>";
?>
<br/>
<?php
function paint($room="office", $color){
	echo "This $room color is $color. ";
}
paint("bedroom", "yellow");
?>
</body>
</html>
