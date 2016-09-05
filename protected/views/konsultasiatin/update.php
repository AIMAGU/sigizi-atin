<?php
$this->breadcrumbs=array(
	'Konsultasiatins'=>array('index'),
	$model->id_konsultasi=>array('view','id'=>$model->id_konsultasi),
	'Update',
);

$this->menu=array(
	array('label'=>'List Konsultasiatin','url'=>array('index')),
	array('label'=>'Create Konsultasiatin','url'=>array('create')),
	array('label'=>'View Konsultasiatin','url'=>array('view','id'=>$model->id_konsultasi)),
	array('label'=>'Manage Konsultasiatin','url'=>array('admin')),
);
?>

<h1>Update Konsultasiatin <?php echo $model->id_konsultasi; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>