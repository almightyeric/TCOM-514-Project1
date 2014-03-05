<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="index.css" />
<script src="http://api.html5media.info/1.1.6/html5media.min.js"></script>

<style type="text/css">
div#container
div#header {background-color:white;}
div#person {background-color:white; height:580px; width:500px; float:left;}
div#content {background-color:white;height:580px; width:300px;float:left;}
div#video {background-color:white;height:580px; width:400px;float:left;}
div#footer {background-color:#99bbbb; clear:both; text-align:center;}
</style>




</head>

<body>

<div id="container">


<?php
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("my_db", $con);

$result = mysql_query("SELECT * FROM student_info  WHERE username='shengwei'" );

echo "<table border='1'>
<tr>
<th>username</th>
<th>password</th>
<th>first_name</th> 
<th>last_name</th>
<th>gender</th>
<th>age</th>
<th>mobile_number</th>                          
<th>password</th>
<th>email</th>
<th>address</th>

</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['password'] . "</td>";
   echo "<td>" . $row['first_name'] . "</td>";
  echo "<td>" . $row['last_name'] . "</td>";
   echo "<td>" . $row['gender'] . "</td>";
  echo "<td>" . $row['age'] . "</td>";
   echo "<td>" . $row['mobile_number'] . "</td>";
  echo "<td>" . $row['password'] . "</td>";
   echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['address'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?>


<div id="header">
<h1 align="center">Shengwei Zhao </h1>


<a href="http://localhost/~almightyeric/"> <img border="0" src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcT1yU8C6rAH3maGHlJ5e1UA6gcUwPRqkTED-9WyjNfN-WyarEmr"/> 
</a>
&nbsp;
<a href="http://localhost/~almightyeric/sitian_cheng"> Sitian Cheng </a>
&nbsp;
<a href="http://localhost/~almightyeric/hanfei_sun"> Hanfei Sun </a>
&nbsp;
<a href="http://localhost/~almightyeric/jingwei_chen"> Jingwei Chen </a>
&nbsp;
<a href="http://localhost/~almightyeric/shengwei_zhao"> Shengwei Zhao </a>




</div>

<div id="person">
<p>

<img border="0" src="https://scontent-a-ord.xx.fbcdn.net/hphotos-prn2/984101_534662629913182_1535941077_n.jpg"width="460"height="560" />


</p>
</div>

<div id="content">
<h4>My Teammates</h4>
<ul type="disc">
 <li>Sitian Cheng</li>
 <li>Hanfei Sun</li>
 <li>Jingwei Chen</li>
</ul>  


<h4>2013 Fall Semester Courses</h4>
<ul type="square">
 <li>TCOM 514</li>
 <li>CIS 511</li>
 <li>TCOM 553</li>
</ul>

<h4>TCOM 514 Files</h4>

<ol>
 <li>Homework 1 
<ul>
    <li>Homework 1 Requirement</li>
    <li>Homework 1 Topic Proposal</li>
    <li>Homework 1 PPT </li>
 </ul>
 </li>

 <li>Project 1
 	<ul>
    <li>Project 1 Requirement</li>
    <li>Project 1 Topic Proposal</li>
    <li>Project 1 PPT </li>
 <ul>
</li>
</ol> 


</div>


<div id="video">


<b> Upload the files you need to store</b>

<form action="upload_file.php" method="post" enctype="multipart/form-data">
<input type="file" name="file" id="file" /> 
<input type="submit" name="submit" value="Submit" />
</form>

<hr/>
<b> The files you have stored</b>

<?php 
$base_dir = "upload/"; 
$fso = opendir($base_dir); 
//echo $base_dir."<hr/>" ; 
while($flist=readdir($fso)){ 
echo $flist."<br/>" ; 
} 
closedir($fso) 
?>































</div>


<div id="footer">
COPYRIGHT &#169; 2013 Fantastic 4. ALL RIGHTS RESERVED.
</div>

</div>
</body>
</html>