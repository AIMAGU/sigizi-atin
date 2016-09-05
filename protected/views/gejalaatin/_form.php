<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'gejalaatin-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'kode',array('class'=>'span5','maxlength'=>5)); ?>

	<?php echo $form->textFieldRow($model,'nama',array('class'=>'span5','maxlength'=>300)); ?>

	<?php echo $form->textAreaRow($model,'pertanyaan',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'icon'=>'icon-ok icon-white',
			'label'=>$model->isNewRecord ? 'Tambahkan' : 'Simpan',
		)); ?>
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'type'=>'default',
			'icon'=>'icon-share-alt icon-white',
			'label'=>'Kembali',
			'url'=>array('admin')
		)); ?>
	</div>

<?php $this->endWidget(); ?>
