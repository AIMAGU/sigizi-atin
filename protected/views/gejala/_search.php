<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id_gejala',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'usia',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'jenis_kelamin',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'tinggi_badan',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'berat_badan',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'aktivitas',array('class'=>'span5','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'glukosa_2_jam',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'glukosa_puasa',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'kolesterol',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'tekanan_darah',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'created',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_user',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
