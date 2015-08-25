<?php
/* @var $this ObSectionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Obsections',
);

$this->menu=array(
	array('label'=>'Create Obsection', 'url'=>array('create')),
	array('label'=>'Manage Obsection', 'url'=>array('admin')),
);
?>

<h1>Obsections</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
