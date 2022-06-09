<?php
include"config.php";
$sql="SELECT * FROM events WHERE program LIKE '%".$_POST["key"]."%' OR date LIKE '%".$_POST["key"]."%' ";
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
