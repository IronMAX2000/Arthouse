<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('я макс');
$app->initLayout('Centered');
$garderob = array(
  '1' => 'один',
  '2' =>'два',
  '3' =>'три',
  '4' =>'четре',
  '5' =>'пять',
  '6' =>'шесть',
  '7' =>'семь',
  '8' =>'восемь',
  '9' =>'девять',
  '10' =>'десять'
   );
   function hi($garderob,$app)
      {
        foreach ($garderob as $shkaf) {
        $app->add(['Label',$shkaf,'big green']);
      }
      }
hi($garderob,$app);
