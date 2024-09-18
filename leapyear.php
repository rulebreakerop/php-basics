<html>
<head>
<title>finding leap year with help of user input</title>
</head>
<body>
<form method ="POST" action="leapyear.php">
a:<input type="text" name="a" placeholder"enter year">
<input type ="submit" >
</form>
<?php
$a=$_POST["a"];
if($a%4==0)
{
	echo"the year entered is leap year";
}
else
{
	echo"the year is not leap";
}
?>
</body>
</html>