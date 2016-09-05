<?php
$this->breadcrumbs=array(
	'Gejalaatins'=>array('index'),
	$model->id_gejala,
);

$this->menu=array(
	array('label'=>'List Gejalaatin','url'=>array('index')),
	array('label'=>'Create Gejalaatin','url'=>array('create')),
	array('label'=>'Update Gejalaatin','url'=>array('update','id'=>$model->id_gejala)),
	array('label'=>'Delete Gejalaatin','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_gejala),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Gejalaatin','url'=>array('admin')),
);
?>

<h1>View Gejalaatin #<?php echo $model->id_gejala; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_gejala',
		'kode',
		'nama',
		'pertanyaan',
	),
)); ?>
