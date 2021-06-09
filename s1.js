function validate()
{
    var fullname = document.forms['myform']['fullname'].value;
	if( fullname == "" )
   {
	alert("Please enter User name");
    document.forms['myform']['fullname'].focus();
    return false;
   } 
  var emailid = document.forms['myform']['emailid'].value;
  atpos = emailid.indexOf("@");
  dotpos = emailid.lastIndexOf(".");
 if (emailid == "" || atpos < 1 || ( dotpos - atpos < 2 )) 
 {
     alert("Please enter correct email ID");
     document.forms['myform']['emailid'].focus();
     return false;
 }
  if( document.forms['myform']['dob'].value == "")
   {
     alert("Please provide your DOB!");
     document.forms['myform']['dob'].focus();
     return false;
   }
  if(document.forms['myform']['mobileno'].value == "")
   {
     alert("Please provide a Mobile No of 10 digits");
     document.forms['myform']['mobileno'].focus();
     return false;
   }
   return( true );
}