<?php
require_once('conf.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
	$('.results').hamidval();
});
</script>
</head>

<body>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	$si = trim($_POST['si']);
	$subn = trim($_POST['subn']);
	$mark = trim($_POST['mark']);
	$pm = trim($_POST['pm']);
	if($pm > $mark){
		$pf = "f";
	}else{
		$pf = "p";
	}
	$dt = trim($_POST['dt']);
	
	$query = 'insert into result (si,sn,m,pm,pf,date) VALUES ("'.$si.'","'.$subn.'","'.$mark.'","'.$pm.'","'.$pf.'","'.$dt.'")';
	if(mysql_query($query)){
		echo "Student '".$subn."' Result Added.<hr>";
	}else{
		echo "Unable to add Result of Student ".$subn." Please Try again.<br>";
		echo "Error. : ".mysql_error();
	}
}

?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="results">
	<fieldset>
    	<legend>Enter Student Mark Details</legend>
        <div class="frmrow">
        	<label for="si">Student ID</label>
            <input type="text" name="si" class="field required" id="si" /> 
        </div>
        <div class="frmrow">
        	<label for="subn">Subject Name</label>
            <input type="text" name="subn" id="subn" class="field required" />
        </div>
        <div class="frmrow">
        	<label for="mark">Mark</label>
            <input type="text" name="mark" id="mark" class="field required" />
        </div>
        <div class="frmrow">
        	<label for="pm">Pass Mark</label>
            <input type="text" name="pm" id="pm" class="field required" />
        </div>
        <div class="frmrow">
        	<label for="dt">Date</label>
            <input type="text" name="dt" id="dt" class="field required" placeholder="yyyy-mm-dd" />
        </div>
        <div class="frmrow">
        	<label>&nbsp;</label>
            <input type="submit" value="Save" class="field" />
        </div>
    </fieldset>
</form>
</body>
</html>