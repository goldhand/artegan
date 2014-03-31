<?php
require_once('../../www_includes/config.php');
require_once('../../www_includes/formsConfig.php');

$contactSubject = (isset($_POST['listingID'])) ? 'Information Request for listing #' . $_POST['listingID'] . "." : 'Generic Contact via http://www.triterra.net';


// required form field names
$arrCrit = array('name' => null,
				'email' => 'email');
				
$theForm;
if (strcasecmp($_POST['submitted'],'true') == 0) {
	$theForm = new Form_Validator($arrCrit);
	if ($theForm->isValid()) {
		require_once('PEAR.php');
		require_once('Mail.php');
		
		$headers = array('From' => EMAIL_FROM, 'Subject' => $contactSubject, 'X-Mailer' => 'PHP 4.x');
		$msgBody = '';
		
		while (list($key,$value) = each($_POST)) {
			if (!in_array($key,$excludedParameters)) {
				$msgBody .= $key . ': ' . $value . "\n";
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
		
		$returnStatus = $message->send(EMAIL_TO,$headers,$msgBody);
	}
}
?>
<?php echo('<?xml version="1.0" encoding="iso-8859-1"?>'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<title>Triterra Realty Group</title>
	<meta name="generator" content="BBEdit 8.0" />
	<script language="JavaScript1.2" type="text/javascript" src="/js/coolmenus4.js">
	/*****************************************************************************
	Copyright (c) 2001 Thomas Brattli (webmaster@dhtmlcentral.com)
	
	DHTML coolMenus - Get it at coolmenus.dhtmlcentral.com
	Version 4.0_beta
	This script can be used freely as long as all copyright messages are
	intact.
	
	Extra info - Coolmenus reference/help - Extra links to help files **** 
	CSS help: http://192.168.1.31/projects/coolmenus/reference.asp?m=37
	General: http://coolmenus.dhtmlcentral.com/reference.asp?m=35
	Menu properties: http://coolmenus.dhtmlcentral.com/properties.asp?m=47
	Level properties: http://coolmenus.dhtmlcentral.com/properties.asp?m=48
	Background bar properties: http://coolmenus.dhtmlcentral.com/properties.asp?m=49
	Item properties: http://coolmenus.dhtmlcentral.com/properties.asp?m=50
	******************************************************************************/
	</script>
	<link rel="stylesheet" href="/css/common.css" charset="iso-8859-1" />
</head>
<body>
<!-- Begin Header -->
<div>
<?php include('common/topNav.inc'); ?>
<!-- Begin Breadcrumbs -->
<table border="0" cellpadding="0" cellspacing="0" width="771">
<tr>
	<td width="10"></td>
	<td width="761" height="1" class="border"></td>
</tr>
<tr>
	<td></td>
	<td height="24" class="breadCrumb"><span class="header">You are here > </span><a href="/">Triterra Home</a> - Contact Us</td>
</tr>
</table>
<!-- End Breadcrumbs -->
</div>
<!-- End Header -->
<!-- Begin Body -->
<div>
<!-- Begin Page Title -->
<table border="0" cellpadding="0" cellspacing="0" width="771">
<tr>
	<td width="10"></td>
	<?php
	if (strcasecmp($_POST['submitted'],'true') == 0) {
		if ($theForm->isValid()) {?>
	<td width="761"><img src="/images/contact/hd1_contactConfirmation.gif" alt="Contact Confirmation" width="151" height="16" border="0" /></td>
	<?php 
		}
	} else { 
	?>
	<td width="761"><img src="/images/contact/hd1_contact.gif" alt="Contact" width="54" height="16" border="0" /></td>
	<?php 
	} 
	?>
</tr>
<tr>
	<td height="13"></td>
</tr>
</table>
<!-- End Page Title -->
<!-- Begin Page Header Image -->
<table border="0" cellpadding="0" cellspacing="0" width="771">
<tr>
	<td width="10"></td>
	<td width="761"><img src="/images/contact/photo_pgHd.jpg" alt="" width="614" height="31" border="0" /></td>
</tr>
<tr>
	<td height="11"></td>
</tr>
</table>
<!-- End Page Header Image -->
<!-- Begin Body Content -->
<table border="0" cellpadding="0" cellspacing="0" width="614">
<tr>
	<td width="10"></td>
	<form method="post" action="<?php echo($PHP_SELF); ?>">
	<input type="hidden" name="submitted" value="true" />
	<?php
	if (isset($_POST['listingID'])) {
		echo("<input type=\"hidden\" name=\"listingID\" value=\"" . $_POST['listingID'] . "\" />");
	}
	?>
	<td width="604">
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam imperdiet facilisis urna. Duis pede. Vestibulum neque magna, interdum eu, cursus non, aliquet ac, metus. Mauris ornare magna. (* required fields)</p>
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td width="200" valign="top">
				Triterra Realty Group, Inc.<br />
				1100 Sanchez St.<br />
				San Francisco, CA<br />
				94114
			</td>
			<td width="20"></td>
			<td width="200" valign="top">
				Office: 415-648-4600<br />
				Fax: 415-648-4653
			</td>
		</tr>
		<tr>
			<td height="10"></td>
		</tr>
		</table>
		<?php
		if (strcasecmp($_POST['submitted'],'true') == 0) {
			if ($theForm->isValid()) {?>
		<a href="/" class="link_bold">&lt; Back to Home</a>
		<?php
			} else {
				if (strcasecmp($_POST['submitted'],'true') == 0) {
					if (!$theForm->isValid()) {
						echo("<p class=\"error\">\n");
						if (!$theForm->isFieldValid('name')) {
							echo('Please enter your name.<br />');
						}
						if (!$theForm->isFieldValid('email')) {
							echo('Please enter or correct your email address.');
						}
						echo("</p>\n");
					}
				}
			?>
		
		<table border="0" cellpadding="0" cellspacing="0" class="propertyValue_form">
		<tr>
			<td width="125" height="12"></td>
			<td width="5"></td>
			<td></td>
		</tr>
		<tr>
			<td class="label">Full Name:*</td>
			<td></td>
			<td class="field"><input type="text" name="name" size="20" value="<?php echo(getFieldValue('name')); ?>" /></td>
		</tr>
		<tr>
			<td class="label">E-mail:*</td>
			<td></td>
			<td class="field"><input type="text" name="email" size="20" value="<?php echo(getFieldValue('email')); ?>" /></td>
		</tr>
		<tr>
			<td class="label">Daytime Phone:</td>
			<td></td>
			<td class="field"><input type="text" name="phoneDay" size="20" value="<?php echo(getFieldValue('phoneDay')); ?>" /></td>
		</tr>
		<tr>
			<td class="label">Evening Phone:</td>
			<td></td>
			<td class="field"><input type="text" name="phoneNight" size="20" value="<?php echo(getFieldValue('phoneNight')); ?>" /></td>
		</tr>
		<tr>
			<td class="label">Fax:</td>
			<td></td>
			<td class="field"><input type="text" name="fax" size="20" value="<?php echo(getFieldValue('fax')); ?>" /></td>
		</tr>
		<tr>
			<td colspan="3">
				Comments, Questions &amp; Requested Information:<br />
				<textarea name="comments" cols="40" rows="8"><?php echo(getFieldValue('comments')); ?></textarea>
			</td>
		</tr>
		<tr>
			<td height="7"></td>
		</tr>
		<tr>
			<td class="label"></td>
			<td></td>
			<td align="right" class="field"><input type="image" src="/images/common/btn_submit.gif" alt="" width="45" height="17" border="0" /></td>
		</tr>
		</table>
		
		<?php
			}
		} else {
			
		?>
		
		<table border="0" cellpadding="0" cellspacing="0" class="propertyValue_form">
		<tr>
			<td width="125" height="12"></td>
			<td width="5"></td>
			<td></td>
		</tr>
		<tr>
			<td class="label">Full Name:*</td>
			<td></td>
			<td class="field"><input type="text" name="name" size="20" value="" /></td>
		</tr>
		<tr>
			<td class="label">E-mail:*</td>
			<td></td>
			<td class="field"><input type="text" name="email" size="20" value="" /></td>
		</tr>
		<tr>
			<td class="label">Daytime Phone:</td>
			<td></td>
			<td class="field"><input type="text" name="phoneDay" size="20" value="" /></td>
		</tr>
		<tr>
			<td class="label">Evening Phone:</td>
			<td></td>
			<td class="field"><input type="text" name="phoneNight" size="20" value="" /></td>
		</tr>
		<tr>
			<td class="label">Fax:</td>
			<td></td>
			<td class="field"><input type="text" name="fax" size="20" value="" /></td>
		</tr>
		<tr>
			<td colspan="3">
				Comments, Questions &amp; Requested Information:<br />
				<textarea name="comments" cols="40" rows="8"></textarea>
			</td>
		</tr>
		<tr>
			<td height="7"></td>
		</tr>
		<tr>
			<td class="label"></td>
			<td></td>
			<td align="right" class="field"><input type="image" src="/images/common/btn_submit.gif" alt="" width="45" height="17" border="0" /></td>
		</tr>
		</table>
		<?php
		}
		?>
		
		
	</td></form>
</tr>
</table>

	

<!-- End Body Content -->
</div>
<!-- End Body -->
<?php include('common/footer.inc'); ?>
</body>
</html>
