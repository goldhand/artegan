<?php
require_once('Form_Validator/Form_Validator.php');

define('EMAIL_TO','amylehrman@gmail.com, RCook@artegan.com');
define('EMAIL_FROM','webserver@artegan.com');
define('EMAIL_SUBJECT','New Contact');
define('SERVER_TYPE','sendmail'); // Mail server type: 'smtp', 'sendmail', or builtin 'mail'

//SMTP configuration
define('SMTP_HOST','');
define('SMTP_USER','');
define('SMTP_PASSWORD','');

define('SENDMAIL_PATH','/usr/sbin/sendmail');
define('SENDMAIL_ARGS','-t -i');

$mailParams['host'] = SMTP_HOST;
$mailParams['port'] = '25';
$mailParams['auth'] = true;
$mailParams['username'] = SMTP_USER;
$mailParams['password'] = SMTP_PASSWORD;

// Field names to skip during form processing.
$excludedParameters = array();
$excludedParameters[] = 'submitted';
$excludedParameters[] = 'x';
$excludedParameters[] = 'y';

function getFieldValue($strFieldName) {
	if ($_POST) {
		return $_POST[$strFieldName];
	} else {
		return '';
	}
}
function getChecked($fieldName,$fieldValue=null) {
	if (isset($fieldValue)) {
		if (isset($_POST[$fieldName]) && (strcasecmp($_POST[$fieldName],$fieldValue) == 0)) {
			return 'checked="checked" ';
		} else {
			return "";
		}
	} else {
		if (isset($_POST[$fieldName])) {
			return 'checked="checked" ';
		} else {
			return "";
		}
	}
}
function writeOptionsList($arrOptionsList,$strSelectedField) {
	reset($arrOptionsList);
	
	if ($strSelectedField != null) {
		while (list($key,$value) = each($arrOptionsList)) {
			if (strcasecmp($key,$strSelectedField) == 0) {
				echo("<option value=\"$key\" selected=\"selected\">$value</option>");
			} else {
				echo("<option value=\"$key\">$value</option>");
			}
		}
	} else {
		while (list($key,$value) = each($arrOptionsList)) {
			echo("<option value=\"$key\">$value</option>");
		}
	}
}


?>
