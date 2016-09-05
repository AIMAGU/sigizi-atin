<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'pengetahuanatin-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	JIKA<br>
	<?php 
	$gejala=Gejalaatin::model()->findAll(array('order' => 'id_gejala ASC'));
	$diagnosa=Diagnosaatin::model()->findAll(array('order' => 'id_diagnosa ASC'));
	echo $form->dropDownList($model,'id_gejala',
        CHtml::listData($gejala, 'id_gejala', function($gejala) { return $gejala->kode . ' - ' . $gejala->nama; }), 
		array('class'=>'form-control', 'empty'=>'-- Pilih --'));
    ?>
	<br>MAKA<br>
	<?php
		echo $form->dropDownList($model,'y_gejala',
        CHtml::listData($gejala, 'id_gejala', function($gejala) { return $gejala->kode . ' - ' . $gejala->pertanyaan; }), 
		array('class'=>'form-control', 'empty'=>''));
    ?>
	<?php
		echo $form->dropDownList($model,'y_diagnosa',
        CHtml::listData($diagnosa, 'id_diagnosa', function($diagnosa) { return $diagnosa->kode . ' - ' . $diagnosa->nama; }), 
		array('class'=>'form-control', 'empty'=>''));
    ?>
	
	<br>JIKA TIDAK MAKA<br>
	<?php
		echo $form->dropDownList($model,'n_gejala',
        CHtml::listData($gejala, 'id_gejala', function($gejala) { return $gejala->kode . ' - ' . $gejala->pertanyaan; }), 
		array('class'=>'form-control', 'empty'=>''));
    ?>
	<?php
		echo $form->dropDownList($model,'n_diagnosa',
        CHtml::listData($diagnosa, 'id_diagnosa', function($diagnosa) { return $diagnosa->kode . ' - ' . $diagnosa->nama; }), 
		array('class'=>'form-control', 'empty'=>''));
    ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'icon'=>'icon-ok icon-white',
			'label'=>$model->isNewRecord ? 'Proses' : 'Simpan',
		)); ?>
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'type'=>'default',
			'icon'=>'icon-share-alt icon-white',
			'label'=>'Kembali',
			'url'=>array('admin')
		)); ?>
	</div>

<?php $this->endWidget(); ?>
