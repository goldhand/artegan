<?php
/*   **************************************************************   */
class email{
	/* OBJECT ORIENTED STYLE  */

	public  $dev = true;
	public	$msg = "";

    public function __construct(){
		if (!$this->dev){
		//	Production Server Config
			$msg = "Production Server Config";
		}else{
		//	Local Server Config
			$msg = "Local Server Config";
		}
		//echo "<br>msg: " .$msg;
	}
/*   **************************************************************   */

/*   **************************************************************   */
/* 							EMAIL SENDS								  */
/*   **************************************************************   */
	public function testEmailSend($em_to, $em_subj, $em_msg, $em_header) {
		// To send HTML mail, the Content-type header must be set
		//$headers  = 'MIME-Version: 1.0' . "\r\n";
		//$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

		// Additional headers
/*
		$this->em_header = $this->em_from. "\r\n";
		$this->em_header .= $this->em_reply. "\r\n";
		$this->em_header .= $this->em_return. "\r\n";
		$this->em_header .= $this->em_cc. "\r\n";
		$this->em_header .= $this->em_bcc. "\r\n";
 */
		$result = 0;

//		echo "<br>em_to: " .$em_to;
//		echo "<br>em_subj: " .$em_subj;
//		echo "<br>em_msg: " .$em_msg;
//		echo "<br>em_header: " .$em_header;

		If ($result = mail($em_to, $em_subj, $em_msg, $em_header)) {
			//echo "<br>Email Sent...whahoo!<br>";
			//header('Location: ');
		}
		Else
		{
			echo "<br>Email Not Sent...  :-(<br>";
		}
		return $result;
	}
/*   **************************************************************   */

/*   **************************************************************   */
/*   						   HELPERS							      */
/*   **************************************************************   */
	public function getRealDateTime() {
		$date = date("m-d-Y H:i:s");
		$original=time($date);
		$hr  = 25;
		$min = 46;
		$sec = 77;
		$modified = $original+$sec+($min*60)+($hr*60*60);
		return date("m-d-y, H:i:s",$modified);
	}
/*   **************************************************************   */

/*   **************************************************************   */
	public function validateEmail($email) {
		/**
		Validate an email address.
		Provide email address (raw input)
		Returns true if the email address has the email
		address format and the domain exists.

		Credit:
		http://www.linuxjournal.com/article/9585?page=0,1
		Jun 01, 2007  By Douglas Lovell in Webmaster:http://www.linuxjournal.com/taxonomy/term/24
		*/

		$isValid = true;
		$atIndex = strrpos($email, "@");
		if (is_bool($atIndex) && !$atIndex)
		{
			$isValid = false;
		}
		else
		{
			$domain = substr($email, $atIndex+1);
			$local = substr($email, 0, $atIndex);
			$localLen = strlen($local);
			$domainLen = strlen($domain);
			if ($localLen < 1 || $localLen > 64)
			{
				// local part length exceeded
				$isValid = false;
			}
			else if ($domainLen < 1 || $domainLen > 255)
			{
				// domain part length exceeded
				$isValid = false;
			}
			else if ($local[0] == '.' || $local[$localLen-1] == '.')
			{
				// local part starts or ends with '.'
				$isValid = false;
			}
			else if (preg_match('/\\.\\./', $local))
			{
				// local part has two consecutive dots
				$isValid = false;
			}
			else if (!preg_match('/^[A-Za-z0-9\\-\\.]+$/', $domain))
			{
				// character not valid in domain part
				$isValid = false;
			}
			else if (preg_match('/\\.\\./', $domain))
			{
				// domain part has two consecutive dots
				$isValid = false;
			}
			else if (!preg_match('/^(\\\\.|[A-Za-z0-9!#%&`_=\\/$\'*+?^{}|~.-])+$/', str_replace("\\\\","",$local)))
			{
				// character not valid in local part unless
				// local part is quoted
				if (!preg_match('/^"(\\\\"|[^"])+"$/', str_replace("\\\\","",$local)))
				{
					$isValid = false;
				}
			}
			if ($isValid && !(checkdnsrr($domain,"MX") || checkdnsrr($domain,"A")))
//			if ($isValid && !(getmxrr ($domain,"MX") || getmxrr ($domain,"A")))
			{
				// domain not found in DNS
				$isValid = false;
			}
		}
		return $isValid;
	}
/*   **************************************************************   */

/*   **************************************************************   */
	public function emailValidatorTest($email) {
		/**
		Credit:
		http://www.linuxjournal.com/article/9585?page=0,2
		Jun 01, 2007  By Douglas Lovell in Webmaster:http://www.linuxjournal.com/taxonomy/term/24
		*/

		//require("validEmail.php"); // your favorite here

		//function testEmail($email)
		//{
			echo $email;
			$pass = $this->validateEmail($email);
			if ($pass)
			{
				//echo " is valid.\n";
				echo " is valid.<br>";
			}
			else
			{
				//echo " is not valid.\n";
				echo " is not valid.<br>";
			}
			return $pass;
		//}

		/*
		USE THIS TEST DATA
		$mail = new email;
		$pass = true;
		echo "All of these should succeed:\n";
		$pass &= $mail->emailValidatorTest("dclo@us.ibm.com");
		$pass &= $mail->emailValidatorTest("abc\\@def@example.com");
		$pass &= $mail->emailValidatorTest("abc\\\\@example.com");
		$pass &= $mail->emailValidatorTest("Fred\\ Bloggs@example.com");
		$pass &= $mail->emailValidatorTest("Joe.\\\\Blow@example.com");
		$pass &= $mail->emailValidatorTest("\"Abc@def\"@example.com");
		$pass &= $mail->emailValidatorTest("\"Fred Bloggs\"@example.com");
		$pass &= $mail->emailValidatorTest("customer/department=shipping@example.com");
		$pass &= $mail->emailValidatorTest("\$A12345@example.com");
		$pass &= $mail->emailValidatorTest("!def!xyz%abc@example.com");
		$pass &= $mail->emailValidatorTest("_somename@example.com");
		$pass &= $mail->emailValidatorTest("user+mailbox@example.com");
		$pass &= $mail->emailValidatorTest("peter.piper@example.com");
		$pass &= $mail->emailValidatorTest("Doug\\ \\\"Ace\\\"\\ Lovell@example.com");
		$pass &= $mail->emailValidatorTest("\"Doug \\\"Ace\\\" L.\"@example.com");
		echo "\nAll of these should fail:\n";
		$pass &= !$mail->emailValidatorTest("abc@def@example.com");
		$pass &= !$mail->emailValidatorTest("abc\\\\@def@example.com");
		$pass &= !$mail->emailValidatorTest("abc\\@example.com");
		$pass &= !$mail->emailValidatorTest("@example.com");
		$pass &= !$mail->emailValidatorTest("doug@");
		$pass &= !$mail->emailValidatorTest("\"qu@example.com");
		$pass &= !$mail->emailValidatorTest("ote\"@example.com");
		$pass &= !$mail->emailValidatorTest(".dot@example.com");
		$pass &= !$mail->emailValidatorTest("dot.@example.com");
		$pass &= !$mail->emailValidatorTest("two..dot@example.com");
		$pass &= !$mail->emailValidatorTest("\"Doug \"Ace\" L.\"@example.com");
		$pass &= !$mail->emailValidatorTest("Doug\\ \\\"Ace\\\"\\ L\\.@example.com");
		$pass &= !$mail->emailValidatorTest("hello world@example.com");
		$pass &= !$mail->emailValidatorTest("gatsby@f.sc.ot.t.f.i.tzg.era.l.d.");
		echo "\nThe email validation ";
		if ($pass)
		{
			echo "passes all tests.\n";
		}
		else
		{
			echo "is deficient.\n";
		}

		 */
	}
/*   **************************************************************   */

}
?>