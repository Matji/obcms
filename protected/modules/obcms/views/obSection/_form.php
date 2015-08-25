<?php
/* @var $this ObSectionController */
/* @var $model Obsection */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'obsection-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'sectionTitle'); ?>
		<?php echo $form->textField($model,'sectionTitle',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'sectionTitle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sectionName'); ?>
		<?php echo $form->textField($model,'sectionName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'sectionName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sectionTypeID'); ?>
		<?php echo $form->textField($model,'sectionTypeID'); ?>
		<?php echo $form->error($model,'sectionTypeID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'order'); ?>
		<?php echo $form->textField($model,'order'); ?>
		<?php echo $form->error($model,'order'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parentID'); ?>
		<?php echo $form->textField($model,'parentID'); ?>
		<?php echo $form->error($model,'parentID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sectionContent'); ?>
		<?php echo $form->textField($model,'sectionContent',array('size'=>60,'maxlength'=>60000)); ?>
		<?php echo $form->error($model,'sectionContent'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->