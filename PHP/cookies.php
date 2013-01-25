<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$var1=20;
if(isset($_COOKIE['test'])){
	$var1 = $_COOKIE['test'];
}
echo $var1;

setcookie('khan', 45, time()+(60*60*24*7));
?>
</body>
</html>