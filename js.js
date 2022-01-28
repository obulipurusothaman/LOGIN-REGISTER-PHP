
//form-1
function jscript(){
var uname=document.forms["myform"]["uname"].value;
var upswd=document.forms["myform"]["upswd"].value;

if(uname==null || uname==""){
document.getElementById("errorBox").innerHTML="Enter UserName"
return false;
}

if(upswd==null || upswd==""){
document.getElementById("errorBox").innerHTML="Enter UserPassword"
return false;
}

// if(upswd!="" && upswd !=""){
// alert("LogIn Successfully");
// }
}
//form-2
function jscript1(){
var uname1=document.forms["myform2"]["uname1"].value;
var mail=document.forms["myform2"]["mail"].value;
var upswd1=document.forms["myform2"]["upswd1"].value;
var retypeupswd=document.forms["myform2"]["retypeupswd"].value;
var mobnumber=document.forms["myform2"]["mobnumber"].value;

if(uname1==null || uname1==""){
document.getElementById("errorBox").innerHTML="Enter UserName";
return false;
}

if(mail==null || mail==""){
document.getElementById("errorBox").innerHTML="Enter EmailId";
return false;
}

if(upswd1==null || upswd1==""){
document.getElementById("errorBox").innerHTML="Enter UserPassword";
return false;
}

if(retypeupswd==null || retypeupswd==""){
document.getElementById("errorBox").innerHTML="Enter Re-Type Password";
return false;
}

if(mobnumber==null || mobnumber==""){
document.getElementById("errorBox").innerHTML="Enter Mobile Number";
return false;
}

if(upswd1 != retypeupswd){
document.getElementById("errorBox").innerHTML="Password Dont Match";
return false;
}

// if(uname1!="" && mail!="" && upswd1!="" && retypeupswd!="" && mobnumber!=""){
// alert("Registration Sucessfull");
// }
}
//form-3


function jscript2(){
var emailname=document.forms["myform3"]["emailname"].value;

if(emailname==null || emailname==""){
document.getElementById("errorBox").innerHTML="Enter EmailId"
return false;
}


if(emailname!=""){
alert("Email Send");
}
}