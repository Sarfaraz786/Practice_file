<?php
require_once('conf.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Student</title>
<style>
body {
	font-family:Arial, Helvetica, sans-serif;
	font-size:11px;
	margin:0;
	padding:0;
}
.frmrow {
	overflow:auto;
	margin-bottom:5px;
}
.frmrow label {
	display:block;
	float:left;
	width:130px;
}
.frmrow .field {
	border:1px solid #666;
}
.frmrow .error {
	border:1px solid #F00;
}
</style>
<script src="js/jquery-1.5.1.min.js" type="text/javascript"></script>
<script src="js/jquery.hamidval.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
	$('.students').hamidval();
});
</script>
</head>

<body>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	$sn = trim($_POST['sn']);
	$dob = trim($_POST['dob']);
	$add = trim($_POST['add']);
	$sjd = trim($_POST['sjd']);
	$mobile = trim($_POST['mobile']);
	$email = trim($_POST['email']);
	
	$query = 'insert into students (sn,dob,address,sjd,mobile,email) VALUES ("'.$sn.'","'.$dob.'","'.$add.'","'.$sjd.'","'.$mobile.'","'.$email.'")';
	if(mysql_query($query)){
		echo "New Student '".$sn."' Added.<hr>";
	}else{
		echo "Unable to add new Student ".$sn." Please Try again.<br>";
		echo "Error. : ".mysql_error();
	}
}
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="students">
	<fieldset>
    	<legend>Add New Student Details</legend>
        <div class="frmrow">
        	<label for="sn">Student Name</label>
            <input type="text" name="sn" class="field required" id="sn" /> 
        </div>
        <div class="frmrow">
        	<label for="dob">Date of Birth</label>
            <input type="text" name="dob" class="field required" id="dob" /> 
        </div>
        <div class="frmrow">
        	<label for="add">Address</label>
            <textarea name="add" id="add" class="field required"></textarea>
        </div>
        <div class="frmrow">
        	<label for="sjd">Student Join Date</label>
            <input type="text" name="sjd" class="field required" id="sjd" /> 
        </div>
        <div class="frmrow">
        	<label for="mobile">mobile</label>
            <input type="text" name="mobile" class="field required" id="mobile" /> 
        </div>
        <div class="frmrow">
        	<label for="email">Email</label>
            <input type="text" name="email" class="field required email" id="email" /> 
        </div>
        <div class="frmrow">
        	<label>&nbsp;</label>
            <input type="submit" value="Save" class="field" />
        </div>
    </fieldset>
</form>
</body>
</html>