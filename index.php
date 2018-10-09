<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('я макс');
$app->initLayout('Centered');
 $button1 = $app->add(['Button','registreties','big green']);
   $button1->link(['help','id'=>'1']);
 $button2 = $app->add(['Button','start game ','big green']);
   $button2->link(['help','id'=>'2']);
 $button3 = $app->add(['Button','a teperj test nabebermana','big green']);
   $button3->link(['help','id'=>'3']);
