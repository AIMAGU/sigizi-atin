<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_diagnosa')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_diagnosa),array('view','id'=>$data->id_diagnosa)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode')); ?>:</b>
	<?php echo CHtml::encode($data->kode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />


</div>