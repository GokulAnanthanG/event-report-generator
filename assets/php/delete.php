<?php
include"config.php";
$sql="DELETE FROM events WHERE id='{$_POST['id']}'";
if($con->query($sql)){
    echo 1;
}
else
echo 0;
?>