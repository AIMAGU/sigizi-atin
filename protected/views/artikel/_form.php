<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'artikel-form',
	'enableAjaxValidation'=>false,
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
	'type'=>'horizontal',
	'focus'=>array($model,'judul'),
	'htmlOptions'=>array(
		'enctype'=>'multipart/form-data'
	)
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'judul',array('class'=>'span8','maxlength'=>300)); ?>

	<div class="control-group ">
	<label class="control-label required" >Isi <span class="required">*</span></label>
		<div class="controls">
		<?php $this->widget('ext.eckeditor.ECKEditor', array(
			'model'=>$model,
			'attribute'=>'isi',
		)); ?>
		</div>
	</div>
	
	<?php echo $form->fileFieldRow($model,'foto',array('class'=>'span5','maxlength'=>100, 'hint'=>'<i style="color:blue">Foto harus dalam format jpg, png maksimal 1 MB</i>')); ?>

	<?php echo $form->hiddenField($model,'id_user',array('value'=>Yii::app()->user->id)); ?>
	<?php echo $form->hiddenField($model,'created',array('value'=>date('Y-m-d H:i:s'))); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'icon'=>'icon-ok icon-white',
			'label'=>$model->isNewRecord ? 'Terbitkan' : 'Simpan',
		)); ?>
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'type'=>'default',
			'icon'=>'icon-share-alt icon-white',
			'label'=>'Kembali',
			'url'=>array('admin')
		)); ?>
	</div>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>
<?php $this->endWidget(); ?>
