<script language="JavaScript">
var stock = ["00001", "長江實業"]; 
document.getElementById("stocks").innerHTML = stock;
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
<form name="SubscriberForm" style="text-align:left; font-family: arial, sans-serif; font-size: 12pt;" action="" onSubmit="return MailingListValidation(this);" method="post">
<table cellspacing="0" cellpadding="2px">
<tr><td>
<br/><b>zzzz</b><br/>
</td></tr>

<tr><td>Name<br/><input type="text" name="pf_Name" value="" size="30"  ></td></tr>
<tr><td>Age<br/><input type="number" name="pf_Age" value="" size="30"  ></td></tr>
<tr><td>HKID (first 4 digit)<br/><input type="number" name="pf_HKID" value="" size="30"  ></td></tr>
<tr><td>Contact Number<br/><input type="number" name="pf_Tel" value="" size="30"  ></td></tr>
<tr><td>Vote<br/><select><?php
        // A sample product array
        $products = array("Mobile", "Laptop", "Tablet", "Camera");
        
        // Iterating through the product array
        foreach($products as $item){
        ?>
        <option value="<?php echo strtolower($item); ?>"><?php echo $item; ?></option>
        <?php
        }
        ?>
        </select></td></tr>

</table>
</form>