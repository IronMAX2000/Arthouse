<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('я макс');
$app->initLayout('Centered');
$db = new \atk4\data\Persistence_SQL('mysql:dbname=for_colibri;host=localhost','root','');
// показывает пароль и возвраает обратно
 if (isset($_GET['id'])) {
    if ($_GET['id']==1){
      $button = $app->add(['Button','your password 1472','big green']);
      $buttonback = $app->add(['Button','back','big red']);
       $buttonback->link(['index']);
    }
    //делаем модель в которой надо ввести пароль
    if ($_GET['id']==2){
      $button = $app->add(['Label','nu i kakoj parol','big red']);


                  //последний тест на бебермана,три кнопки и три варианта ответа
    }elseif($_GET['id']==3){
        $button = $app->add(['Button','kakoj rajoncik samij krutoj na svete?','big black']);
        $button11 = $app->add(['Button','imanta','big white']);
          $button11->link(['otvetinarajonchik','id'=>'1']);
        $button22 = $app->add(['Button','bebrbeki','big white']);
          $button22->link(['otvetinarajonchik','id'=>'2']);
        $button33 = $app->add(['Button','zolik','big white']);
          $button33->link(['otvetinarajonchik','id'=>'3']);
    }
} else {
  $label = $app->add(['Label','huligani']);
}

if(isset($_GET['id'])){
  $id=$_GET['id'];
if ($id==2){

$form = $app->layout->add(['Form']);
$form->addField('password');
$form->onSubmit(function($form) {
  if ($form->model['password']=='1472'){
    return new \atk4\ui\jsExpression('document.location = "help.php?id=3" ');
  } else {
    return new \atk4\ui\jsExpression('document.location = "help.php?id=2" ');
  }

});
}
}
