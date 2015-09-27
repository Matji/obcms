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
		<?php echo $form->textField($model,'sectionTitle',array('size'=>50,'maxlength'=>50, 'id'=>'sectionTitle', 'onkeyup'=>'js:  
                                var secTitle = document.getElementById("sectionTitle");
                                var sectionName = document.getElementById("sectionName");
                                var secName = secTitle.value.toLowerCase();
                                secName = secName.replace(/[^A-Z0-9]/ig, "");
                                sectionName.value = secName;
                                  ')); ?>
		<?php echo $form->error($model,'sectionTitle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sectionName'); ?>
		<?php echo $form->textField($model,'sectionName',array('size'=>50,'maxlength'=>50,'id'=>'sectionName', 'readonly'=>true)); ?>
		<?php echo $form->error($model,'sectionName'); ?>
	</div>

	<div class="row"> 
		<?php echo $form->labelEx($model,'sectionTypeID'); ?>
		<?php echo CHtml::dropDownList('Obsection[sectionTypeID]', array(), CHtml::listData($sectionType, 'id', 'typeName')); ?>
                <?php //echo $form->error($model,'sectionTypeID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'orderlist'); ?>
		<?php echo $form->textField($model,'orderlist'); ?>
		<?php echo $form->error($model,'orderlist'); ?>
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