<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create Account</title>
	<link rel="stylesheet" type="text/css" href="style.css"> </link>
</head>
<body>

<?php include("header.php");?>

<p style="font-size:3.5em; margin-left: 50"><b>Create Your Account</b></p>
<hr>
<br>
<form name="myForm" id="myForm" action="insert_account.php" method="post">
	<p style="margin-left: 50;"><input type="text" name="id" id="id" placeholder="User ID" required>*<spam class="input-error" id="id-error"></spam></p>
	<br>
	<p style="margin-left: 50;"><input type="password" name="pw" id="pw" placeholder="Enter Password" required>*<spam class="input-error" id="pw-error"></spam></p>
	<br>
	<p style="margin-left: 50;"><input type="password" name="confirm-pw" id="confirm-pw" placeholder="Confirm Password" required>*<spam class="input-error" id="confirm-pw-error"></spam></p>
	<br>
	<p style="margin-left: 50;"><input type="text" name="name" id="name" placeholder="Name" required>*<spam class="input-error" id="name-error"></spam></p>
	<br>
	<p style="margin-left: 50;"><input type="text" name="nickname" id="nickname" placeholder="Nickname" required>*<spam class="input-error" id="nickname-error"></spam></p>
	<br>
	<p style="margin-left: 50;"><input type="text" name="email" id="email"placeholder="E-mail" required>*<spam class="input-error" id="email-error"></spam></p>
	<br>
	<p style="margin-left: 50;"><input type="text" name="street1" id="street1" placeholder="Street Address 1" required>*<spam class="input-error" id="street1-error"></spam></p>
	<br>
	<p style="margin-left: 50;"><input type="text" name="street2" id="street2" placeholder="Street Address 2" required><spam class="input-error" id="street2-error"></spam></p>
	<br>
	<p style="margin-left: 50;"><input type="text" name="city" id="city" placeholder="City" required>*<spam class="input-error" id="city-error"></spam></p>
	<br>
	<p style="margin-left: 50;"><label>State</label>
	<select name="state" id="state">
		<option value="AL">AL</option>
		<option value="AK">AK</option>
		<option value="AZ">AZ</option>
		<option value="AR">AR</option>
		<option value="CA">CA</option>
		<option value="CO">CO</option>
		<option value="CT">CT</option>
		<option value="AL">AL</option>
		<option value="DE">DE</option>
		<option value="FL">FL</option>
		<option value="GA">GA</option>
		<option value="HI">HI</option>
		<option value="ID">ID</option>
		<option value="IL">IL</option>
		<option value="IN">IN</option>
		<option value="IA">IA</option>
		<option value="KS">KS</option>
		<option value="KY">KY</option>
		<option value="LA">LA</option>
		<option value="ME">ME</option>
		<option value="MD">MD</option>
		<option value="MA">MA</option>
		<option value="MI">MI</option>
		<option value="MN">MN</option>
		<option value="MS">MS</option>
		<option value="MO">MO</option>
		<option value="MT">MT</option>
		<option value="NE">NE</option>
		<option value="NV">NV</option>
		<option value="NH">NH</option>
		<option value="NJ">NJ</option>
		<option value="NM">NM</option>
		<option value="NY">NY</option>
		<option value="NC">NC</option>
		<option value="ND">ND</option>
		<option value="OH">OH</option>
		<option value="OK">OK</option>
		<option value="OR">OR</option>
		<option value="PA">PA</option>
		<option value="RI">RI</option>
		<option value="SC">SC</option>
		<option value="SD">SD</option>
		<option value="TN">TN</option>
		<option value="TX">TX</option>
		<option value="UT">UT</option>
		<option value="VT">VT</option>
		<option value="VA">VA</option>
		<option value="WA">WA</option>
		<option value="WV">WV</option>
		<option value="WI">WI</option>
		<option value="WY">WY</option>
	</select>
	<br>
	<br>
	<p style="margin-left: 50;"><input type="text" name="zip" id="zip" placeholder="Zip Code" required>*<spam class="input-error" id="zip-error"></spam></p>	
	<br>
	<p style="margin-left:50;">By creating an account you are agreeing to our 
	<a href="./terms.php">Terms of Use</a> and 
	our <a href="./privacy.php">Privacy Policy</a>.</p>
	<br>
	<p><input style="margin-left: 50;" type="submit" class="btn btn-success" id="create-account" value="Create Account"></p>

