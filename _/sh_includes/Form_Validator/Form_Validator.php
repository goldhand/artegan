<?php
class Form_Validator {

	var $arrResults = array();
	var $isValid = true;

	function Form_Validator($criteria) {
		// pass in an array of fields in the following format
		// array['fieldName'] = 'fieldType';
		// or
		// array['fieldName'] = null;
		// include all required fields.  If no type is specified, will default
		// to non-null (isPresent)

		reset($criteria);
		while (list($key,$value) = each($criteria)) {

			switch ($value) {
			    case "email":
					$this->arrResults[$key] = $this->isEmail($_POST[$key]);
					if ($this->arrResults[$key] == false) {
						$this->isValid = false;
					}
			        break;
			    default:
					$this->arrResults[$key] = $this->isPresent($_POST[$key]);
					if ($this->arrResults[$key] == false) {
						$this->isValid = false;
					}
			        break;
			}

		}

	}

	function isPresent($strFieldName) {
		return (($strFieldName == null) || (strcasecmp($strFieldName,"") == 0)) ? false : true;
	}

	function isEmail($strEmail) {
		if (preg_match('/^[^@\s]+@(?:[-a-z0-9]+\.)+[a-z]{2,}$/i',$strEmail)) {
			return true;
		}
		return false;
	}
	function isPhone($strPhone) {
		// possible regex: '^(\d{3})\D*(\d{3})\D*(\d{4})\D*(\d*)$'
		if (preg_match('^[0-9]{3,}?[- \.][0-9]{3,}[- \.][0-9]{4,}',$strPhone) ||
			preg_match('^\([0-9]{3,}\) ?[0-9]{3,}-[0-9]{4,}',$strPhone)) {
			return true;
		}
		return false;
	}

	function isFieldValid($strFieldName) {
		if (key_exists($strFieldName, $this->arrResults)) {
			return $this->arrResults[$strFieldName];
		} else {
			return true;
		}
	}

	function isValid() {
		return $this->isValid;
	}
}
?>