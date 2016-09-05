<?php
$this->breadcrumbs=array(
	'Artikels'=>array('index'),
	$model->id_artikel=>array('view','id'=>$model->id_artikel),
	'Update',
);

$this->menu=array(
	array('label'=>'List Artikel','url'=>array('index')),
	array('label'=>'Create Artikel','url'=>array('create')),
	array('label'=>'View Artikel','url'=>array('view','id'=>$model->id_artikel)),
	array('label'=>'Manage Artikel','url'=>array('admin')),
);
?>

<h1>Update Artikel <?php echo $model->id_artikel; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>