</form>

<script>

 //***************************************************************
 //These scripts checks input everytime the user clicks the input box
  //***************************************************************

	var canSubmitArray = {id:true, pw:true, confirmPw:true , nameUser:true, email:true,
						street1:true, city:true, zipCode:true};
	var id = $("#id");
	var pw = $("#pw");
	var confirmPw = $("#confirm-pw");
	var nameUser = $("#name");
	var nickname = $("#nickname");
	var email = $("#email");
	var street1 = $("#street1");
	var city = $("#city");
	var zipCode = $("#zip");
	var upperCase= new RegExp('[A-Z]');
	var numbers = new RegExp('[0-9]');

	
  	//ID validation
  	$("#id").on("click keydown keyup change", function(){

  		var name= $("#id").val();

  		//id validation
  		if (id.val().length == 0){
  			$("#id-error").text(" Required field");
  			canSubmitArray.id = false;
  		} else if(alphanumeric(id.val()) == false){
  			$("#id-error").text(" User ID has to be alphanumeric");
	    	canSubmitArray.id = false;
		} 
		else if(name){
		    $.ajax({
		      	type: 'post',
		      	url: 'checkdata.php',
		      	data: {id:name,},
		      	success: function (response) {
		       		 $( '#id' ).html(response);
		        	if(response !="OK"){
		        		$("#id-error").text("User ID already in use");
		        		canSubmitArray.id = false;	
		       		} 
		       		else {
						$("#id-error").text("Available");
	  					canSubmitArray.id = true;
		      		}
		      	}
	    	});
	 	} 
  	});

  	//event constantly checks the pw field and verifies input
	$("#pw").on("click keydown keyup change", function(){
		if (pw.val().length < 8){
  			$("#pw-error").text(" Min length is 8 characters. \n Password must contain at least one uppercase letter and one digit");
   			canSubmitArray.pw = false;
  		} else if (!(pw.val().match(upperCase)) || !(pw.val().match(numbers))) {
  			$("#pw-error").text(" Password must contain at least one uppercase and one digit");
  			canSubmitArray.pw = false;
 		} else{
	  		$("#pw-error").text("");
	  		canSubmitArray.pw = true;
		}

	});



	//name validation
  	$("#confirm-pw").change(function(){
  		if (confirmPw.val().length == 0){
  			$("#confirm-pw-error").text(" Required field");
  			canSubmitArray.confirmPw = false;
  		} else {
  			$("#confirm-pw-error").text("");
	  		canSubmitArray.confirmPw = true;
		}
  	});		

  	//name validation
  	$("#name").change(function(){
  		if (nameUser.val().length == 0){
  			$("#name-error").text(" Required field");
  			canSubmitArray.name = false;
  		} else if (alpha(nameUser.val()) == false){
  			$("#name-error").text(" Name must be composed only of letters");
   			 canSubmitArray.name = false;
		}else{
	  		$("#name-error").text("");
	  		canSubmitArray.name = true;
		}
  	});
 
 	//nickname validation
  	$("#nickname").change(function(){
  		if (nickname.val().length == 0){
  			$("#nickname-error").text(" Required field");
  			canSubmitArray.nickname = false;
  		} else if(alphanumeric(nickname.val()) == false){
  			$("#nickname-error").text(" Nickname has to be alphanumeric");
	    	canSubmitArray.nickname = false;
		} else{
	  		$("#nickname-error").text("");
	  		canSubmitArray.nickname = true;
		}
  	}); 

 	//email validation
  	$("#email").change(function(){
  		if (email.val().length == 0){
  			$("#email-error").text(" Required field");
  			canSubmitArray.email = false;
  		} else if(isEmail(email.val()) == false){
  			$("#email-error").text(" Invalid Email");
	    	canSubmitArray.email = false;
		} else{
	  		$("#email-error").text("");
	  		canSubmitArray.email = true;
		}
  	}); 

  	//address validation
	$("#street1").change(function(){
  		if (street1.val().length == 0){
  			$("#street1-error").text(" Required field");
  			canSubmitArray.street1 = false;
  		}
  		else{
  			$("#street1-error").text("");
  			canSubmitArray.street1 = true;
  		} 
  	});


  	//city validation
  	$("#city").change(function(){
  		if (city.val().length == 0){
  			$("#city-error").text(" Required field");
  			canSubmitArray.city = false;
  		} else if (alpha(city.val()) == false){
  			$("#city-error").text(" City must be composed only of leters");
   			 canSubmitArray.city = false;
		}else{
	  		$("#city-error").text("");
	  		canSubmitArray.city = true;
		}
  	});

  	 //zip code validation
  	$("#zip").change(function(){
  		if (zipCode.val().length == 0){
  			$("#zip-error").text(" Required field");
  			canSubmitArray.zip = false;
  		} else if (!(zipCode.val().match(numbers))){
  			$("#zip-error").text(" Zip Code must be composed only of number");
   			 canSubmitArray.zip = false;
		} else if (zipCode.val().length != 5){
  			$("#zip-error").text(" Invalid zip code");
  			canSubmitArray.zip = false;
		}else{
	  		$("#zip-error").text("");
	  		canSubmitArray.zip = true;
		}
  	});
 

	//action to be performed on button click
	$("#create-account").click(function(event){
 		 event.preventDefault();

 		 canSubmit = true;
  
  		// Blank ID Validation
   		if (id.val().length == 0){
  			$("#id-error").text(" Required field");
  			canSubmit = false;
		}
  
		//PW Validation
		if(pw.val().length == 0){
		  	$("#pw-error").text(" Required field");
		    canSubmit = false;
		} 

		if(confirmPw.val().length == 0){
			$("#confirm-pw-error").text(" Required field");
			canSubmit = false;
		} else if(pw.val() != confirmPw.val()){
			$("#confirm-pw-error").text(" Password does not match");
			canSubmit = false;
		}
  
	   	//Name Validation
	  	if(nameUser.val().length == 0){
	  		$("#name-error").text(" Required field");
	  		canSubmit = false;
  		}

  		//nickname
   		if (nickname.val().length == 0){
  			$("#nickname-error").text(" Required field");
  			canSubmit= false;
		}  

		//emai validation
   		if (email.val().length == 0){
  			$("#email-error").text(" Required field");
  			canSubmit = false;
		} 

		//address validation
  		if (street1.val().length == 0){
  			$("#street1-error").text(" Required field");
  			canSubmit = false;
  		} 

  		//city validation
   		if (city.val().length == 0){
  			$("#city-error").text(" Required field");
  			canSubmit= false;
		}

		//zip code validation
   		if (zipCode.val().length == 0){
  			$("#zip-error").text(" Required field");
  			canSubmit = false;
		}

		//if all feilds are completed correctly, then submit

		var canSubFinal = true;
		for (var i in canSubmitArray){
			if(canSubmitArray[i] == false){
				canSubFinal = false;
			}
		}

  		if(canSubFinal == true && canSubmit == true){
   			$("#myForm").submit();
   			alert("Account created successfully. Welcome to GeekText!");
 		 }
	});

	function alphanumeric(inputtxt){  
	 var letterNumber = /^[0-9a-zA-Z]+$/;  
	 if(inputtxt.match(letterNumber)){  
	   return true;  
	  }else{    
	   return false;   
	  }  
	}

	function alpha(inputtxt){  
	 	var letterNumber = /^[a-zA-Z() ]+$/;  
	 	if(inputtxt.match(letterNumber)){  
	  		return true;  
	 	}else{    
	   		return false;   
	  	}
	  	canSubmit = true;
	}

	function isEmail(email) {
  		var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  		if (email.match(regex)){
  			return true;
  		} else {
  			return false;
  		}
	}

</script>

</body>
</html>
