<?php
/* @var $this ObSectionController */
/* @var $model Obsection */

$this->breadcrumbs=array(
	'Obsections'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Obsection', 'url'=>array('index')),
	array('label'=>'Create Obsection', 'url'=>array('create')),
	array('label'=>'View Obsection', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Obsection', 'url'=>array('admin')),
);
?>

<h1>Update Obsection <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'sectionType'=>$sectionType)); ?>