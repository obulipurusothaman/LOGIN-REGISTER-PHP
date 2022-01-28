<?php

$uname1=$_POST["uname1"];
$mail=$_POST["mail"];
$upswd1=$_POST["upswd1"];
$retypeupswd=$_POST["retypeupswd"];
$mobnumber=$_POST["mobnumber"];


if(!empty($uname1) || !empty($mail) || !empty($upswd1) || !empty($retypeupswd) || !empty($mobnumber)){
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="tamilhacks";

//create connection
$conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);

if(mysqli_connect_error()){
die('Connect Error('.mysqli_connect_errno().')'
.mysqli_connect_error());
}


else{
$SELECT="SELECT mail From register Where mail=? Limit 1";
$SELECT="SELECT mobnumber From register Where mobnumber=? Limit 1";
$INSERT="INSERT Into register(uname1,mail,upswd1,retypeupswd,mobnumber) values(?,?,?,?,?)";

//prepare statement
$stmt=$conn->prepare($SELECT);
$stmt->bind_param("s",$mail);
$stmt->bind_param("s",$mobnumber);
$stmt->execute();
$stmt->bind_result($mail);
$stmt->bind_result($mobnumber);
$stmt->store_result();
$rnum=$stmt->num_rows;

//checking username
if($rnum==0){
$stmt->close();
$stmt=$conn->prepare($INSERT);
$stmt->bind_param("sssss",$uname1,$mail,$upswd1,$retypeupswd,$mobnumber);
$stmt->execute();
echo "New record inserted sucessfully";
}else{
echo "Someone already register using this mail"."<br>";
echo "Someone already register using this mobile number";
}
$stmt->close();
$conn->close();
}
}
else{
echo "All field are required";
die();
}

?>