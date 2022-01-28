<?php

$uname=$_POST["uname"];
$upswd=$_POST["upswd"];


if(!empty($uname) || !empty($upswd1)){
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
$SELECT="SELECT upswd From login Where upswd=? Limit 1";
$INSERT="INSERT Into login(uname,upswd) values(?,?)";

//prepare statement
$stmt=$conn->prepare($SELECT);
$stmt->bind_param("s",$upswd);
$stmt->execute();
$stmt->bind_result($upswd);
$stmt->store_result();
$rnum=$stmt->num_rows;

//checking username
if($rnum==0){
$stmt->close();
$stmt=$conn->prepare($INSERT);
$stmt->bind_param("ss",$uname,$upswd);
$stmt->execute();
echo "New record inserted sucessfully";
}else{
echo "Someone already register using this User Name";
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