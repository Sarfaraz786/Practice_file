<!DOCTYPE htnl>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blue World</title>
<link href="css/style.css" type="text/css" rel="stylesheet" media="screen" />
<link href="css/contact.css" type="text/css" rel="stylesheet" />
</head>
<body>
<div class="wrap">
  <header>
    <div class="logo"><span>WWW.BLUEWORLD.COM</span>
      <div class="logoa">logoa</div>
    </div>
    <div class="form">
      <form class="subscribe" action="#" method="post">
        <ul>
          <li>
            <label for="login">Login</label>
            <input class="field" type="text" name="login" size="30" maxlength="50"  placeholder="Enter your user name" />
          </li>
          <li>
            <label for="login">Password</label>
            <input class="field" type="password" name="passw" size="30" maxlength="50" placeholder="Enter password" />
          </li>
          <li>
            <input type="submit" class="submitter" style="display:none;">
          </li>
        </ul>
      </form>
    </div>
    <div class="menu">
      <ul>
        <li><a href="index.php"><span>Home</span></a></li>
        <li><a href="about.php"><span>About us</span></a></li>
        <li><a href="#"><span>Services</span></a></li>
        <li class="selected"><a href="contactBluew.php"><span>Contact us</span></a></li>
      </ul>
    </div>
  </header>
  <div class="main-content">
    <!--main-content-->
    <p><strong>Contact Details</strong><br />
      C/o-Nanjundaiah, Room No-C12, RNR Building,<br />
      Hausmanahalli, Yelahanka, Bangalore, Karnataka, India. <br />
      <br />
      <strong>Mobile : </strong> 9379449901<br />
      <strong>Email : </strong>sarfarazalam16@yahoo.in</p>
    <p>If you need to help, please call </p>
    <div id="contform" class="contact">
      <form id="commentform" action="#" method="post">
        <label>Name</label>
        <input type="text" class="field required" id="name" name="name" />
        <label>E-mail</label>
        <input type="text" class="field required email" id="email" name="email" />
        <label>Cont. no.</label>
        <input type="text" class="field required number" id="contno" name="contno" />
        <label>Comment</label>
        <textarea id="comment" name="comment" class="required"></textarea>
        <input id="csend_message" type="submit" value="Send" class="submitter" />
      </form>
    </div>
    <div class="socbox"> <a href="http://www.facebook.com/md.sarfaraz.a" target="_blank"><img src="img/f.png"/></a><a href="http://www.twitter.com/mdsrazalam" target="_blank"><img src="img/t.png" /></a><a href="#"><img src="img/s.png" /></a><a href="#"><img src="img/fr.png" /></a></div>
  </div>
  <!--End main-content-->
  <footer>
    <div class="left">&copy;<a href="www.sarfarazalam.com">www.sarfarazalam.com</a></div>
  </footer>
</div>
<!--End wrap-->
</body>
</html>
