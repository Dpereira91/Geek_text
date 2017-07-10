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

		.hidden-element{
			width: 0px;
			height: 0px;
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

<div class="row"> 
    <div class="col-md-2 col-md-offset-5">
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

		<p style="margin-left: 20; margin-top: 20;"><input name="nickname" type="text" value="<?php echo( htmlspecialchars( $row['nickname'] ) ); ?>" placeholder="Nickname"/></p>
		<p style="margin-left: 20;"><input name="email" type="text" value="<?php echo( htmlspecialchars( $row['email'] ) ); ?>" placeholder="email"/></p>
		<input style="margin-left: 20;" type="submit" value="Save Changes" class="btn btn-success">
		</form>	
    </div>
</div>


	<!-- <div class="line-divider"></div> -->
	<br><br>
<!-- *************************************************************************************************************************************************** -->
<!--Address Section-->
<!-- *************************************************************************************************************************************************** -->



<div class="container" style="margin-left: 10;">
  <h2>Account Information</h2>
  <p>Navigate through the tabs to update your personal information</p>

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#addresses">Address Preferences</a></li>
    <li><a data-toggle="tab" href="#creditCard">Credit Card Preferences</a></li>
  </ul>

  <div class="tab-content">

  	<!-- *************************-->
	<!--Addresses section-->
	<!-- *************************-->
    <div id="addresses" class=" tab-pane fade in active">
      <h4>Shipping / Billing Address</h4>
      <p>Add new address. Review and update</p>

      <!-- Add new Address -->
	  <div class="container"> 
			<form action="add_address.php" method="post">
				<table class="table table-striped">
				<p>
					<tbody>
					<td><input type="text" name="street" placeholder="Street Address"></td>
					<td><input type="text" name="city" placeholder="City"></td>
					<td><input type="text" name="state" placeholder="State Abbreviation"></td>
					<td><input type="text" name="zip" placeholder="Zip Code"></td>
					<td><input style="margin-left: 20;" type="submit" value="Add Address" class="btn btn-success"></td>
					</tbody>	
				</p>
			</table>
			</form>
		</div>


		<!-- Existing Address -->
		<?php
			$sql = "SELECT * FROM shipping WHERE id='$id'";
			$result1 = mysqli_query($link, $sql);
			$count=mysqli_num_rows($result1);

			if ($count != 0){
				include("existing_addresses.php");
			}
		?>
      </div>

	<!-- *************************-->
	<!--Credit Card section-->
	<!-- *************************-->
    <div id="creditCard" class="tab-pane fade">
      <h4>Credit Card</h4>
      <p>Enter your credit card preferences</p>


	<!-- new credit card form -->
	<p><button id="addCardButton" class="btn btn-success">Add New Card</button></p>
	<form id="enterNewCard" action="add_card.php" method="post" style="display:none;">
	<h5 style="margin-left: 20;"> New Card Details</h5>
	<?php include("credit_card_form.php");?>


	<!-- existing credit card form -->

	<?php
		$card_sql = "SELECT * FROM credit_card WHERE id='$id'";
		$result2 = mysqli_query($link, $card_sql);
		// $row2 = mysqli_fetch_array( $result2 );

		$count=mysqli_num_rows($result2);

		if ($count != 0){
			include("existing_cards.php");
		}
	?>
    </div>   

  </div>
</div>

<br /><br /><br /><br /><br /><br />
<div id="deleteBtn"><input type="submit" name="action" value="Deactivate Account" class="btn btn-danger"></div>

<script>
// <!-- JQuery function to unhide form to add a new credit card on button click-->
	$(document).ready(function(){
	    $("#addCardButton").click(function(){
	        $("#enterNewCard").show();
	        $("#addCardButton").hide();
	        $("#addNewCreditCard").show();
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


	//function to select preferred address through a radio button
	var radioButton = $("input.preferred-address");
	radioButton.click(function(){
	  	var thisButton = $(this);
	  	
	    if(thisButton.val() == "0"){
	      thisButton.val("1");
	        $("#address_table").find(".preferred-address").each(function() {
	          $(this).val("0");
	          $(this).prop("checked", false);
	        }); 
	      thisButton.val("1");
	      thisButton.prop("checked", true);
	    }

	});

	function runDeleteAction() {
		window.location = './delete_user.php';
	}

	var deleteButton = $("#deleteBtn");
	deleteButton.click(function(){
		if (confirm('Are you sure you want to delete your account? This will remove all your information from the website. This action cannot be undone.')) { 
			runDeleteAction();
		}
	});


	});
</script>
</body>
</html>