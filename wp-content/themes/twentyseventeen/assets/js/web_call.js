alert(value.length);
 
function validate_required(field,alerttxt)
{
with (field)
  {
  if (value==null||value=="")
    {
      alert(alerttxt);return false
    }
	else if (value.length < 5)
		{
		alert(alerttxt);return false
		}
		else {return true}
  }
}
 
function validate_form(thisform)
{
with (thisform)
  {
  if (validate_required(number,"號碼欄位不得少於5碼或空白!")==false)
    {
     number.focus();return false}
    }
}
