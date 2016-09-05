<?php
$this->breadcrumbs=array(
	'Gejalas'=>array('index'),
	$model->id_gejala=>array('view','id'=>$model->id_gejala),
	'Update',
);

$this->menu=array(
	array('label'=>'List Gejala','url'=>array('index')),
	array('label'=>'Create Gejala','url'=>array('create')),
	array('label'=>'View Gejala','url'=>array('view','id'=>$model->id_gejala)),
	array('label'=>'Manage Gejala','url'=>array('admin')),
);
?>

<h1>Update Gejala <?php echo $model->id_gejala; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>