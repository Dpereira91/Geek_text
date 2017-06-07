<html lang="en">
<head>
<meta charset="UTF-8">
<title>Change Avatar</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<?php include("./header.php"); ?>

<br></br>

<form action="" method="post">
	<!--RADIO 1-->
	<input type="radio" class="radio_item" value="0" name="item" id="radio1">
	<label class="label_item" for="radio1"><img src="avatar_icon/avatar.png" border="1px" style="width:100px;height:100px; margin-left: 20;"></label>

	<!--RADIO 2-->
	<input type="radio" class="radio_item" value="1" name="item" id="radio2">
	<label class="label_item" for="radio2"><img src="avatar_icon/avatar1.png" border="1px" style="width:100px;height:100px; margin-left: 20;"></label>

	<!--RADIO 3-->
	<input type="radio" class="radio_item" value="2" name="item" id="radio3">
	<label class="label_item" for="radio3"><img src="avatar_icon/avatar2.png" border="1px" style="width:100px;height:100px; margin-left: 20;"></label>
	
	<!--RADIO 4-->
	<input type="radio" class="radio_item" value="3" name="item" id="radio4">
	<label class="label_item" for="radio4"><img src="avatar_icon/avatar3.png" border="1px" style="width:100px;height:100px; margin-left: 20;"></label>

	<br></br>
	<br></br>
	
	<!--RADIO 5-->
	<input type="radio" class="radio_item" value="4" name="item" id="radio5">
	<label class="label_item" for="radio5"><img src="avatar_icon/ow.png" border="1px" style="width:100px;height:100px; margin-left: 20;"></label>

	<!--RADIO 6-->
	<input type="radio" class="radio_item" value="5" name="item" id="radio6">
	<label class="label_item" for="radio6"><img src="avatar_icon/ow1.png" border="1px" style="width:100px;height:100px; margin-left: 20;"></label>
	
	<!--RADIO 1-->
	<input type="radio" class="radio_item" value="6" name="item" id="radio7">
	<label class="label_item" for="radio7"><img src="avatar_icon/ow2.png" border="1px" style="width:100px;height:100px; margin-left: 20;"></label>
	
	<!--RADIO 2-->
	<input type="radio" class="radio_item" value="7" name="item" id="radio8">
	<label class="label_item" for="radio8"><img src="avatar_icon/ow3.png" border="1px" style="width:100px;height:100px; margin-left: 20;"></label>
	
	<br></br>
	<br></br>

	<input type="submit" name="submit" value="Change" style="margin-left: 20;">
	
	<?php
		if (isset($_POST['submit'])){
			if(isset($_POST['item'])){
				$link = mysqli_connect("localhost", "root", "", "geek_text");
				$id = $_SESSION['username'];
				$val = $_POST['item'];
				$sql = "UPDATE user SET avatar='$val' WHERE id='$id'";
				if(mysqli_query($link, $sql)){
					header("location:account.php");
					exit;
				}
				else{
					echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
				}
			}
		}
	?>
</form>

</body>
</html>