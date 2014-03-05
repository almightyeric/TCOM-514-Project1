<?php
$username=$_POST['username'];
$password=$_POST['password'];
if(isset($_POST['login'])) {
  
  if(isset($_POST['username'])&&$_POST['username']=='shengwei'&&isset($_POST['password'])&&$_POST['password']=='shengwei') {
    header("Location: http://localhost/~almightyeric/shengwei_zhao_private.php");
    exit();
  }

  else{

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
    if ($username==$row['username'] && $password==$row['password']) {
      
      echo " <h1>welcomback!      $username<h1>";
     
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
exit();

  }



      
    }

echo "</table>";
mysql_close($con);




echo " <h1>wrong username or password<h1>";



}


  }
    
?>

