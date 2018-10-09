<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('числа Фибоначчи');
$app->initLayout('Centered');
if (isset($_GET['No1'])) {
  $No1=$_GET['No1'];
  $No2=$_GET['No2'];
  $No3=$No1+$No2;
  $No1=$No2;
  $No2=$No3;
} else{
$No1=1;
$No2=1;


}
$app->add(['Label',$No1,'big green']);
$button=$app->add(['Button','показать следующее число','large red']);
$button->link(['fibanachi','No1'=>$No1,'No2'=>$No2]);
