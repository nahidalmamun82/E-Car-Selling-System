<?php 
	require('connection.php');
	session_start();
	
	if(isset($_POST['submit']))
	{
		$id=$_POST['age'];
		$carbrand = $_POST['nm'];
		$serialno  = $_POST['serial'];
		$cc = $_POST['cc'];
		$ac  = $_POST['ac'];
		$price = $_POST['price'];
		
		//echo "\n student Name: ".$id."<br>";
		
		
		if(isset($_POST['nm']) && isset($_POST['serial']) && isset($_POST['cc']) 
			&& isset($_POST['ac']) && isset($_POST['price']))
		{
		   $sql="UPDATE `car_info` SET `car_brand` = '$carbrand',  serial_no='$serialno',
			`cc` = '$cc',  ac='$ac', price='$price' WHERE ID = '$id' ";
			if (mysqli_query($conn, $sql)) 
			{
				header('location:cars.php');
			}
		}
	}
	else
	{
		header('location:edit.html');
	} 
	
	/* $sql=mysqli_query($conn,"UPDATE `ch_ques_1` SET `ques_nm` = '$ques', `optn_1` = '".$option[1]."' , `optn_2` = '".$option[2]."', `optn_3` = '".$option[3]."', `optn_4` = '".$option[4]."', answer='$answer'  WHERE id = '$idedit' ");
	if($sql){
		echo "<p style = 'color : green'> Update SuccessFul</p>"; 
	} else echo "<p style = 'color : red'> Update was not Successfull</p>"; */
?>

<!-- <a class="btn btn-primary" style = "color: #ffffff; text-decoration: none;" href="../test_show/test_1_show.php"> Go to View Page </a> -->
 