<?php
// ini_set("include_path", '../../sh_includes/' . PATH_SEPARATOR . ini_get("include_path"));
// ini_set("include_path", '../../sh_includes/' . PATH_SEPARATOR . ini_get("include_path"));
// ini_set("include_path", '../../sh_includes/' . PATH_SEPARATOR . ini_get("include_path"));
// require_once('formsConfig.php');
// 
// $arrPropertyList = array(
// 				'Apple_Springs' => 'Apple Springs',
// 				'Columbia_Ridge' => 'Columbia Ridge',
// 				'Fishers_Landing' => 'Fishers Landing',
// 				'Fountain_Court' => 'Fountain Court',
// 				'Kenmore' => 'Kenmore',
// 				'Maple_Glen' => 'Maple Glen',
// 				'Normandy_Park' => 'Normandy Park',
// 				'Oceanview' => 'Oceanview',
// 				'Parkview' => 'Parkview',
// 				'Parkway_Village' => 'Parkway Village',
// 				'Summerfield' => 'Summerfield',
// 				'Terraces' => 'Terraces');
// // required form field names
// $arrCrit = array('first_name' => null,
// 				'last_name' => null,
// 				'email' => 'email');
// $arrUserFriendlyFields = array(
// 				'first_name' => 'First Name',
// 				'last_name' => 'Last Name',
// 				'email' => 'E-mail Address',
// 				'txtDate' => 'Date',
// 				'selSqFt' => 'Square Footage',
// 				'txtArLocation' => 'Location',
// 				'txtName' => 'Name',
// 				'txtTitle' => 'Title',
// 				'txtCoName' => 'Company Name',
// 				'txtEmail' => 'Email',
// 				'txtPhone' => 'Phone Number');
// 
// // $theForm;
// $theForm = new Form_Validator($arrCrit);
// $blnSubmitted = (strcasecmp($_POST['submitted'],'true') == 0) ? true : false;
// $returnStatus = false;
// $strReferer = "";
// $strSelected = "";
// 
// if ($blnSubmitted) {
// 	$theForm = new Form_Validator($arrCrit);
// 	if ($theForm->isValid()) {
// 		require_once('PEAR.php');
// 		require_once('Mail.php');
// 
// 		$headers = array('To' => EMAIL_TO, 'From' => EMAIL_FROM, 'Subject' => EMAIL_SUBJECT, 'X-Mailer' => 'PHP 4.x');
// 		$msgBody = '';
// 
// 		while (list($key,$value) = each($_POST)) {
// 			if (!in_array($key,$excludedParameters)) {
// 				$msgBody .= $arrUserFriendlyFields[$key] . ': ' . $value . "\n";
// 			}
// 		}
// 		$msgBody .= "\n\n" . date ('r') . "\n";
// 		$msgBody .= "Logged from: " . $_SERVER['REMOTE_ADDR'];
// 		$mailParams = array();
// 		if (strcasecmp(SERVER_TYPE,'smtp') == 0) {
// 			require_once('Net/SMTP.php');
// 			$mailParams['host'] = SMTP_HOST;
// 			$mailParams['port'] = '25';
// 			$mailParams['auth'] = true;
// 			$mailParams['username'] = SMTP_USER;
// 			$mailParams['password'] = SMTP_PASSWORD;
// 			$message =& Mail::factory(SERVER_TYPE,$mailParams);
// 		} elseif (strcasecmp(SERVER_TYPE,'sendmail') == 0) {
// 			$mailParams['sendmail_path'] = SENDMAIL_PATH;
// 			$mailParams['sendmail_args'] = SENDMAIL_ARGS;
// 			$message =& Mail::factory(SERVER_TYPE,$mailParams);
// 		}
// 
// 		$returnStatus = $message->send(null,$headers,$msgBody);
// 	}
// } else {
// 	$strReferer = $_SERVER['HTTP_REFERER'];
// 	$arrReferer = explode('/',$strReferer);
// 	// if (strcmp('jtc-g5.local',$arrReferer[2]) == 0) {
// 	if (strcmp($_SERVER['SERVER_NAME'],$arrReferer[2]) == 0) {
// 		$strProperty = $arrReferer[3];
// 		$strSelected = ((bool) strpos($strProperty ,'.') ===  false) ? $strProperty : null;
// 	}
// }










if (strcasecmp($_POST['submitted'],'true') == 0) {
	$intTransportation = (int) $_POST['cat_trans'];
	$intMedications = (int) $_POST['cat_meds'];
	$intAmbulation = (int) $_POST['cat_amb'];
	$intDressing = (int) $_POST['cat_dress'];
	$intGeneralHygiene = (int) $_POST['cat_genHyg'];
	$intPersonalHygiene = (int) $_POST['cat_persHyg'];
	$intMental = (int) $_POST['cat_mental'];
	$intBehavioral = (int) $_POST['cat_behav'];
	
	$intSubtotal = $intTransportation + $intMedications + $intAmbulation + $intDressing + $intGeneralHygiene + $intPersonalHygiene + $intMental + $intBehavioral;
	$fltMeanResult = $intSubtotal / 8;
	$intMeanResult = round($fltMeanResult);
	$intFinalResult = ($intMeanResult < 5) ? $intMeanResult : 4;
	
}

