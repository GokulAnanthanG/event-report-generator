<?php
include"config.php";

$file1Name="";
$file2Name="";
$file3Name="";
$file4Name="";
$file5Name="";
$file6Name="";
 
 if(count($_FILES)>=1){
if( move_uploaded_file($_FILES['image1']['tmp_name'],'files/'.$_FILES["image1"]["name"])){
    $file1Name=$_FILES["image1"]["name"];
}
 }




 if(count($_FILES)>=2){
if( move_uploaded_file($_FILES['image2']['tmp_name'],'files/'.$_FILES["image2"]["name"])){
    $file2Name=$_FILES["image2"]["name"];
}
 }

 if(count($_FILES)>=3){
if( move_uploaded_file($_FILES['image3']['tmp_name'],'files/'.$_FILES["image3"]["name"])){
    $file3Name=$_FILES["image3"]["name"];
}
 }



 if(count($_FILES)>=4){
if( move_uploaded_file($_FILES['image4']['tmp_name'],'files/'.$_FILES["image4"]["name"])){
    $file4Name=$_FILES["image4"]["name"];
}
 }


 if(count($_FILES)>=5){
if( move_uploaded_file($_FILES['image5']['tmp_name'],'files/'.$_FILES["image5"]["name"])){
    $file5Name=$_FILES["image5"]["name"];
}
 }


 if(count($_FILES)>=6){
if( move_uploaded_file($_FILES['image6']['tmp_name'],'files/'.$_FILES["image6"]["name"])){
    $file6Name=$_FILES["image6"]["name"];
}
 }
 
$sql="INSERT INTO events(program,date,students,guest,organizedby,scheme,topic,summary,image1,image2,image3,image4,image5,image6) VALUES('{$_POST['program']}','{$_POST['date']}','{$_POST['noOfStudents']}','{$_POST['guest']}','{$_POST['organized']}','{$_POST['scheme']}','{$_POST['topic']}','{$_POST['summary']}','{$file1Name}','{$file2Name}','{$file3Name}','{$file4Name}','{$file5Name}','{$file6Name}')";
if($con->query($sql)){
    echo 1;
}
else{
    echo 0;
}
?>