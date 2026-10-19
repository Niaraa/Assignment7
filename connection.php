
<?php
//Makes DB connection
$servername = "sql1.njit.edu";
$username = "na772";
$password = "Zyojz48-Zb7i7?E~esb4";
$dbname = "na772";
$con = mysqli_connect($servername,$username,$password,$dbname);
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
{
echo "CONNECTED ";
}
?>
