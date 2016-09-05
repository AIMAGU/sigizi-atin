<?php
$this->breadcrumbs=array(
	'Pengetahuanatins'=>array('index'),
	$model->id_pengetahuan=>array('view','id'=>$model->id_pengetahuan),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pengetahuanatin','url'=>array('index')),
	array('label'=>'Create Pengetahuanatin','url'=>array('create')),
	array('label'=>'View Pengetahuanatin','url'=>array('view','id'=>$model->id_pengetahuan)),
	array('label'=>'Manage Pengetahuanatin','url'=>array('admin')),
);
?>

<h1>Update Pengetahuanatin <?php echo $model->id_pengetahuan; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>