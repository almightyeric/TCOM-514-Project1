<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="index.css" />
<title>Fantastic 4</title>
<style type="text/css">
#user{color: blue;background-color:white;font-size:24;font-weight:900;}
#pass{color: blue;background-color:white;font-size:24;font-weight:900;}
div#container
div#header {background-color:#CCFFCC;margin-bottom:-0.2in;background-image:url(penn.jpg);background-repeat:repeat-x;background-position:top right ; }
div#transition{background-image:url(3.jpg);clear:both;text-align:center; background-position:center;margin-bottom:-0.16in}
div#content1{background-color:#CC99CC;height:400px;width:310px;float:left;}
div#content2{background-color:#339933;height:400px;width:310px;float:left;}
div#content3{background-color:#6699FF;height:400px;width:310px;float:left;}
div#content4{background-color:#CC0000;height:400px;width:332px;float:left;}
div#footer {background-color:#CCFFCC;clear:both;text-align:center;}
h1 {margin-bottom:0;}
h2 {margin-bottom:0;font-size:18px;}
div#header{color: yellow; font-size:16px;font-weight: bold;}

</style>
</head>

<body>

<script>
function change_head_banner_image1()
{
element=document.getElementById('sitian_image')
if (element.src.match("https://scontent-b-lga.xx.fbcdn.net/hphotos-prn1/282034_118407628309822_841315472_n.jpg"))
  {
  element.src="http://rlv.zcache.com/want_to_know_more_about_me_just_ask_necklace-r822e46b8f4974741adcdb7b8309da731_fkoez_8byvr_324.jpg";
  }
else
  {
  element.src="https://scontent-b-lga.xx.fbcdn.net/hphotos-prn1/282034_118407628309822_841315472_n.jpg";
  }
}

function mouseOver()
{
element=document.getElementById("sitian_image2")
element.src ="http://rlv.zcache.com/want_to_know_more_about_me_just_ask_necklace-r822e46b8f4974741adcdb7b8309da731_fkoez_8byvr_324.jpg";
}
function mouseOut()
{
element=document.getElementById('sitian_image2')
element.src="https://scontent-b-lga.xx.fbcdn.net/hphotos-prn1/282034_118407628309822_841315472_n.jpg";
}

function change_head_banner_image2()
{
element=document.getElementById('hanfei_image')
if (element.src.match("https://scontent-b-lga.xx.fbcdn.net/hphotos-frc3/576873_100412556784295_411476178_n.jpg"))
  {
  element.src="http://rlv.zcache.com/want_to_know_more_about_me_just_ask_necklace-r822e46b8f4974741adcdb7b8309da731_fkoez_8byvr_324.jpg";
  }
else
  {
  element.src="https://scontent-b-lga.xx.fbcdn.net/hphotos-frc3/576873_100412556784295_411476178_n.jpg";
  }
}

function mouseOver2()
{
element=document.getElementById('hanfei_image2')
element.src ="http://rlv.zcache.com/want_to_know_more_about_me_just_ask_necklace-r822e46b8f4974741adcdb7b8309da731_fkoez_8byvr_324.jpg";
}
function mouseOut2()
{
element=document.getElementById('hanfei_image2')
element.src="https://scontent-b-lga.xx.fbcdn.net/hphotos-frc3/576873_100412556784295_411476178_n.jpg";
}

function change_head_banner_image3()
{
element=document.getElementById('jingwei_image')
if (element.src.match("https://scontent-a-lga.xx.fbcdn.net/hphotos-ash2/536308_117291111763353_2099285125_n.jpg"))
  {
  element.src="http://rlv.zcache.com/want_to_know_more_about_me_just_ask_necklace-r822e46b8f4974741adcdb7b8309da731_fkoez_8byvr_324.jpg";
  }
else
  {
  element.src="https://scontent-a-lga.xx.fbcdn.net/hphotos-ash2/536308_117291111763353_2099285125_n.jpg";
  }
}

function mouseOver3()
{
element=document.getElementById('jingwei_image2')
element.src ="http://rlv.zcache.com/want_to_know_more_about_me_just_ask_necklace-r822e46b8f4974741adcdb7b8309da731_fkoez_8byvr_324.jpg";
}
function mouseOut3()
{
element=document.getElementById('jingwei_image2')
element.src="https://scontent-a-lga.xx.fbcdn.net/hphotos-ash2/536308_117291111763353_2099285125_n.jpg";
}

function change_head_banner_image4()
{
element=document.getElementById('shengwei_image')
if (element.src.match("https://scontent-b-lga.xx.fbcdn.net/hphotos-frc3/379576_539493012763477_151713091_n.jpg"))
  {
  element.src="http://rlv.zcache.com/want_to_know_more_about_me_just_ask_necklace-r822e46b8f4974741adcdb7b8309da731_fkoez_8byvr_324.jpg";
  }
else
  {
  element.src="https://scontent-b-lga.xx.fbcdn.net/hphotos-frc3/379576_539493012763477_151713091_n.jpg";
  }
}


function mouseOver4()
{
element=document.getElementById('shengwei_image2')
element.src ="http://rlv.zcache.com/want_to_know_more_about_me_just_ask_necklace-r822e46b8f4974741adcdb7b8309da731_fkoez_8byvr_324.jpg";
}
function mouseOut4()
{
element=document.getElementById('shengwei_image2')
element.src="https://scontent-b-lga.xx.fbcdn.net/hphotos-frc3/379576_539493012763477_151713091_n.jpg";
}


