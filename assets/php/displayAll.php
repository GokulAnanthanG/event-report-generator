<?php
include"config.php";
$sql="SELECT * FROM events ORDER BY id DESC";
if($result=$con->query($sql)){
if($result->num_rows>0){
    $arrayData=array();
    while($data=$result->fetch_object()){
    array_push($arrayData,$data);
    }
    echo json_encode($arrayData);
}
else{
    echo 0;
}
}
else{
    echo 000;
}
?>
