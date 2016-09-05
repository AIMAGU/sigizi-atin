<?php
$this->breadcrumbs=array(
	'Diagnosaatins'=>array('index'),
	$model->id_diagnosa,
);

$this->menu=array(
	array('label'=>'List Diagnosaatin','url'=>array('index')),
	array('label'=>'Create Diagnosaatin','url'=>array('create')),
	array('label'=>'Update Diagnosaatin','url'=>array('update','id'=>$model->id_diagnosa)),
	array('label'=>'Delete Diagnosaatin','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_diagnosa),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Diagnosaatin','url'=>array('admin')),
);
?>

<h1>View Diagnosaatin #<?php echo $model->id_diagnosa; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_diagnosa',
		'kode',
		'nama',
	),
)); ?>
