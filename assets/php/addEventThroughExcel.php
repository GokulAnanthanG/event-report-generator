<?php
include"config.php";
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
$count=0;

$fileName= $_FILES["file"]["name"];
$file_ext=pathinfo($fileName,PATHINFO_EXTENSION);
$allowed_ext=['xls','csv','xlsx'];
if(in_array($file_ext,$allowed_ext)){
    $inputFileName =$_FILES["file"]["tmp_name"] ;
    $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileName);
    //
    $excelData = $spreadsheet->getActiveSheet()->toArray();
  //process
   
  /*-----*/
    foreach($excelData as $row){
        if($count>0){   
   $sql="INSERT INTO events(program,date,students,guest,organizedby,scheme,topic,summary) 
   VALUES('{$row[0]}','{$row[1]}','{$row[2]}','{$row[3]}','{$row[4]}','{$row[5]}','{$row[6]}','{$row[7]}')
   ";
   $con->query($sql);
        }
        $count++;
     }//for each
    if($count==count($excelData)){
        echo 1;
    }
    else{
        echo"else";
    }
}

?>