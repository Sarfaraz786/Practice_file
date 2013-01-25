<?php
require_once('conf.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Khan Results</title>
<style>
body {
	font-family:Arial, Helvetica, sans-serif;
	font-size:11px;
	margin:0;
	padding:0;
}
table {
	border-collapse:collapse;
}
.menu {
	position:absolute;
	right:25px;
	top:15px;
	overflow:auto;
	padding:10px;
}
.menu a {
	text-decoration:none;
	color:#333;
	background:#CCC;
	display:block;
	padding:3px 7px;
	border-radius:5px;
	box-shadow:0px 0px 2px #000;
}
.menu a:hover {
	background:#333;
	color:#ccc;
}
.menu  ul {
	list-style:none;
	margin:0;
	padding:0;
}
.menu ul li ul {
	display:none;
}
.menu ul li:hover ul {
	display:block;
}
.menu ul li ul {
	margin-top:5px;
}
.menu ul li {
	margin-bottom:5px;
}
</style>
</head>
<body>
<div class="menu">
	<ul>
    	<li><a href="#">Select Student</a>
        	<ul>
            <?php
				$query = "SELECT id,sn FROM students";
				$result = mysql_query($query);
				while($row = mysql_fetch_array($result)){
					echo '<li><a href="index.php?id='.$row['id'].'">'.$row['sn'].'</a></li>';
				}
			?>
            </ul>
        </li>
    </ul>
</div>
<?php
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$query = "SELECT sn FROM students where id=1";
	$row = mysql_fetch_array($result) or die(mysql_error());
	$name = $row['sn'];
?>
<h1>Student Name : <?php echo ucfirst($name); ?></h1>
<table border="1" cellspacing="0" cellpadding="10">
  <thead>
    <tr>
      <th>Subject Name</th>
      <th>Total Mark</th>
      <th>Mark</th>
      <th>Pass Mark</th>
      <th>Pass/Fail</th>
      <th>Date</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Math</td>
      <td>100</td>
      <td>40</td>
      <td>35</td>
      <td>Pass</td>
      <td>12/04/2011 12:15:45 AM</td>
    </tr>
  </tbody>
</table>
<?php
}else{
	echo "Please Select a user.";
}
?>
</body>
</html>