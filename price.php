<!DOCTYPE html>
<html>
<head>
<title>bill</title>
</head>
<body>
<h1>total bill is:</h1>
<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{
echo "connection not made";
}
if(!mysqli_select_db($con,'bill'))
{
echo "and database not selected"."<br>";
}
$units=$_POST['unit'];
if($units<0)
{
echo "null";
return 0;
}
if($units<=50)
{
echo "the price per unit is 9, the bill is:";
$bill=9*$units;
}
else if($units<=100 && $units>=50)
{
echo "the price per unit is 12,the bill is:";
$bill=12*$units;
}
else
{
echo "the price per unit is 15,the bill is:";
$bill=15*$units;
}
echo $bill;
$sql="INSERT INTO Bill(units,bill) VALUES ('$units','$bill')";
mysqli_query($con,$sql);
?>
<form action="./">
<button>back</button>
</form>
</body>
</html>
