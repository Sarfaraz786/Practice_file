<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>MOBILE</title>
<script src="jquery-1.6.4.js" type="text/javascript"></script>
<script type='text/javascript' src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.js"></script>
<style>
body, html {
	margin:0;
	padding:0;
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px;
}
.layout {
	margin:5px 0;
	background:rgba(0,0,255,0.3);
}
.wrap {
	overflow: hidden;
}
.wrap:hover {
    overflow-y: scroll ;
}
.wrap.vertical {
	width:320px;
	height:480px;
}
.wrap.horizontal {
	width:480px;
	height:320px;
}
.wrap {
	background:#ccc;
	margin:0 auto;
}
.boxrw {
	overflow:auto;
	padding:5px;
}
.box {
	float:left;
	background:rgba(51,102,51,0.7);
	padding:5px;
}
.vertical .box.box1-3 {
	width:93.3px;
}
.vertical .box.box1-4 {
	width:67.5px;
}
.vertical .box.box1-2 {
	width:145px;
}
.vertical .box.box1-1 {
	width:300px;
}



.horizontal .box.box1-3 {
	width:146.6px;
}
.horizontal .box.box1-4 {
	width:107.5px;
}
.horizontal .box.box1-2 {
	width:225px;
}
.horizontal .box.box1-1 {
	width:460px;
}
</style>
</head>

<body>
<div class="wrap vertical">
	<div class="layout layout1">
		<div class="boxrw"> box </div>
		<div class="boxrw"> box </div>
	</div>
	<div class="layout layout2">
		<div class="boxrw">
			<div class="box box1-3">box 1-3</div>
			<div class="box box1-3">box 1-3</div>
			<div class="box box1-3">box 1-3</div>
		</div>
		<div class="boxrw"> box </div>
	</div>
	<div class="layout layout3">
		<div class="boxrw"> box </div>
		<div class="boxrw">
			<div class="box box1-3">box 1-3</div>
			<div class="box box1-3">box 1-3</div>
			<div class="box box1-3">box 1-3</div>
		</div>
		<div class="boxrw"> box </div>
	</div>
	<div class="layout layout4">
		<div class="boxrw"> box </div>
		<div class="boxrw">
			<div class="box box1-4">box 1-4</div>
			<div class="box box1-4">box 1-4</div>
			<div class="box box1-4">box 1-4</div>
			<div class="box box1-4">box 1-4</div>
		</div>
		<div class="boxrw"> box </div>
	</div>
	<div class="layout layout5">
		<div class="boxrw"> box </div>
		<div class="boxrw"> box </div>
		<div class="boxrw"> box </div>
		<div class="boxrw"> box </div>
		<div class="boxrw">
			<div class="box box1-4">box 1-4</div>
			<div class="box box1-4">box 1-4</div>
			<div class="box box1-4">box 1-4</div>
			<div class="box box1-4">box 1-4</div>
		</div>
		<div class="boxrw"> box </div>
		<div class="boxrw"> box </div>
	</div>
	<div class="layout layout6">
		<div class="boxrw"> box </div>
		<div class="boxrw">
			<div class="box box1-2">box 1-2</div>
			<div class="box box1-2">box 1-2</div>
		</div>
		<div class="boxrw"> box </div>
	</div>
	<div class="layout layout7">
		<div class="boxrw"> box </div>
		<div class="boxrw">
			<div class="box box1-1">box 1-1</div>
		</div>
		<div class="boxrw"> box </div>
	</div>
</div>





<div class="wrap horizontal">
	<div class="layout layout1">
		<div class="boxrw"> box </div>
		<div class="boxrw"> box </div>
	</div>
	<div class="layout layout2">
		<div class="boxrw">
			<div class="box box1-3">box 1-3</div>
			<div class="box box1-3">box 1-3</div>
			<div class="box box1-3">box 1-3</div>
		</div>
		<div class="boxrw"> box </div>
	</div>
	<div class="layout layout3">
		<div class="boxrw"> box </div>
		<div class="boxrw">
			<div class="box box1-3">box 1-3</div>
			<div class="box box1-3">box 1-3</div>
			<div class="box box1-3">box 1-3</div>
		</div>
		<div class="boxrw"> box </div>
	</div>
	<div class="layout layout4">
		<div class="boxrw"> box </div>
		<div class="boxrw">
			<div class="box box1-4">box 1-4</div>
			<div class="box box1-4">box 1-4</div>
			<div class="box box1-4">box 1-4</div>
			<div class="box box1-4">box 1-4</div>
		</div>
		<div class="boxrw"> box </div>
	</div>
	<div class="layout layout5">
		<div class="boxrw"> box </div>
		<div class="boxrw"> box </div>
		<div class="boxrw"> box </div>
		<div class="boxrw"> box </div>
		<div class="boxrw">
			<div class="box box1-4">box 1-4</div>
			<div class="box box1-4">box 1-4</div>
			<div class="box box1-4">box 1-4</div>
			<div class="box box1-4">box 1-4</div>
		</div>
		<div class="boxrw"> box </div>
		<div class="boxrw"> box </div>
	</div>
	<div class="layout layout6">
		<div class="boxrw"> box </div>
		<div class="boxrw">
			<div class="box box1-2">box 1-2</div>
			<div class="box box1-2">box 1-2</div>
		</div>
		<div class="boxrw"> box </div>
	</div>
	<div class="layout layout7">
		<div class="boxrw"> box </div>
		<div class="boxrw">
			<div class="box box1-1">box 1-1</div>
		</div>
		<div class="boxrw"> box </div>
	</div>
</div>
</body>
</html>