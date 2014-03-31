<script type="text/javascript" src="../../js/cookieLib.js"></script>
	<script type="text/javascript" src="../../js/common.js"></script>
	
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
}
}
</script>