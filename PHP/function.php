<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Function</title>
</head>

<body>
<?php
$name="Sarfaraz";
$greeting="Hello";
function say_hello($greeting, $name, $punc){
	echo $greeting. ", " . $name . $punc ."<br/>";
}
say_hello($greeting, $name, "!");

function add_subt($var1, $var2){
	$add = $var1 + $var2;
	$subt = $var1 - $var2;
	$result = array($add, $subt);
	return $result;
}

$result_array = add_subt(10,5);
echo "Add: " .$result_array[0];
echo "<br/>";
echo "Subt: " .$result_array[1];
/*function say_hello(){
	return 'hello world';
}
function hello_new_world(){
	return 'weorld';
}
function new_func($str){
	return 'yppkpoik : '.$str;
}


$new_var = say_hello().hello_new_world();

echo new_func($new_var);*/

//echo say_hello().hello_new_world();



/*function say_hello(){
	echo "Hello world<br/>";
}
say_hello();
function say_hello2($word){
	echo "Hello $word <br/>";
}
say_hello2("india");
*/



/*$var1 = 'hamid';
$var2 = 4;
$var3 = array('hello worled', 5, true, array('sarfaraz',34, '34', false));

var_dump($var3);
gettype($var3);

if(true){
	echo 'entered';
}

if(false){
	echo '';
}else{
	echo 'else ';
}
*/

/*
$char = 'z';
$vowels = array('a','e','i','o','u');
if(in_array($char,$vowels)){
	echo "<strong>$char</strong> is vowel";
}else{
	echo "<strong>$char</strong> is not vowel";
}*/



?>
</body>
</html>