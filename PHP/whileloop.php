<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>While loop</title>
</head>

<body>
<?php
$count =0;
while($count<=10){
	if($count==5){
		echo "FIVE, ";
		}else{
	echo $count.", ";
		}
	$count++;
	}
	echo "<br> Count: {$count}";
?>
</body>
</html>