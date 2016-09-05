<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pengetahuan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_pengetahuan),array('view','id'=>$data->id_pengetahuan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_gejala')); ?>:</b>
	<?php echo CHtml::encode($data->id_gejala); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('y_gejala')); ?>:</b>
	<?php echo CHtml::encode($data->y_gejala); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('n_gejala')); ?>:</b>
	<?php echo CHtml::encode($data->n_gejala); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('y_diagnosa')); ?>:</b>
	<?php echo CHtml::encode($data->y_diagnosa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('n_diagnosa')); ?>:</b>
	<?php echo CHtml::encode($data->n_diagnosa); ?>
	<br />


</div>