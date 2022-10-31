<?php
/* @var $this CountryController */
/* @var $model Country */

$this->breadcrumbs=array(
	'Countries'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista Państw', 'url'=>array('index')),
	array('label'=>'Edytuj Państwo', 'url'=>array('admin')),
);
?>

<h1>Dodaj Państwo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>