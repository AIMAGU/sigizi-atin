<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_konsultasi')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_konsultasi),array('view','id'=>$data->id_konsultasi)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user')); ?>:</b>
	<?php echo CHtml::encode($data->id_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_diagnosa')); ?>:</b>
	<?php echo CHtml::encode($data->id_diagnosa); ?>
	<br />


</div>