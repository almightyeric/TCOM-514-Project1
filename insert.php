
<html>
<head>
<link rel="stylesheet" type="text/css" href="index.css" />
</head>
<body>
<a href="http://localhost/~almightyeric/"> <img border="0" src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcT1yU8C6rAH3maGHlJ5e1UA6gcUwPRqkTED-9WyjNfN-WyarEmr"/> 
</a>
&nbsp;
<a href="http://localhost/~almightyeric/sitian_cheng" >Sitian Cheng</a>
&nbsp;
<a href="http://localhost/~almightyeric/hanfei_sun"> Hanfei Sun </a>
&nbsp;
<a href="http://localhost/~almightyeric/jingwei_chen"> Jingwei Chen </a>
&nbsp;
<a href="http://localhost/~almightyeric/shengwei_zhao"> Shengwei Zhao </a>

<?php
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("my_db", $con);

$sql="INSERT INTO student_info (username, password, first_name,last_name,gender, age,mobile_number,email,address)
VALUES
('$_POST[username]','$_POST[password]','$_POST[first_name]','$_POST[last_name]','$_POST[gender]','$_POST[age]','$_POST[mobile_number]','$_POST[email]','$_POST[address]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "<h1>Congratulations! You've successfully submit your info</h1>";

?>

<?php
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("my_db", $con);

$result = mysql_query("SELECT * FROM student_info" );

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
</body>
</html>

