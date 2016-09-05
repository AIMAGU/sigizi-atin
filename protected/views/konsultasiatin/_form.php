<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'konsultasiatin-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'tanggal',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_user',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_diagnosa',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
