<?php
/* @var $this ObSectionController */
/* @var $model Obsection */

$this->breadcrumbs=array(
	'Obsections'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Obsection', 'url'=>array('index')),
	array('label'=>'Create Obsection', 'url'=>array('create')),
	array('label'=>'Update Obsection', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Obsection', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Obsection', 'url'=>array('admin')),
);
?>

<h1>View Obsection #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'sectionTitle',
		'sectionName',
		'sectionTypeID',
		'id',
		'order',
		'parentID',
		'sectionContent',
	),
)); ?>
