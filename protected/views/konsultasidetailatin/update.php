<?php
$this->breadcrumbs=array(
	'Konsultasidetailatins'=>array('index'),
	$model->id_konsultasi_detail=>array('view','id'=>$model->id_konsultasi_detail),
	'Update',
);

$this->menu=array(
	array('label'=>'List Konsultasidetailatin','url'=>array('index')),
	array('label'=>'Create Konsultasidetailatin','url'=>array('create')),
	array('label'=>'View Konsultasidetailatin','url'=>array('view','id'=>$model->id_konsultasi_detail)),
	array('label'=>'Manage Konsultasidetailatin','url'=>array('admin')),
);
?>

<h1>Update Konsultasidetailatin <?php echo $model->id_konsultasi_detail; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>