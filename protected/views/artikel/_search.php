<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id_artikel',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'judul',array('class'=>'span5','maxlength'=>300)); ?>

	<?php echo $form->textAreaRow($model,'isi',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'created',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'foto',array('class'=>'span5','maxlength'=>300)); ?>

	<?php echo $form->textFieldRow($model,'id_user',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
