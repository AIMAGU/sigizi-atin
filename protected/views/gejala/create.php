<?php
$this->breadcrumbs=array(
	'Gejalas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Gejala','url'=>array('index')),
	array('label'=>'Manage Gejala','url'=>array('admin')),
);
$this->judul="Isikan Data Gejala"
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>