?>
<?php echo('<?xml version="1.0"?>'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Art&#275;gan: Decision Guide</title>
	<meta name="generator" content="BBEdit 8.2" />
	<meta name="description" content="Senior Living dedicated to Better Living through Health and Wellness, Life Long Learning and Active Life. It's our commitment to keeping you physically well, mentally stimulated and socially engaged."/>
	<script type="text/javascript" src="http://www.spring-hill.net/js/cookieLib.js"></script>
	
	
	<!--HEAD stuff-->	
	<?php include("../../sh_includes/head_css.php");?>	
	
	
	<script type="text/javascript" src="http://www.spring-hill.net/js/common.js"></script>
	<script type="text/javascript">
		function sendForm() {
			document.frmDecision.submit();
		}
	</script>
</head>
<body>

<!-- BEGIN BODY -->

<!--Masthead-->	
	<?php include("../../sh_includes/masthead.php") ;?>
	
	
	
	<div id="main_nav">
			<div id="non-photo-spacer"></div>				
<!--Main Nav-->
			<?php include("../../sh_includes/main_nav.php");?>
<!--end-Main Nav-->
				
			</div>
			
			
<!--Communities Submenu-->	
	<?php include("../../sh_includes/communities_submenu.php");?>
			

			
			
<!--Text Content-->		
			<div id="content">
			
			
				<br />
				<h1>Senior Living Options Decision Quiz</h1>


				<?php
				if (strcasecmp($_POST['submitted'],'true') == 0) {?>
				<p><b>Your score: <?php echo($intFinalResult); ?></b></p>
				
				<p>
					1 = <a class="dk_blue" href="cottages.php">Cottages (Independent Living)</a><br />
					2 = <a class="dk_blue" href="independent-living.php">Independent Living Apartments</a><br />
					3 = <a class="dk_blue" href="assisted-living.php">Assisted Living Apartments</a><br />
					4 = <a class="dk_blue" href="memory-care.php">Memory Care</a>
				</p>
				
				<p>This gives you a general idea of which housing option might be most appropriate for you.  We invite you to explore your options on our web site.</p>
				
				<?php
				} else {?>
				
				
				<div id="floatR">
						<img class="border" src="images/test.jpg"><br>
					<!--Toolbox-->	
					<?php include("../../get-started/toolbox.php") ?>

					</div>
				
				<p>Our decision tool is easy-to-use and will quickly give you an idea of the type of housing and service options appropriate for your situation.  In each category, choose the one answer that best describes the individual.  Art&#275;gan offers a range of choices including retirement cottages, independent living and assisted living apartments and memory care.</p>
				<p>This tool is meant to give a general idea of the type of housing and services needed not a completely accurate assessment of needs.  Art&#275;gan provides individual assessments of personal living needs at the time of inquiry.  For further information contact the Art&#275;gan community of interest to you.</p>
				
				<p>
	<FORM> 
<INPUT type="button" value="Tell a Friend" onClick="window.open('http://www.springhillseniorliving.com/cgi-bin/pd/pd.cgi?image=/images/pd/decision-quiz.jpg&field1=www.springhillseniorliving.com/communities/living-options/decision-quiz.php&subject=Look+what+I+found+at+Spring+Hill+Senior+Living','postcard', 'width=800px, status=yes, scrollbars=yes')"> 
</FORM></p>
				
				<form name="frmDecision" id="frmDecision" action="<?php echo($PHP_SELF); ?>" method="post">
				<input type="hidden" name="submitted" id="submitted" value="true" />
				
				<h2>Transportation and Appointments</h2>
			
				<input type="radio" name="cat_trans" id="cat_trans" value="1" checked="checked" />Independently drives and maintains vehicle.<br />
						<input type="radio" name="cat_trans" id="cat_trans" value="2" />Independently schedules and keeps all appointments<br />
						<input type="radio" name="cat_trans" id="cat_trans" value="3" />Needs to have appointments scheduled for him or her<br />
						<input type="radio" name="cat_trans" id="cat_trans" value="4" />Needs transportation to appointments, shopping due to physical restrictions<br />
						<input type="radio" name="cat_trans" id="cat_trans" value="5" />Needs transportation to appointments, shopping due to confusion<br /><br />
					
					
					
				<h2>Medications</h2>
				
				<input type="radio" name="cat_meds" id="cat_meds" value="1" checked="checked" />Able to take all medications as ordered or recommended and can maintain an adequate inventory of medications<br />
						<input type="radio" name="cat_meds" id="cat_meds" value="2" />Needs reminders to take medications<br />
						<input type="radio" name="cat_meds" id="cat_meds" value="3" />Needs physical assistance in opening medication packaging and pouring correct doses.<br />
						<input type="radio" name="cat_meds" id="cat_meds" value="4" />Needs assistance with eye drops, ear drops, nebulizers, ointments, inhalers and/or medication patches.<br />
						<input type="radio" name="cat_meds" id="cat_meds" value="5" />Needs complete assistance with all medications.<br /><br />
				
				
				
				<h2>Ambulation</h2>
				
						<input type="radio" name="cat_amb" id="cat_amb" value="1" checked="checked" />Moves independently <br />
						<input type="radio" name="cat_amb" id="cat_amb" value="2" />Moves independently with a cane or walker<br />
						<input type="radio" name="cat_amb" id="cat_amb" value="3" />Moves with occasional assistance<br />
						<input type="radio" name="cat_amb" id="cat_amb" value="4" />Moves with assistance due to physical limitations and/or confusion<br />
						<input type="radio" name="cat_amb" id="cat_amb" value="5" />Has experienced recent falls<br /><br />
				
				
				
					<h2>Dressing and Undressing</h2>
				
						<input type="radio" name="cat_dress" id="cat_dress" value="1" checked="checked" />Independently dresses him or herself.  Able to choose clothing appropriately for changing weather and temperature needs.  Changes clothing regularly.<br />
						<input type="radio" name="cat_dress" id="cat_dress" value="2" />Needs reminders to change clothing and/or select clothing appropriately.<br />
						<input type="radio" name="cat_dress" id="cat_dress" value="3" />Needs assistance with dressing and/or undressing<br />
						<input type="radio" name="cat_dress" id="cat_dress" value="4" />Resists changing clothes or dressing/undressing.<br />
						<input type="radio" name="cat_dress" id="cat_dress" value="5" />Needs complete assistance with dressing and/or undressing<br /><br />
					
					
					
					
					<h2>General Hygiene and Grooming</h2>
				
						<input type="radio" name="cat_genHyg" id="cat_genHyg" value="1" checked="checked" />Cares for self in all areas of daily living including bathing and grooming<br />
						<input type="radio" name="cat_genHyg" id="cat_genHyg" value="2" />Needs some reminders for bathing and grooming<br />
						<input type="radio" name="cat_genHyg" id="cat_genHyg" value="3" />Needs supervision for bathing and/or grooming, but can perform these tasks<br />
						<input type="radio" name="cat_genHyg" id="cat_genHyg" value="4" />Needs physical assistance with bathing and/or grooming<br />
						<input type="radio" name="cat_genHyg" id="cat_genHyg" value="5" />Needs complete assistance<br /><br />
				
				
				
				
				<h2>Personal Hygiene</h2>
				
						<input type="radio" name="cat_persHyg" id="cat_persHyg" value="1" checked="checked" />Requires no assistance managing personal hygiene needs.<br />
						<input type="radio" name="cat_persHyg" id="cat_persHyg" value="2" />Incontinent but able to maintain hygiene with proper use of supplies<br />
						<input type="radio" name="cat_persHyg" id="cat_persHyg" value="3" />Needs occasional assistance with problems related to incontinence<br />
						<input type="radio" name="cat_persHyg" id="cat_persHyg" value="4" />Unable to manage incontinence and needs assistance with bathroom use<br />
						<input type="radio" name="cat_persHyg" id="cat_persHyg" value="5" />Needs complete assistance<br /><br />
					
					
					
					
					
					<h2>Mental Status</h2>
				
						<input type="radio" name="cat_mental" id="cat_mental" value="1" checked="checked" />Completely aware of surroundings, recognizes and remembers people, knows dates and times without reminders.<br />
						<input type="radio" name="cat_mental" id="cat_mental" value="2" />Has difficulty remembering names, the date and time of day.<br />
						<input type="radio" name="cat_mental" id="cat_mental" value="3" />Has trouble remembering things that happened recently.<br />
						<input type="radio" name="cat_mental" id="cat_mental" value="4" />Unable to recall names, dates and/or time of day and has difficulty making decisions.  Problem solving skills are impaired. <br />
						<input type="radio" name="cat_mental" id="cat_mental" value="5" />Does not recognize familiar people, unable to recognize date, time and/or surroundings.  May have lost language skills.<br /><br />
					
					
					
					
					
					<h2>Behavior</h2>
				
						<input type="radio" name="cat_behav" id="cat_behav" value="1" checked="checked" />Handles emotions without difficulty, copes with stress and gets along well with others<br />
						<input type="radio" name="cat_behav" id="cat_behav" value="2" />Isolates oneself from the company of others<br />
						<input type="radio" name="cat_behav" id="cat_behav" value="3" />Requires occasional intervention to manage periods of frustration, anxiety and/or agitation<br />
						<input type="radio" name="cat_behav" id="cat_behav" value="4" />Needs intervention on a regular basis to avoid outbursts<br />
						<input type="radio" name="cat_behav" id="cat_behav" value="5" />Has demonstrated abusive, uncooperative or harmful behavior<br /><br />
					
				
				<div id="submit-box">
					<!-- <input type="submit" value="Send" /> -->
					<a class="dk_blue" href="javascript:sendForm();">Tabulate your score and view results.</a>
				</div>
				
				
				</form>
				<?php
				}
				?>
			
			
							
 					 		&nbsp;
 			
 			</div>
 			<!--end content-->
 			
 				
	
			
		
		


<!--Footer-->	
				<?php include("../../sh_includes/footer.php");?>
				



			
</body>
</html>