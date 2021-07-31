<?php 

$con = mysqli_connect("localhost","mhemanthkmr","hemanth123" ,"users");
if($con)
{
    // print_r($con);
    echo "Successs";
}
else 
{
    echo "Failed";
}

function db_conn() {
    
}
?>