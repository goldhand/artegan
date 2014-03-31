



<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="content-type" content="text/html;charset=iso-8859-1">
		<meta name="generator" content="Adobe GoLive">
		<script type="text/javascript" src="js/cookieLib.js"></script>
		<script type="text/javascript" src="js/common.js"></script>
		
		
			<script type="text/javascript">
function validate_email(field,alerttxt)
{
with (field)
{
apos=value.indexOf("@")
dotpos=value.lastIndexOf(".")
if (apos<1||dotpos-apos<2) 
  {alert(alerttxt);return false}
else {return true}
}
}
function validate_form(thisform)
{
with (thisform)
{
	if (validate_email(email,"Please enter a valid e-mail address. (For example: myname@gmail.com)")==false)
  		{email.focus();return false}
	
	if ((p0.checked == false) && (p1.checked == false) && (p2.checked == false) && (p3.checked == false) && (p4.checked == false) && (p5.checked == false) && (p6.checked == false) && (p7.checked == false) (p8.checked == false))
		{ alert("Please select at least one community that you are interested in"); return false; }
}

}
</script>

<?php
ini_set("include_path", 'sh_includes/' . PATH_SEPARATOR . ini_get("include_path"));
require_once('sh_includes/formsConfig-contact.php');

$arrPropertyList = array(
				'Apple_Springs' => 'Omak, WA : Apple Springs',
				'Columbia_Ridge' => 'Washougal, WA : Columbia Ridge',
				
				'Fountain_Court' => 'Maple Valley, WA : Fountain Court',
				
				'Maple_Glen' => 'Shelton, WA : Maple Glen',
				'Normandy_Park' => 'Normandy Park, WA : Normandy Park',
				'Parkview' => 'Colville, WA : Parkview',
				'Laurel_Parc' => 'Portland (NW), OR : Laurel Parc at Bethany Village',
				'Hawthorne Gardens' => 'Portland (SE), OR : Hawthorne Gardens',
				'Corporate_Office' => 'Corporate Office');

// required form field names
$arrCrit = array('email' => 'email');

$arrUserFriendlyFields = array(
				'first_name' => 'First Name',
				'last_name' => 'Last Name',
				'phone' => 'Phone Number',
				'email' => 'E-mail Address',
				'message' => 'Message',
				'txtDate' => 'Date');


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
		require_once('Mail/mail.php');

		//get the cc list for the emails to send to specific locations
		$ccList = "";
		if (isset($_POST['p0'])) { $ccList .= "RCook@artegan.com shaines@artegan.com "; }
		if (isset($_POST['p1'])) { $ccList .= "applesprings@artegan.com "; }
		if (isset($_POST['p2'])) { $ccList .= "columbiaridge@artegan.com "; }
		if (isset($_POST['p3'])) { $ccList .= "fountaincourt@artegan.com "; }
		if (isset($_POST['p4'])) { $ccList .= "mapleglen@artegan.com "; }
		if (isset($_POST['p5'])) { $ccList .= "normandypark@artegan.com "; }
		if (isset($_POST['p6'])) { $ccList .= "parkview@artegan.com "; }
		if (isset($_POST['p7'])) { $ccList .= "hawthornegardens@artegan.com "; }
		if (isset($_POST['p8'])) { $ccList .= "laurelparc@artegan.com"; }
		
		$ccList = str_replace(" ", ", ", trim($ccList));

		$headers = array('To' => $ccList, 'From' => EMAIL_FROM, 'Cc' => "shaines@artegan.com,  amylehrman@gmail.com, rcook@artegan.com", 'Subject' => EMAIL_SUBJECT, 'X-Mailer' => 'PHP 4.x');
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
?><?php echo('<?xml version="1.0"?>'); ?>
		
		<meta name="description" content="Senior Living dedicated to Better Living through Health and Wellness, Life Long Learning and Active Life. It's our commitment to keeping you physically well, mentally stimulated and socially engaged."/>
		<title>Art&#275;gan: Contact Us</title>
		
		

<!--HEAD stuff-->	
	<?php include("sh_includes/head_css.php") ?>	



</head>



<!--Body-->

<body>
	
<!--Masthead-->	
	<?php include("sh_includes/masthead.php") ?>

<!--Top image-->				
			
				<img class="L-photo" src="images/contact-us.jpg">

			
			<div id="main_nav">
						
<!--Main Nav-->
			<?php include("sh_includes/main_nav.php") ?>
<!--end-Main Nav-->
				
			</div>
			
			
<!--Welcome Submenu-->	
	<?php include("sh_includes/welcome_about_submenu.php") ?>
			

						


			
