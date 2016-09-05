<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); 
$this->judul=' Daftar / Sign Up';
?>
	<div class="control-wrap">
	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'nama_lengkap',array('class'=>'span4','maxlength'=>300)); ?>

	<?php echo $form->textFieldRow($model,'username',array('class'=>'span4','maxlength'=>32)); ?>

	<?php echo $form->passwordFieldRow($model,'password',array('class'=>'span4','maxlength'=>32)); ?>

	<?php echo $form->textAreaRow($model,'alamat',array('rows'=>3, 'class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'tempat_lahir',array('class'=>'span4','maxlength'=>100)); ?>

	<?php echo $form->datepickerRow($model, 'tanggal_lahir', array('append'=>'<i class="icon-calendar"></i>')); ?>
	
	<?php echo $form->radioButtonListRow($model, 'jenis_kelamin', array(1=>'Laki-laki', 0=>'Perempuan'	)); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span4','maxlength'=>32)); ?>

	<?php echo $form->textFieldRow($model,'telp',array('class'=>'span4','maxlength'=>15)); ?>

	<?php echo $form->hiddenField($model,'level',array('value'=>3)); ?>

	<?php echo $form->hiddenField($model,'created',array('value'=>date('Y-m-d H:i:s'))); ?>

	<?php echo $form->hiddenField($model,'active',array('value'=>1)); ?>

		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Daftar' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
