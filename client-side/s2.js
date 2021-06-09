function validate()
{  
var name=document.form.username.value;  
var passwordlength=document.form.password.value.length;  
var status=false;  
if(name==""){  
document.getElementById("namelocation").innerHTML= "Please enter your name";  
status=false;
}else{  
document.getElementById("namelocation").innerHTML="right";  
status=true;
}  
  
if(passwordlength<6){  
document.getElementById("passwordlocation").innerHTML="Password must be greater than 6";  
status=false; 
}else{  
document.getElementById("passwordlocation").innerHTML="error";  
}  
  
return status;  
}