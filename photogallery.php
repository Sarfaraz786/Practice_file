<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<title>Thumbnail Gallery | CSS Class</title>
<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />

<style type="text/css">
body {background: white}

/* Gallery */

.gallery li {float:left;position:relative;padding:0px;margin:10px;list-style:none;background: url(../test/images/tb/ds2.jpg) 21px 21px no-repeat;}
.gallery li img {display:block;border:1px outset black;}

.gallery a {display:block;-webkit-box-shadow:4px 4px 6px hsla(0, 0%, 0%, 0.7);-moz-box-shadow:4px 4px 6px hsla(0, 0%, 1%, 0.7);-o-box-shadow:4px 4px 6px hsla(0, 0%, 0%, 0.7);margin:0 0 5px;
}

.gallery:hover img {
	               -moz-transition-property: opacity; 
                    -moz-transition-duration: 4s;
                    -moz-transition-delay: 2s; opacity:0.6;
					}

.gallery img:hover {
	            -moz-transition: all 3s; 
                -webkit-transition: all 3s;
				-o-transition: all 3s;opacity:1;
				}

.gallery a:hover {
	                -webkit-box-shadow:5px 5px 5px hsla(0, 0%, 0%, 0.8);
					-moz-box-shadow:5px 5px 5px hsla(0, 5%, 0%, 0.8);
					-moz-transition: margin 0.3s;
					-webkit-transition: margin 0.3s;
					-o-transition: margin 0.3s;
					transition: margin 0.3s;
					margin:5px 0 0;
}

.clear, h2, p {clear:left;}



/* Navigation */

#navigation ul {
	font-size: 100%;
	font-family: Tahoma,Helvetica, Arial,sans-serif;
	padding:0;margin:0;
	list-style:none;}
#navigation {margin-left:50px;}
#navigation+* {margin-top:50px;}

#navigation ul>li>ul>li {
				-webkit-box-shadow:5px 5px hsla(185, 25%, 25%, 0.5);
				-moz-box-shadow:5px 5px hsla(185, 25%, 25%, 0.5);
				-moz-border-radius:5px;-webkit-border-radius:5px;
				border-radius:5px;
				}

#navigation ul>li>ul>li:hover, #navigation ul>li>ul>li:focus {
	-webkit-box-shadow:5px 5px hsla(210, 50%, 50%, 0.5);
	-moz-box-shadow:5px 5px hsla(185, 25%, 25%, 0.5);
	}


#navigation>ul>li {
	background: blue url(../images/gallery/im1.jpg) left;
	}

#navigation li {
	float: left;
	position: relative;
	line-height : 1.35em;
	border:3px solid #679;
	border:3px solid hsla(220, 80%, 80%, 0.3);
	margin-right:0px;
	}
#navigation ul>li {
	-moz-border-radius:10px;
	-webkit-border-radius:8px;
	border-radius:8px;
	}
#navigation li:first-child {border-left-width:3px;}
#navigation li:last-child {border-right-width:3px;}
#navigation li li {border:none;margin:0}
#navigation ul>li li {float:none;}/* Hide from IE6 */
#navigation li li:last-child {}


#navigation li a {display:block;text-decoration:none;text-align:center;color: #fff;
border:1px solid;border-color:#dee #246 #357 #cdd;background:url(../images/examples/navblue3.png) repeat-x 60% 0;
	width: 4.5em;padding: 3px 0.5em 5px;cursor:pointer;}


#navigation li a:hover {border:1px solid;border-color:#add #369 #add #dff;}
#navigation li a:hover {-webkit-transition: all 0.2s;background:#3ba/*8a9*/ url(../images/examples/navgreen3.png) repeat-x;}
#navigation li>a:hover {background:hsla(150, 70%, 60%, 0.2)}/* for Gecko 1.9 and Safari 3 to show my transparent background. Hide from IE6 */



#navigation li li a {text-align:left;background:#5D688F;background: hsla(220, 40%, 40%, 0.7);width: 9em;border:none;margin:0;padding: 5px 0.5em 7px;}
#navigation li li:last-child a {-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px;}

