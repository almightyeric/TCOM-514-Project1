<?php
if(isset($_POST['login'])) {
  if(isset($_POST['username'])&&$_POST['username']=='a'&&isset($_POST['password'])&&$_POST['password']=='b') {
    header("Location: http://localhost/~almightyeric/shengwei_zhao_private.php");
    exit();
  }else
    echo "请输入正确的用户名和口令";
}
date_default_timezone_set('America/New_York');

echo "Today is ".date("Y/m/d");
?>

<html>
<body>

<form method="post" action="<?= $PHP_SELF ?>">
用户名<input type="text" name="username">
口令<input type="password" name="password">
<input type="submit" name="login">
</form>




<!--

<form action="test1.php" method="post">
Name: <input type="text" name="name" />
Age: <input type="text" name="age" />
<input type="submit" />
</form>

<form action="test1.php" method="get">
Name1: <input type="text" name="name" />
Age1: <input type="text" name="age" />
<input type="submit" />
</form>
//-->
</body>
</html>