<!--Text Content-->		
			<div id="content">
					
					
					
					

					<br>
					
					
						
						
						
					


					
					<h1>Contact Us</h1>
					
					
						
					
					<?php
			if ($blnSubmitted && ($theForm->isValid())) {
			?>
			<p>Thank you for your inquiry, someone from our office will be responding to your request soon.</p>
			
			
			
			<?php
			} else {
			?>
					
					
					<p>TEST We'd like to hear from you.  Let us know if you'd like more information, have a question about one of our communities or have questions about your particular situation.  We're here to help.</p>
					
					
			
				<div id="contact">
						Art&#275;gan Home Office:<br />
						4610 NE 77th Avenue, Suite 132<br />
						Vancouver, WA 98662
						<br /><br />
						Phone: (360) 449-4524<br>
						Fax: (360) 449-4525
				</div>						
								
							
					
			<form action="<?php echo($PHP_SELF); ?>"onsubmit="return validate_form(this)" method="post">
			<input type="hidden" name="submitted" id="submitted" value="true" />
			<input type="hidden" name="required" value="email">
			
			<table style="color: #3F5B1F; font-size: 1em;"><tr><td class="margin">
			
				First name<br />
				<input type="text" name="first_name" id="first_name" tabindex="1" />
			
			</td>
			
			<td class="margin">
			
				Last name<br />
				<input type="text" name="last_name" id="last_name" tabindex="2" />
			
			</td>
			</tr>
			
			<tr>
			<td class="margin">
				Phone number<br />
				<input type="text" name="phone" id="phone" tabindex="3" />
			
			</td>
			
			<td class="margin">
			
				E-mail address (required)<br />
				<input type="text" name="email" id="email" tabindex="4" />
			
			</td>
			</tr></table>
		
			<br>
			<table style="color: #3F5B1F; font-size: 1em;"><tr><td class="margin">
			<p>
				<b>Communities of interest</b><br />
				<!--MB: this code was commented out so that it could be replaced with code that would write out a set of checkboxes instead of a dropdown menu
                <select>
					<option value="">Select a community</option>
					<?php 
						//writeOptionsList($arrPropertyList,$strSelected); 
					?>
				</select>
                -->
<span style="font-size: .85em;">
                <input type="checkbox" name="p1" id="p1" value="Apple Springs in Omak, WA" />Omak, WA: Apple Springs<br>
                <input type="checkbox" name="p2" id="p2" value="Columbia Ridge in Washougal, WA" />Washougal, WA: Columbia Ridge<br>
                <input type="checkbox" name="p3" id="p3" value="Fountain Court in Maple Valley, WA" />Maple Valley, WA: Fountain Court<br>
                <input type="checkbox" name="p4" id="p4" value="Maple Glen in Shelton, WA"/>Shelton, WA: Maple Glen<br>
                <input type="checkbox" name="p5" id="p5" value="Normandy Park in Normandy Park, WA" />Normandy Park, WA: Normandy Park<br>
                <input type="checkbox" name="p6" id="p6" value="Parkview in Colville, WA" />Colville, WA: Parkview<br>
                <input type="checkbox" name="p8" id="p8" value="Laurel Parc in Portland (NW), OR"/>Portland (NW), OR: Laurel Parc at Bethany Village<br>
                <input type="checkbox" name="p7" id="p7" value="Hawthorne Gardens in Portland (SE), OR"/>Portland (SE), OR: Hawthorne Gardens<br>
		<input type="checkbox" name="p0" id="p0" value="Corporate Office in Vancouver, WA" />Vancouver, WA: Corporate Office<br>
</span>
				<?php
					/*reset($arrPropertyList); $propid = 0;
					while (list($key,$value) = each($arrPropertyList)) {
						echo "<input style=\"margin-left:5px;\" type=\"checkbox\" name=\"p{$propid}\" id=\"p{$propid}\" value=\"{$key}\"";
						if (strcasecmp($key,$strSelected) == 0) { echo " checked"; }
						echo "> {$value}<BR>\n";
						$propid++;
					}*/
				?>
			</p>
			
			<p>
				<b>Message</b><br>
				<textarea name="message" id="message" cols="50" rows="5" style="width:354px;height:67px" tabindex="4" ></textarea>
			</p>
			<p>
				<input type="submit" value="Send" />
			</p>
			</td><tr></table>
			</form>
			
			<?php
			}
			?>
				
					
						
							
 					 		
 			&nbsp;
 			</div>
 			<!--end content-->
 			
 				
	
			
		
		


<!--Footer-->	
				<?php include("sh_includes/footer.php") ?>
				



			
</body>
</html>