<?php
/* @var $this ObSectionController */
/* @var $model Obsection */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'sectionTitle'); ?>
		<?php echo $form->textField($model,'sectionTitle',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sectionName'); ?>
		<?php echo $form->textField($model,'sectionName',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sectionTypeID'); ?>
		<?php echo $form->textField($model,'sectionTypeID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'orderlist'); ?>
		<?php echo $form->textField($model,'orderlist'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parentID'); ?>
		<?php echo $form->textField($model,'parentID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sectionContent'); ?>
		<?php echo $form->textField($model,'sectionContent',array('size'=>60,'maxlength'=>60000)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->