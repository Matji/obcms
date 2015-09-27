<?php
/* @var $this ObSectionController */
/* @var $data Obsection */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sectionTitle')); ?>:</b>
	<?php echo CHtml::encode($data->sectionTitle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sectionName')); ?>:</b>
	<?php echo CHtml::encode($data->sectionName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sectionTypeID')); ?>:</b>
	<?php echo CHtml::encode($data->sectionTypeID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('orderlist')); ?>:</b>
	<?php echo CHtml::encode($data->orderlist); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parentID')); ?>:</b>
	<?php echo CHtml::encode($data->parentID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sectionContent')); ?>:</b>
	<?php echo CHtml::encode($data->sectionContent); ?>
	<br />


</div>