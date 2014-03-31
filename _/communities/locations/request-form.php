
// ini_set("include_path", '../../../sh_includes/' . PATH_SEPARATOR . ini_get("include_path"));
// ini_set("include_path", '../../../sh_includes/' . PATH_SEPARATOR . ini_get("include_path"));
ini_set("include_path", '../../../sh_includes/' . PATH_SEPARATOR . ini_get("include_path"));
require_once('brochure-request-form.php');

$arrPropertyList = array(
				'Apple_Springs' => 'Omak, WA : Apple Springs',
				'Columbia_Ridge' => 'Washougal, WA : Columbia Ridge',
				'Fountain_Court' => 'Maple Valley, WA : Fountain Court',
				'Maple_Glen' => 'Shelton, WA : Maple Glen',
				'Normandy_Park' => 'Normandy Park, WA : Normandy Park',
				'Parkview' => 'Colville, WA : Parkview',
				'Summerfield' => 'Yuba City, CA : Summerfield',
				'Laurel_Parc' => 'Portland, OR : Laurel Parc');
// required form field names
$arrCrit = array('email' => 'email');

$arrUserFriendlyFields = array(
				'first_name' => 'First Name',
				'last_name' => 'Last Name',
				'address_1' => 'Address',
				'address_2' => '',
				'city' => 'City',
				'state' => 'State',
				'zip' => 'Zip Code',
				'phone' => 'Phone Number',
				'email' => 'E-mail Address',
				'property1' => '',
				'property2' => '',
				'property3' => '',
				'property4' => '',
				'property5' => '',
				'property6' => '',
				'property7' => '',
				'property8' => '',
				'property9' => '',
				'property10' => '',
				'property11' => '',
				'property12' => '',
				'property13' => '',
				'property14' => '',
				);
				

// $theForm;
$theForm = new Form_Validator($arrCrit);
$blnSubmitted = (strcasecmp($_POST['submitted'],'true') == 0) ? true : false;
$returnStatus = false;
$strReferer = "";
$strSelected = "";

if ($blnSubmitted) {
	$theForm = new Form_Validator($arrCrit);
	if ($theForm->isValid()) {
		require_once('PEAR.php');
		require_once('Mail.php');

		$headers = array('To' => EMAIL_TO, 'From' => EMAIL_FROM, 'Subject' => EMAIL_SUBJECT, 'X-Mailer' => 'PHP 4.x');
		$msgBody = '';

		while (list($key,$value) = each($_POST)) {
			if (!in_array($key,$excludedParameters)) {
				$msgBody .= $arrUserFriendlyFields[$key] . ': ' . $value . "\n";
			}
		}
		$msgBody .= "\n\n" . date ('r') . "\n";
		$msgBody .= "Logged from: " . $_SERVER['REMOTE_ADDR'];
		$mailParams = array();
		if (strcasecmp(SERVER_TYPE,'smtp') == 0) {
			require_once('Net/SMTP.php');
			$mailParams['host'] = SMTP_HOST;
			$mailParams['port'] = '25';
			$mailParams['auth'] = true;
			$mailParams['username'] = SMTP_USER;
			$mailParams['password'] = SMTP_PASSWORD;
			$message =& Mail::factory(SERVER_TYPE,$mailParams);
		} elseif (strcasecmp(SERVER_TYPE,'sendmail') == 0) {
			$mailParams['sendmail_path'] = SENDMAIL_PATH;
			$mailParams['sendmail_args'] = SENDMAIL_ARGS;
			$message =& Mail::factory(SERVER_TYPE,$mailParams);
		}

		$returnStatus = $message->send(null,$headers,$msgBody);
	}
} else {
	$strReferer = $_SERVER['HTTP_REFERER'];
	$arrReferer = explode('/',$strReferer);
	// if (strcmp('jtc-g5.local',$arrReferer[2]) == 0) {
	if (strcmp($_SERVER['SERVER_NAME'],$arrReferer[2]) == 0) {
		$strProperty = $arrReferer[3];
		$strSelected = ((bool) strpos($strProperty ,'.') ===  false) ? $strProperty : null;
	}
}
