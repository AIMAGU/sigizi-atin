<?php
$this->breadcrumbs=array(
	'Gejalaatins'=>array('index'),
	$model->id_gejala=>array('view','id'=>$model->id_gejala),
	'Update',
);

$this->menu=array(
	array('label'=>'List Gejalaatin','url'=>array('index')),
	array('label'=>'Create Gejalaatin','url'=>array('create')),
	array('label'=>'View Gejalaatin','url'=>array('view','id'=>$model->id_gejala)),
	array('label'=>'Manage Gejalaatin','url'=>array('admin')),
);
?>

<h1>Update Gejalaatin <?php echo $model->id_gejala; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>