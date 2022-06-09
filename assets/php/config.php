<?php
$con =new mysqli("localhost","root","","eventreport");
if($con->connect_error){
    echo"failed to connect";
}
 
?>