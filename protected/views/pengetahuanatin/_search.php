<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id_pengetahuan',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_gejala',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'y_gejala',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'n_gejala',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'y_diagnosa',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'n_diagnosa',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
