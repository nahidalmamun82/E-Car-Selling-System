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
		$pass  = $_POST['password'];
		$phnnmbr = $_POST['phone_number'];
		
		//echo "\n student Name: ".$s_nme."<br>";
		
		
			if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['phone_number']))
			{
			   $sql="insert into register (username,pass,phonenm) 
				values('$username','$pass','$phnnmbr')";
				if (mysqli_query($conn, $sql)) 
				{
					header('location:index.html');
					"<p>Successful</p>;";
				}
			}
	}
else
{
	header('location:signUp.html');
}

?>