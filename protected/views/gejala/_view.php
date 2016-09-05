<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_gejala')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_gejala),array('view','id'=>$data->id_gejala)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usia')); ?>:</b>
	<?php echo CHtml::encode($data->usia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_kelamin')); ?>:</b>
	<?php echo CHtml::encode($data->jenis_kelamin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tinggi_badan')); ?>:</b>
	<?php echo CHtml::encode($data->tinggi_badan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('berat_badan')); ?>:</b>
	<?php echo CHtml::encode($data->berat_badan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aktivitas')); ?>:</b>
	<?php echo CHtml::encode($data->aktivitas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('glukosa_2_jam')); ?>:</b>
	<?php echo CHtml::encode($data->glukosa_2_jam); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('glukosa_puasa')); ?>:</b>
	<?php echo CHtml::encode($data->glukosa_puasa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kolesterol')); ?>:</b>
	<?php echo CHtml::encode($data->kolesterol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tekanan_darah')); ?>:</b>
	<?php echo CHtml::encode($data->tekanan_darah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</b>
	<?php echo CHtml::encode($data->created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user')); ?>:</b>
	<?php echo CHtml::encode($data->id_user); ?>
	<br />

	*/ ?>

</div>