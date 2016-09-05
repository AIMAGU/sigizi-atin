<?php
$this->breadcrumbs=array(
	'Konsultasiatins'=>array('index'),
	$model->id_konsultasi,
);

$this->menu=array(
	array('label'=>'List Konsultasiatin','url'=>array('index')),
	array('label'=>'Create Konsultasiatin','url'=>array('create')),
	array('label'=>'Update Konsultasiatin','url'=>array('update','id'=>$model->id_konsultasi)),
	array('label'=>'Delete Konsultasiatin','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_konsultasi),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Konsultasiatin','url'=>array('admin')),
);
?>

<h1>View Konsultasiatin #<?php echo $model->id_konsultasi; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_konsultasi',
		'tanggal',
		'id_user',
		'id_diagnosa',
	),
)); ?>
