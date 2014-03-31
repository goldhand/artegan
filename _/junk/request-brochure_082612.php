<?php
ini_set("include_path", 'sh_includes/' . PATH_SEPARATOR . ini_get("include_path"));

require_once('sh_includes/brochure-request-form-general.php');

$arrPropertyList = array(
				'Apple_Springs' => 'Omak, WA : Apple Springs',
				'Columbia_Ridge' => 'Washougal, WA : Columbia Ridge',
				'Fountain_Court' => 'Maple Valley, WA : Fountain Court',
				'Maple_Glen' => 'Shelton, WA : Maple Glen',
				'Normandy_Park' => 'Normandy Park, WA : Normandy Park',
				'Parkview' => 'Colville, WA : Parkview',
				'Laurel_Parc' => 'Portland (NW), OR : Laurel Parc',
				'Hawthorne_Gardens' => 'Portland (SE), OR : Hawthorne Gardens',
				'Skagit_Valley' => 'Burlington, WA : Skagit Valley Senior Village',
				);
				
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
				'referral-source' => 'Referral Source'
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

		//loop over checkboxes 1-14, grabbing the email addresses for the checked boxes
		$n = 1;
		while ($n <= 14) {
			if ($_POST["property{$n}"] <> "") { $recList .= $_POST["property{$n}"] . ", "; }
			$n++;
		}
		
		//this removes any leading or trailing spaces from the email address list
		$recList = trim($recList);
		
		//remove the last character which should be a trailing comma
		$recList = substr($recList, 0, strlen($recList)-1);

		$headers = array('To' => $recList, 'CC' => EMAIL_CC, 'From' => EMAIL_FROM, 'Subject' => EMAIL_SUBJECT, 'X-Mailer' => 'PHP 4.x');


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
?>

<?php echo('<?xml version="1.0"?>'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Art&#275;gan: Request a Brochure</title>
	<meta name="generator" content="Adobe GoLive">
	<meta name="description" content="Senior Living dedicated to Better Living through Health and Wellness, Life Long Learning and Active Life. It's our commitment to keeping you physically well, mentally stimulated and socially engaged."/>
	
<script type="text/javascript" src="http://www.artegan.com/js/cookieLib.js"></script>
<script type="text/javascript" src="http://www.artegan.com/js/common.js"></script>
<script type="text/javascript" src="http://www.artegan.com/js/request-form-script.js"></script>





<!--HEAD stuff-->	
	<?php include("sh_includes/head_css.php");?>

</head>



<!--Body-->

<body onload="startList();NameFontSize();">
	
<!--Masthead-->	
	<?php include("sh_includes/masthead.php"); ?>



			
<!--Top image-->				
			
				<!--Photos-->
			<img class="L-photo" src="communities/locations/omak/images/omak-L.jpg">
			<img class="R-photo" src="communities/locations/omak/images/omak-R.jpg">


			
			<div id="main_nav">
						
<!--Main Nav-->
			<?php include("sh_includes/main_nav.php");?>
<!--end-Main Nav-->
				
			</div>
			
<!--Communities Submenu-->	
	<?php include("sh_includes/communities_submenu.php");?>
		
			
<!--Text Content-->		
			<div id="content">
			
			
			<br>
				

			


<?php
				if ($blnSubmitted && ($theForm->isValid())) {
				;?>		

				
							
<!--Request Form success page -->	
	<?php include("communities/locations/request-form-success.php");?>						
							
				<?php
				} else {
				;?>		
						
<h1 class="margin">Request a Brochure</h1>
				
				<p class="margin">Please provide the following information.</p>
				
				<table><tr><td>
				
				<form action="<?php echo($PHP_SELF); ?>" onsubmit="return validate_form(this)" method="post" name="Brochure-Request" id="Brochure-Request">
				<input type="hidden" name="submitted" id="submitted" value="true" />
				<input type="hidden" name="required" value="email">
				


<!--Request Form table1 -->	
	<?php include("communities/locations/request-form-table1.php") ;?>
							
				
				<div id="request-box">
				<h1>Please send me a brochure about:</h1>
				
					<table>
				<tr>
				
				
				<td class="margin" valign="top">
				<h2>Assisted Living</h2>
					
					<input type="checkbox" name="property3" id="property3" value="applesprings@artegan.com " /> Apple Springs (Omak, WA)<br>
					
					<input type="checkbox" name="property4" id="property4" value="columbiaridge@artegan.com " /> Columbia Ridge (Washougal, WA)<br>
					
					<input type="checkbox" name="property5" id="property5" value="fountaincourt@artegan.com " /> Fountain Court (Maple Valley, WA)<br>
				
					<input type="checkbox" name="property6" id="property6" value="mapleglen@artegan.com " /> Maple Glen (Shelton, WA)<br>
					
					<input type="checkbox" name="property7" id="property7" value="normandypark@artegan.com " /> Normandy Park (Normandy Park, WA)<br>
					
					<input type="checkbox" name="property8" id="property8" value="parkview@artegan.com " /> Parkview (Colville, WA)<br>

										
					
					<input type="checkbox" name="property10" id="property10" value="laurelparc@artegan.com " /> Laurel Parc (Portland NW, OR)<br>
					 <input type="checkbox" name="property9" id="property9" value="hawthornegardens@artegan.com"/> Hawthorne Gardens (Portland SE, OR)<br>
					 <input type="checkbox" name="property13" id="property13" value="lwarren@artegan.com " /> Skagit Valley Senior Village (Burlington, WA)<br>

					
					
				<br>
				<h2>Cottages / Independent Living</h2>
					<input type="checkbox" name="property1" id="property1" value="fountaincourt@artegan.com " /> Fountain Court (Maple Valley, WA)<br>
					<input type="checkbox" name="property11" id="property11" value="laurelparc@artegan.com " /> Laurel Parc (Portland NW, OR)<br>
					<input type="checkbox" name="property14" id="property14" value="lwarren@artegan.com " /> Skagit Valley Senior Village (Burlington, WA)<br>

										
					<br>
					
				<h2>Memory Care</h2>
					<input type="checkbox" name="property2" id="property2" value="normandypark@artegan.com "  /> Normandy Park (Normandy Park, WA)<i>coming soon</i><br>
					 <input type="checkbox" name="property12" id="property12" value="hawthornegardens@artegan.com"/>Hawthorne Gardens (Portland SE, OR)<br>
				
				</td>


			</tr></table>	
										
				
				
					
					
					
				<br>
				<p style="text-align:center;">
					<input type="submit" value="Send" />
				</p>
				
				
				</div>
				
				
				</form>
			
				</td></tr></table>
				<?php
				}
				?>
				
				
				</div>
 			<!--end content--> 			
 				
	
			
		
		


<!--Footer-->	
				<?php include("sh_includes/footer.php");?>
				



			
</body>
</html>