function validate_required(field,alerttxt)
{
with (field)
  {
  if (value==null||value=="")
    {alert(alerttxt);return false}
  else {return true}
  }
}



function validate_required(field,alerttxt)
{
with (field)
  {
  if (value==null||value=="")
    {alert(alerttxt);return false}
  else {return true}
  }
}

function validate_form(thisform)
{
with (thisform)
  {
  if (validate_required(username," correct username and password must be provided!")==false|| validate_required(password," correct username and password must be provided!")==false)
    {username.focus();return false}
  }
}




</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">
</script>




<div id="container">
<div id="header">
<b>
Project 1,
<?php 
date_default_timezone_set('America/New_York');
echo "Today is ".date("Y/m/d").", ";
$d=date("D");
if ($d=="Fri")
  echo "Have a nice weekend!"; 
elseif ($d=="Sun")
  echo "Have a nice Sunday!"; 
else
  echo "Have a nice day!";
?>
<img src="http://upload.wikimedia.org/wikipedia/commons/f/fb/Smile.gif" align="center"/>
</b>

<h1 align="center" >
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWYUwfrX7qNQOTvnRoNq2MkIDYtvphyYzjJp7OR1MStEcBr8xc" />
</h1>
<h2 align="center">founded on Sep.21,2013 @ TCOM 514 Web Technologies, Architectures and Integration</h2>








<p>
<img id="sitian_image" onclick="change_head_banner_image1()" src="https://scontent-b-lga.xx.fbcdn.net/hphotos-prn1/282034_118407628309822_841315472_n.jpg"width="154"height="142"/>

<img id="hanfei_image" onclick="change_head_banner_image2()" src="https://scontent-b-lga.xx.fbcdn.net/hphotos-frc3/576873_100412556784295_411476178_n.jpg"width="154"height="142"/>

<img id="jingwei_image" onclick="change_head_banner_image3()" src="https://scontent-a-lga.xx.fbcdn.net/hphotos-ash2/536308_117291111763353_2099285125_n.jpg"width="154"height="142"/>

<img id="shengwei_image" onclick="change_head_banner_image4()"src="https://scontent-b-lga.xx.fbcdn.net/hphotos-frc3/379576_539493012763477_151713091_n.jpg"width="154"height="142"/>

<img id="sitian_image2" onmouseover="mouseOver()" onmouseout="mouseOut()" src="https://scontent-b-lga.xx.fbcdn.net/hphotos-prn1/282034_118407628309822_841315472_n.jpg"width="154"height="142"/>

<img id="hanfei_image2" onmouseover="mouseOver2()" onmouseout="mouseOut2()" src="https://scontent-b-lga.xx.fbcdn.net/hphotos-frc3/576873_100412556784295_411476178_n.jpg"width="154"height="142"/>

<img id="jingwei_image2" onmouseover="mouseOver3()" onmouseout="mouseOut3()" src="https://scontent-a-lga.xx.fbcdn.net/hphotos-ash2/536308_117291111763353_2099285125_n.jpg"width="154"height="142"/>
<img id="shengwei_image2" onmouseover="mouseOver4()" onmouseout="mouseOut4()" src="https://scontent-b-lga.xx.fbcdn.net/hphotos-frc3/379576_539493012763477_151713091_n.jpg"width="154"height="142"/>
</p>


</div>

<div id="transition">

<p>
<form method="post" action="private_page.php"  onsubmit="return validate_form(this)">
<i id="user">Username:</i>
<input type="text" name="username">
<br>
<i id="pass">Password:</i>
<input type="password" name="password">
<br>
<button type="submit" onclick="alert('Welcome Back! Fantastic 4')" name="login" >LOG IN</button>
</form>
<form method="post" action="registration.php">
<button type="submit" >SIGN UP</button>
</form>
</p>
</div>


<div id="content1">
<pre>
<big>Sitian Cheng</big>
<a href="http://localhost/~almightyeric/sitian_cheng.html">
<img border="0" src="https://scontent-b-lga.xx.fbcdn.net/hphotos-prn1/282034_118407628309822_841315472_n.jpg" width="254"height="242"/>
</a>
</pre>
</div>

<div id="content2">
<pre>
<big>Hanfei Sun</big>
<a href="http://localhost/~almightyeric/hanfei_sun.html">
<img border="0" src="https://scontent-b-lga.xx.fbcdn.net/hphotos-frc3/576873_100412556784295_411476178_n.jpg" width="254"height="242"/>
</a>
</pre>
</div>

<div id="content3">
<pre>
<big>Jingwei Chen</big>
<a href="http://localhost/~almightyeric/jingwei_chen.html">
<img border="0" src="https://scontent-a-lga.xx.fbcdn.net/hphotos-ash2/536308_117291111763353_2099285125_n.jpg" width="254"height="242"/>
</a>
</pre>
</div>

<div id="content4">
<pre>
<big>Shengwei Zhao</big>
<a href="http://localhost/~almightyeric/shengwei_zhao.html">
<img border="0" src="https://scontent-b-lga.xx.fbcdn.net/hphotos-frc3/379576_539493012763477_151713091_n.jpg" width="284"height="242"/>
</a>
</pre>
</div>



<div id="footer">
COPYRIGHT &#169; 2013 Fantastic 4. ALL RIGHTS RESERVED.
</div>

</div>

</body>
</html>