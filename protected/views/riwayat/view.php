<?php
$this->breadcrumbs=array(
	'Riwayats'=>array('index'),
	$model->id_riwayat,
);

$this->menu=array(
	array('label'=>'List Riwayat','url'=>array('index')),
	array('label'=>'Create Riwayat','url'=>array('create')),
	array('label'=>'Update Riwayat','url'=>array('update','id'=>$model->id_riwayat)),
	array('label'=>'Delete Riwayat','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_riwayat),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Riwayat','url'=>array('admin')),
);
?>

<h1>View Riwayat #<?php echo $model->id_riwayat; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_riwayat',
		'bulan',
		'id_gejala',
		'id_menu',
		'created',
	),
)); ?>
