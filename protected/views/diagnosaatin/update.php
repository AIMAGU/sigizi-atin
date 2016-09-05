<?php
$this->breadcrumbs=array(
	'Diagnosaatins'=>array('index'),
	$model->id_diagnosa=>array('view','id'=>$model->id_diagnosa),
	'Update',
);

$this->menu=array(
	array('label'=>'List Diagnosaatin','url'=>array('index')),
	array('label'=>'Create Diagnosaatin','url'=>array('create')),
	array('label'=>'View Diagnosaatin','url'=>array('view','id'=>$model->id_diagnosa)),
	array('label'=>'Manage Diagnosaatin','url'=>array('admin')),
);
?>

<h1>Update Diagnosaatin <?php echo $model->id_diagnosa; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>