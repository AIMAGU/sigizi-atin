<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'nama_lengkap',array('class'=>'span5','maxlength'=>300)); ?>

	<?php echo $form->textFieldRow($model,'username',array('class'=>'span5','maxlength'=>32)); ?>

	<?php echo $form->passwordFieldRow($model,'password',array('class'=>'span5','maxlength'=>32)); ?>

	<?php echo $form->textAreaRow($model,'alamat',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'tempat_lahir',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'tanggal_lahir',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'jenis_kelamin',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>32)); ?>

	<?php echo $form->textFieldRow($model,'telp',array('class'=>'span5','maxlength'=>15)); ?>

	<?php echo $form->textFieldRow($model,'level',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'created',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'active',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