#navigation ul>li>a {-moz-border-radius:5px;-webkit-border-radius:4px;border-radius:4px;}

#navigation li li a:hover {background:#6D789F;border:none;-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px;}

#navigation li a:focus {color: #dfd;outline: 2px solid #dde;}
*:first-child+html #navigation>li>a:active {color: #dfd;border: 2px solid #dde;padding: 2px 0.45em 4px;}
#navigation li li a:focus {color: #dfd;outline: 2px solid #E16991;}
*:first-child+html #navigation li li a:active {color: #dfd;border: 2px solid #dde;}


#navigation li li a:focus, #navigation li li a:active {position:relative;left:10000px;}
#navigation li+li+li+li+li li a:focus, #navigation li+li+li+li+li li a:active {margin-left:-4.4em;}
#navigation li a:focus+ul a {position:relative;left:0;margin-left:0;}
#navigation li:hover li a:focus, #navigation li:hover li a:active, #navigation li.sfhover li a:active {position:relative;left:0;}
#navigation li+li+li+li+li:hover li a:focus, #navigation li+li+li+li+li:hover li a:active {left:4.4em;}

body:hover #navigation li a:focus+ul:after, body:hover #navigation li li a:focus:after {
	content : "left click elsewhere to close";line-height : 1.35em;color: #003300;font-size:80%;display:block;
	padding: 6px 0.5em;text-decoration:none;background-color: #A9E1B1;border-bottom: 1px solid #238126;outline: 2px solid #79b;}
body:hover #navigation li li a:focus:after {margin-top: 6px;}


div>a:first-child:focus+div+div+div #navigation li {background:#8ad;}/* highlights the menu when the skip to menu link is in focus */


#navigation li ul {position:absolute;left:-10000px;height:1px;}
#navigation li ul * {height:1px;}

#navigation li:hover ul, #navigation li.sfhover ul {height:auto;left:0;top:100%;z-index:1;}

#navigation li:hover ul * {height:auto;-webkit-transition: all 0.2s;}

#navigation li+li+li+li+li:hover ul {top:100%;left:auto;right:0;}
#navigation li a:focus+ul {top: 100%;left:0;}
#navigation li+li+li+li+li a:focus+ul {left:auto;right:0}
#navigation li:hover a:focus+ul {-webkit-transition: all 0.2s;margin-left:0;}





</style>


</head>

<body>

<p>Testing 24th August 2010</p>



<h2>Gallery with Transition</h2>

<ul class="gallery">
  <li><a href="#"><img src="../images/gallery/im1.jpg" width="150" height="100" alt="One" /></a></li>
  <li><a href="#"><img src="../images/gallery/im2.jpg" width="150" height="100" alt="One" /></a></li>
  <li><a href="#"><img src="../images/gallery/im4.jpg" width="150" height="100" alt="One" /></a></li>
</ul>


<h2>Dropdown Menu with Delayed Transition</h2>

<div id="navigation">
<ul>
	<li><a href="#">Item 1</a>
		<ul>
			<li><a href="#">Item 1.1</a></li>
			<li><a href="#">Item 1.2</a></li>
			<li><a href="#">Item 1.3</a></li>

		</ul>
</li>
	<li><a href="#">Item 2</a>
		<ul>
			<li><a href="#">Item 2.1</a></li>
			<li><a href="#">Item 2.2</a></li>
			<li><a href="#">Item 2.3</a></li>

		</ul>
	</li>
	<li><a href="#">Item 3</a>
		<ul>
			<li><a href="#">Item 3.1</a></li>
			<li><a href="#">Item 3.2</a></li>
			<li><a href="#">Item 3.3</a></li>

		</ul>
	</li>
</ul>

<div class="clear"><!--  --></div>

</div>



<p><a href="http://css-class.com/test/">CSS Class test</a></p>
<p><a href="http://css-class.com/test/demos/">CSS Class test - Demos</a></p>

</body>
</html>