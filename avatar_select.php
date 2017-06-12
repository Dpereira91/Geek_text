<html lang="en">
<head>
<meta charset="UTF-8">
<title>Change Avatar</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php include("./header.php"); ?>
<form action="" method="post">
<?php
if(isset($_POST['submit'])){
	if(isset($_POST['item'])){
			$link = mysqli_connect("localhost", "root", "", "geek_text");
			$id = $_SESSION['username'];
			$val = $_POST['item'];
			$sql = "UPDATE user SET avatar='$val' WHERE id='$id'";
			if(mysqli_query($link, $sql)){
				header("location:account.php");
				//echo("<script>location.href = 'account.php';</script>");
				exit();
			}
		}
	}
?>
	<p style="margin-top: 20;">
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
	</p>
	
	<p style="margin-top: 20;">
	<!--RADIO 5-->
	<input type="radio" class="radio_item" value="4" name="item" id="radio5">
	<label class="label_item" for="radio5"><img src="avatar_icon/ow.png" border="1px" style="width:100px;height:100px; margin-left: 20;"></label>

	<!--RADIO 6-->
	<input type="radio" class="radio_item" value="5" name="item" id="radio6">
	<label class="label_item" for="radio6"><img src="avatar_icon/ow1.png" border="1px" style="width:100px;height:100px; margin-left: 20;"></label>
	
	<!--RADIO 7-->
	<input type="radio" class="radio_item" value="6" name="item" id="radio7">
	<label class="label_item" for="radio7"><img src="avatar_icon/ow2.png" border="1px" style="width:100px;height:100px; margin-left: 20;"></label>
	
	<!--RADIO 8-->
	<input type="radio" class="radio_item" value="7" name="item" id="radio8">
	<label class="label_item" for="radio8"><img src="avatar_icon/ow3.png" border="1px" style="width:100px;height:100px; margin-left: 20;"></label>
	</p>
	
	<p style="margin-top: 20;">
	<!--RADIO 9-->
	<input type="radio" class="radio_item" value="8" name="item" id="radio9">
	<label class="label_item" for="radio9"><img src="avatar_icon/lol1.png" border="1px" style="width:100px;height:100px; margin-left: 20;"></label>

	<!--RADIO 10-->
	<input type="radio" class="radio_item" value="9" name="item" id="radio10">
	<label class="label_item" for="radio10"><img src="avatar_icon/lol2.png" border="1px" style="width:100px;height:100px; margin-left: 20;"></label>
	
	<!--RADIO 11-->
	<input type="radio" class="radio_item" value="10" name="item" id="radio11">
	<label class="label_item" for="radio11"><img src="avatar_icon/lol3.png" border="1px" style="width:100px;height:100px; margin-left: 20;"></label>
	
	<!--RADIO 12-->
	<input type="radio" class="radio_item" value="11" name="item" id="radio12">
	<label class="label_item" for="radio12"><img src="avatar_icon/lol4.png" border="1px" style="width:100px;height:100px; margin-left: 20;"></label>
	</p>

	<input type="submit" name="submit" value="Change" style="margin-left: 20;">

</form>
</body>
</html>