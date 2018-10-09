<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('я макс');
$app->initLayout('Centered');
if (isset($_GET['id'])) {
   if ($_GET['id']==1){
     $button = $app->add(['Button','huimanta,ti loshara!','big red']);
   }
   if ($_GET['id']==2){
     $button = $app->add(['Button','krasauchik,teper i ti beberman!','big green']);
   }
   if ($_GET['id']==3){
     $button = $app->add(['Button','hujolik,loshara!','big red']);
   }
}
