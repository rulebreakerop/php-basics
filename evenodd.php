<html>
<head>
<title>checking weather number is even or odd through user input</title>
</head>
<body>
<form  method ="POST" action="evenodd.php">
a:<input type="text" name="uservalue" placeholder="number enter kar oye">
<input type="submit">
</form>
<?php
$a=$_POST["uservalue"]; 
if($a%2==0)
{
echo"the number is even ";

}
else
{
echo"the number is odd ";
}
?>
</body>
</html>