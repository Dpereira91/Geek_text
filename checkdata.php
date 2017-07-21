<?php

	$link = mysqli_connect("localhost", "root", "", "geek_text");


	if(isset($_POST['id'])){
	 	$name=$_POST['id'];
		$checkdata=" SELECT id FROM user WHERE id='$name' ";

		 $query=mysqli_query($link, $checkdata);

	 	if(mysqli_num_rows($query)>0){
	  		echo "User Name Already Exist";
	 	} else {
	 		echo "OK";
	 	}
	 	exit();
	}

//echo "OK";
?>