<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id_gejala',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'kode',array('class'=>'span5','maxlength'=>5)); ?>

	<?php echo $form->textFieldRow($model,'nama',array('class'=>'span5','maxlength'=>300)); ?>

	<?php echo $form->textAreaRow($model,'pertanyaan',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
