<?php
$this->breadcrumbs=array(
	'Konsultasidetailatins'=>array('index'),
	$model->id_konsultasi_detail,
);

$this->menu=array(
	array('label'=>'List Konsultasidetailatin','url'=>array('index')),
	array('label'=>'Create Konsultasidetailatin','url'=>array('create')),
	array('label'=>'Update Konsultasidetailatin','url'=>array('update','id'=>$model->id_konsultasi_detail)),
	array('label'=>'Delete Konsultasidetailatin','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_konsultasi_detail),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Konsultasidetailatin','url'=>array('admin')),
);
?>

<h1>View Konsultasidetailatin #<?php echo $model->id_konsultasi_detail; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_konsultasi_detail',
		'id_konsultasi',
		'id_pengetahuan',
		'jawaban',
	),
)); ?>
