<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('я макс');
$app->initLayout('Centered');
$db = new \atk4\data\Persistence_SQL('mysql:dbname=for_colibri;host=localhost','root','');
class Tourist extends \atk4\data\Model {
  public $table = 'tourist';
  function init() {
   parent::init();
    $this->addField('name');
    $this->addField('surname');
    $this->addField('login');
    $this->addField('password',['type'=>'password']);
    $this->hasOne('country_id', new Country);
  }
}
class Country extends \atk4\data\Model {
    public $table = 'country';
function init() {
    parent::init();
    $this->addField('name');
    $this->addField('city');
    $this->addField('hotel');
    $this->hasMany('Tourist', new Tourist);
  }
}
/*class Flight extends \atk4\data\Model {
  public $table = 'flight';
  function init() {
    parent init();
    $this->addField('date',['type'=>'date']);
    $this->addField('time',['type'=>'time']);
    $this->addField('company');
    $this->hasMany('country', new Country);
  }
}*/
$form = $app->layout->add(['Form']);
$form->setModel(new Tourist($db));
$form->onSubmit(function($form) {
  $form->model->save();
  return $form->success('profil gotov');
});

$form = $app->layout->add(['Form']);
$form->setModel(new Country($db));
$form->onSubmit(function($form) {
  $form->model->save();
  return $form->success('Record updated');
});
/*$form = $app->layout->add(['Form']);
$form->setModel(new Flight($db));
$form->onSubmit(function($form) {
  $form->model->save();
  return $form->success('Record updated');
});*/
$CRUD= $app->add(['CRUD']);
$CRUD->setModel(new Country($db));

$tourist = new Tourist($db);
$tourist->loadAny();
foreach ($tourist as $human) {
  $app->add(['Label',$human['name']]);
}
