<?php
require 'connection.php';
if ($conn) 
	{
		echo "Database Successfully Connected";
	}
else 
	{
		echo "DataBase Connection Error: " . mysqli_connect_error();
	}
	
	
if(isset($_POST['submit']))
	{
	    $username = $_POST['username'];
		$pass = $_POST['password'];
		//echo $email." ".$pass;
		$sql=mysqli_query($conn,"select * from register where username='$username' && pass='$pass' ");
		//$row=mysqli_fetch_array($sql);
		if(mysqli_num_rows($sql)>0)
		{
			//$_SESSION["email"] =$email;
			//$_SESSION["user"] =$row['s_name'];
			echo $_SESSION["user"];
			header('location:done.html');			
		}	
		else
			header('location:login.php ');
	}	
?>