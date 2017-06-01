<?php 
function validateInput($key, $value){
	if ($key == "number"){
		if((strlen($value) < 1) || (!ctype_alnum($value))){
			return false;
		}
		else{
			return true;
		}
	}elseif ($key == "exp") {
		if ((strlen($value) < 8) || (!preg_match('/[A-Z]/', $value)) || (!preg_match('/[1-9]/', $value))){
			return false;
		}
		else{
			return true;
		}
	}elseif ($key == "name" || $key == "city") { 
		if (!ctype_alpha(str_replace(' ', '', $value))){
			return false;
		}
		else{
			return true;
		}
	}elseif ($key == "email") {
		if(!filter_var($value, FILTER_VALIDATE_EMAIL)){
    		return false;
		}
		else{
			return true;
		}
	}elseif ($key == "street1" || $key == "street2" || $key == "state") {
		return true;
	}elseif ($key == "zip" || $key == "code") {
		if ((strlen($value) != 5) || (!ctype_digit($value))){
			return false;
		}
		else {
			return true;
		}
	}
}
?>