<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Account</title>

	<style>
		.table th.fit,
		.table td.fit{
			font-family: Calibri (Body);
			font-size: 14px;
			white-space: nowrap;
			width: 1%;
		}
		.line-divider {
			width: auto;
			height: 1px;
			margin-left: 20px;
			margin-right: 20px;
			margin-top: 50px;
			background-color: #AEB6BF;
		}
	</style>
	</head>
<body>

<?php
	include("header.php");
	$link = mysqli_connect("localhost", "root", "", "geek_text");
	$id = $_SESSION['username'];
	$sql = "SELECT * FROM user WHERE id='$id'";
	$result=mysqli_query($link, $sql);
		
	$row = mysqli_fetch_array( $result );
?>

<h2 style="margin-left: 20;">Account Information</h2>

<form action="update_profile.php" method="post">
	<?php
		if($row['avatar'] == '0'){
			echo'<a href="./avatar_select.php"><img src="avatar_icon/avatar.png" border="1px" style="width:150px;height:150px; margin-left: 20;"></a>';
		}
		elseif($row['avatar'] == '1'){
			echo'<a href="./avatar_select.php"><img src="avatar_icon/avatar1.png" border="1px" style="width:150px;height:150px; margin-left: 20;"></a>';
		}
		elseif($row['avatar'] == '2'){
			echo'<a href="./avatar_select.php"><img src="avatar_icon/avatar2.png" border="1px" style="width:150px;height:150px; margin-left: 20;"></a>';
		}
		elseif($row['avatar'] == '3'){
			echo'<a href="./avatar_select.php"><img src="avatar_icon/avatar3.png" border="1px" style="width:150px;height:150px; margin-left: 20;"></a>';
		}
		elseif($row['avatar'] == '4'){
			echo'<a href="./avatar_select.php"><img src="avatar_icon/ow.png" border="1px" style="width:150px;height:150px; margin-left: 20;"></a>';
		}
		elseif($row['avatar'] == '5'){
			echo'<a href="./avatar_select.php"><img src="avatar_icon/ow1.png" border="1px" style="width:150px;height:150px; margin-left: 20;"></a>';
		}
		elseif($row['avatar'] == '6'){
			echo'<a href="./avatar_select.php"><img src="avatar_icon/ow2.png" border="1px" style="width:150px;height:150px; margin-left: 20;"></a>';
		}
		elseif($row['avatar'] == '7'){
			echo'<a href="./avatar_select.php"><img src="avatar_icon/ow3.png" border="1px" style="width:150px;height:150px; margin-left: 20;"></a>';
		}
		elseif($row['avatar'] == '8'){
			echo'<a href="./avatar_select.php"><img src="avatar_icon/lol1.png" border="1px" style="width:150px;height:150px; margin-left: 20;"></a>';
		}
		elseif($row['avatar'] == '9'){
			echo'<a href="./avatar_select.php"><img src="avatar_icon/lol2.png" border="1px" style="width:150px;height:150px; margin-left: 20;"></a>';
		}
		elseif($row['avatar'] == '10'){
			echo'<a href="./avatar_select.php"><img src="avatar_icon/lol3.png" border="1px" style="width:150px;height:150px; margin-left: 20;"></a>';
		}
		elseif($row['avatar'] == '11'){
			echo'<a href="./avatar_select.php"><img src="avatar_icon/lol4.png" border="1px" style="width:150px;height:150px; margin-left: 20;"></a>';
		}
	?>

	<p style="margin-left: 20;"><input name="nickname" type="text" value="<?php echo( htmlspecialchars( $row['nickname'] ) ); ?>" placeholder="Nickname"/></p>
	<p style="margin-left: 20;"><input name="email" type="text" value="<?php echo( htmlspecialchars( $row['email'] ) ); ?>" placeholder="email"/></p>

	<h3 style="margin-left: 20;">Shipping / Billing Address</h3>
	
	<?php
		$sql = "SELECT * FROM shipping WHERE id='$id'";
		$result1 = mysqli_query($link, $sql);
		$row1 = mysqli_fetch_array( $result1 );
	?>
	
	<p style="margin-left: 20;">
		<input type="text" value="<?php echo( htmlspecialchars( $row1['street1'] ) ); ?>" name="street" placeholder="Street Address">
		<input type="text" value="<?php echo( htmlspecialchars( $row1['city'] ) ); ?>" name="city" placeholder="City">
		<input type="text" value="<?php echo( htmlspecialchars( $row1['state'] ) ); ?>" name="state" placeholder="State Abbreviation">
		<input type="text" value="<?php echo( htmlspecialchars( $row1['zip_code'] ) ); ?>" name="zip" placeholder="Zip Code">
		<label>Preferred</label>
	</p>
	
	<?php while( $row = mysqli_fetch_array( $result1 ) ){ ?>
    <p style="margin-left: 20;">
		<input type="text" value="<?php echo( htmlspecialchars( $row['street1'] ) ); ?>" placeholder="Street Address">
		<input type="text" value="<?php echo( htmlspecialchars( $row['city'] ) ); ?>" placeholder="City">
		<input type="text" value="<?php echo( htmlspecialchars( $row['state'] ) ); ?>" placeholder="State Abbreviation">
		<input type="text" value="<?php echo( htmlspecialchars( $row['zip_code'] ) ); ?>" placeholder="Zip Code">
	</p>
	<?php } ?>
	
	<input style="margin-left: 20;" type="submit" value="Save Changes">
</form>

<form action="add_address.php" method="post">
	<p style="margin-left: 20;">
		<input type="text" name="street" placeholder="Street Address">
		<input type="text" name="city" placeholder="City">
		<input type="text" name="state" placeholder="State Abbreviation">
		<input type="text" name="zip" placeholder="Zip Code">
		<input style="margin-left: 20;" type="submit" value="Add Address">
	</p>
</form>

<div class="line-divider"></div>

<!-- *************************************************************************************************************************************************** -->
<!--Credit Card section-->
<!-- *************************************************************************************************************************************************** -->

<br>
<br>
<h3 style="margin-left: 20;">Credit Card Preferences</h3>

<!-- Add new card -->
<script>
// <!-- JQuery function to unhide form to add a new credit card on button click-->
	$(document).ready(function(){
	    $("#addCardButton").click(function(){
	        $("#enterNewCard").show();
	        $("#addCardButton").hide();
	    });



	   	//function to select preferred credit card through a radio button
		var radioButton = $("input.preferred-select");
		radioButton.click(function(){
		  	var thisButton = $(this);
		  	
		    if(thisButton.val() == "N"){
		      thisButton.val("Y");
		        $("#card_table").find(".preferred-select").each(function() {
		          $(this).val("N");
		          $(this).prop("checked", false);
		        }); 
		      thisButton.val("Y");
		      thisButton.prop("checked", true);
		    }

		});

	});
</script>



<p><button id="addCardButton" style="margin-left: 20;" class="btn btn-success">Add New Card</button></p>
<!-- new credit card form -->
<?php include("credit_card_form.php");?>




	<?php
		$card_sql = "SELECT * FROM credit_card WHERE id='$id'";
		$result2 = mysqli_query($link, $card_sql);
		// $row2 = mysqli_fetch_array( $result2 );

		$count=mysqli_num_rows($result2);

		if ($count != 0){
			include("existing_cards.php");
		}
	?>

<br>
<br>

</body>
</html>