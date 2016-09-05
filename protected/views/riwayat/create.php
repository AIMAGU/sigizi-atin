<?php
$this->breadcrumbs=array(
	'Riwayats'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Riwayat','url'=>array('index')),
	array('label'=>'Manage Riwayat','url'=>array('admin')),
);
?>

<h1>Create Riwayat</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>