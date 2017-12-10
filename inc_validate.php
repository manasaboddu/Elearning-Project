<?php
	//Created by Group:7
	//This page is for validation functions
	function validateString($string){
		if(!empty($string)&&(!ctype_space($string))and (ctype_alpha($string))){
			//ctype_alpha checks only for alphabets.Other characters return false.
			return true;
		}else{
			return false;
		}//end string validation.
	}//end validateString
	
	function validatePhoneNumber($number){
		if((is_numeric($number))&&(strlen($number)==10)){
			return true;
		}else{
			return false;
		}//end numeric validation
	}//end validateNumber
	
	function validateAlphanumeric($string){
		if(!empty($string)&&(!ctype_space($string))and (ctype_alnum($string))){
		//ctype_alnum checks only for alphanumeric.Other characters return false
		return true;
		
	}else{
		return false;
	}
	}//end of validateAlphanumeric function
	
	function validateEmail($email){
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		return true;
    }else{
		return false;
	}
	}

?>