<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'gejala-form',
	'enableAjaxValidation'=>false,
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
	'type'=>'horizontal',
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<?php //echo $form->textFieldRow($model,'usia',array('class'=>'span5')); ?>

	<?php //echo $form->textFieldRow($model,'jenis_kelamin',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'tinggi_badan',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'berat_badan',array('class'=>'span5')); ?>
	
	<?php echo $form->dropDownListRow($model,'aktivitas',array(
			'Bedrest'=>'Bedrest',
			'Ringan'=>'Ringan',
			'Sedang'=>'Sedang',
			'Berat'=>'Berat',
	), array('class'=>'span5', 'empty' => '-- Pilih Aktivitas --')); ?>

	<?php echo $form->textFieldRow($model,'glukosa_2_jam',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'glukosa_puasa',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'kolesterol',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'tekanan_darah',array('class'=>'span5')); ?>

	<?php echo $form->hiddenField($model,'created',array('value'=>date('Y-m-d H:i:s'))); ?>

	<?php echo $form->hiddenField($model,'id_user',array('value'=>Yii::app()->user->id)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'icon'=>'icon-ok icon-white',
			'label'=>$model->isNewRecord ? 'Proses' : 'Proses',
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
