<?php 
	
	function validateEmail($email){
		if (filter_var($email, FILTER_VALIDATE_EMAIL) === true) {
		  return false;
		} else {
		  return true;
		}
	}

	function validatePassword($password){

		if(strlen($password) < 8)
		{
			return "Password must be more than 8 charecters.";
			
		}

		if(preg_match("/[A-Z]/", $password) ===0){
			return "Password must contain an Upper Case letter.";
		}

		return "";
	}
?>