<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_gejala')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_gejala),array('view','id'=>$data->id_gejala)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode')); ?>:</b>
	<?php echo CHtml::encode($data->kode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pertanyaan')); ?>:</b>
	<?php echo CHtml::encode($data->pertanyaan); ?>
	<br />


</div>