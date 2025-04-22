<?php
date_default_timezone_set("Asia/Karachi");
$db=mysqli_connect("localhost","root","","staticwebsite");

if(isset($_GET['name'])){
    extract($_GET);
    $datetime=date("h:i a, d-M-Y");
    $query=mysqli_query($db,"insert into messages(name,email,subject,message,datetime) values('$name','$email','$subject','$message','$datetime')");
    if($query){
        echo "success";
    }
}
else{
echo "failed";
}
?>