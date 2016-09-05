<?php
$this->breadcrumbs=array(
	'Riwayats'=>array('index'),
	$model->id_riwayat=>array('view','id'=>$model->id_riwayat),
	'Update',
);

$this->menu=array(
	array('label'=>'List Riwayat','url'=>array('index')),
	array('label'=>'Create Riwayat','url'=>array('create')),
	array('label'=>'View Riwayat','url'=>array('view','id'=>$model->id_riwayat)),
	array('label'=>'Manage Riwayat','url'=>array('admin')),
);
?>

<h1>Update Riwayat <?php echo $model->id_riwayat; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>