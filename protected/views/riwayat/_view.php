<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_riwayat')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_riwayat),array('view','id'=>$data->id_riwayat)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bulan')); ?>:</b>
	<?php echo CHtml::encode($data->bulan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_gejala')); ?>:</b>
	<?php echo CHtml::encode($data->id_gejala); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_menu')); ?>:</b>
	<?php echo CHtml::encode($data->id_menu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</b>
	<?php echo CHtml::encode($data->created); ?>
	<br />


</div>