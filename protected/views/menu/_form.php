<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'menu-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->dropDownListRow($model,'waktu',array(
			'Pagi'=>'Pagi',
			'Siang'=>'Siang',
			'Sore'=>'Sore',
			'Malam'=>'Malam',
	), array('class'=>'span5', 'empty' => '-- Pilih Waktu --')); ?>
	
	<?php echo $form->dropDownListRow($model,'tipe',array(
			'Makan'=>'Makan',
			'Snack'=>'Snack',
	), array('class'=>'span5', 'empty' => '-- Pilih Tipe --')); ?>
	
	<?php echo $form->dropDownListRow($model,'dm',array(
			1100=>1100,
			1300=>1300,
			1500=>1500,
			1700=>1700,
			1900=>1900,
			2100=>2100,
			2300=>2300,
			2500=>2500,
	), array('class'=>'span5', 'empty' => '-- Pilih DM --')); ?>
	
	<?php echo $form->textAreaRow($model,'menu',array('rows'=>3, 'cols'=>50, 'class'=>'span8')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
