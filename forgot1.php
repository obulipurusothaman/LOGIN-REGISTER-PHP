<?php

$emailname=$_POST["emailname"];



if(!empty($emailname)){
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
$SELECT="SELECT emailname From forgot1 Where emailname=? Limit 1";
$INSERT="INSERT Into forgot1(emailname) values(?)";

//prepare statement
$stmt=$conn->prepare($SELECT);
$stmt->bind_param("s",$emailname);
$stmt->execute();
$stmt->bind_result($emailname);
$stmt->store_result();
$rnum=$stmt->num_rows;

//checking username
if($rnum==0){
$stmt->close();
$stmt=$conn->prepare($INSERT);
$stmt->bind_param("s",$emailname);
$stmt->execute();
echo "New record inserted sucessfully";
}else{
echo "This EmailId alredy Used"."<br>";
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