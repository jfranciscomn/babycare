<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bebe-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'app'); ?>
		<?php echo $form->textField($model,'app',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'app'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apm'); ?>
		<?php echo $form->textField($model,'apm',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'apm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sexo'); ?>
		<?php echo $form->textField($model,'sexo',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'sexo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_nac'); ?>
		<?php echo $form->textField($model,'fecha_nac'); ?>
		<?php echo $form->error($model,'fecha_nac'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->