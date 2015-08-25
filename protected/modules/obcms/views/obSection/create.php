<?php
/* @var $this ObSectionController */
/* @var $model Obsection */

$this->breadcrumbs=array(
	'Obsections'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Obsection', 'url'=>array('index')),
	array('label'=>'Manage Obsection', 'url'=>array('admin')),
);
?>

<h1>Create Obsection</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>