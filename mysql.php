<?php
$conn = @mysql_connect("localhost","root","root");
if (!$conn){
    die("连接数据库失败：" . mysql_error());
}

mysql_select_db("test", $conn);

$password ="asdas";

$sql = "INSERT INTO users(username, password)VALUES('asdas', '$password')";



if(!mysql_query($sql,$conn)){

    echo "添加数据失败：".mysql_error();
} 


else {
    echo "添加数据成功！";
}


if (mysql_query("CREATE DATABASE my_db",$conn))
  {
  echo "Database created";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }


?> 




<?php
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

if (mysql_query("CREATE DATABASE my_db",$con))
  {
  echo "Database created";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }

?>

<?php
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

// Create database
if (mysql_query("CREATE DATABASE my_db",$con))
  {
  echo "Database created";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }

// Create table in my_db database
mysql_select_db("my_db", $con);
$sql = "CREATE TABLE Persons 
(
personID int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(personID),
FirstName varchar(15),
LastName varchar(15),
Age int
)";

mysql_query($sql,$con);

?>
