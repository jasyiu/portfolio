<script language="JavaScript">
<!--
function MailingListValidation(SubscriberForm){
var counter = 0;
for (i=1; i<=SubscriberForm.pf_CounterMailinglists.value; i++)
 {
var checkBoxName = "pf_MailinglistName" + i;
 if (document.getElementsByName(checkBoxName)[0].checked || document.getElementsByName(checkBoxName)[0].type == "hidden") counter++; 
}
 if (counter == 0)
{
alert("One or more mailing lists are required for this form.");
return false; }
 }//-->
</script>
<?php 
  foreach ($_POST as $key => $value) {
    echo '<p><strong>' . $key.':</strong> '.$value.'</p>';
  }
?>
<form name="SubscriberForm" style="text-align:left; font-family: arial, sans-serif; font-size: 12pt;" action="http://www.anpasia.com/public/process-subscription-form.aspx?formId=4542514373424A5143" onSubmit="return MailingListValidation(this);" method="post"><table cellspacing="0" cellpadding="2px">
<tr><td>
Name<br/><input type="text" name="pf_SubscriberName" value="" size="30"  ></td></tr><tr><td>
Email<br/><input type="text" name="pf_Email" value="" size="30"  ></td></tr><tr><td>
<b>Choose your subscription<br/></b><input type="checkbox" name="pf_MailinglistName1"  checked value="157189"  >client test<br/></td></tr><tr><td>
Delivery format<br/><select name="pf_DeliveryFormat"  ><option value="HTML" selected >HTML</option><option value="Text"  >Text</option></select></td></tr><tr><td>
<input type="submit" name="Submit" value="Subscribe"  ></td></tr>
<tr><td><!-- Do not change name or type on submit button, to change visible text, change text for \&quot;value\&quot; -->
<input type="hidden" name="pf_FormType" value="OptInForm">
<input type="hidden" name="pf_OptInMethod" value="SingleOptInMethod">
<input type="hidden" name="pf_CounterDemogrFields" value="0">
<input type="hidden" name="pf_CounterMailinglists" value="1">
<input type="hidden" name="pf_AccountId" value="1738">
<input type="hidden" name="pf_ListById" value="1">
<input type="hidden" name="pf_Version" value="2">
<div class="g-recaptcha" data-sitekey="6Le4lB4UAAAAABHz7Hzc9tHJDJddnUR1P-yww9VX"></div>
</td></tr>
</table></form>

 <!--js-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
 a
