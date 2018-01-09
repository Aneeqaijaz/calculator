<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php


if(isset($_POST['submit']))
{
$num1= $_POST['num1'];
$num2= $_POST['num2'];
$operator=$_POST['submit'];

switch($operator)
{
case "+":
$res = $num1+$num2;
echo $res;
break;

case "-":
$res = $num1-$num2;
echo $res;
break;

case "*":
$res = $num1*$num2;
echo $res;
break;

case "/":
$res = $num1/$num2;
echo $res;
break;

}
}
?>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input type="text" name="num1 " placeholder="first num"><br />
<input type="text" name="num2 " placeholder="second num"><br />
<input type = "submit" name ="submit" value= "+"  />
<input type = "submit" name ="submit" value= "-"  />
<input type = "submit" name ="submit" value= "*"  />
<input type = "submit" name ="submit" value= "/"  />
</form>
</body>
</html>