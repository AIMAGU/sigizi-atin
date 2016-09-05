<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_konsultasi_detail')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_konsultasi_detail),array('view','id'=>$data->id_konsultasi_detail)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_konsultasi')); ?>:</b>
	<?php echo CHtml::encode($data->id_konsultasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pengetahuan')); ?>:</b>
	<?php echo CHtml::encode($data->id_pengetahuan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jawaban')); ?>:</b>
	<?php echo CHtml::encode($data->jawaban); ?>
	<br />


</div>