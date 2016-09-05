<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'konsultasidetailatin-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'id_konsultasi',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_pengetahuan',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'jawaban',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
