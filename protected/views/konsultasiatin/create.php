<?php
$this->breadcrumbs=array(
	'Konsultasiatins'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Konsultasiatin','url'=>array('index')),
	array('label'=>'Manage Konsultasiatin','url'=>array('admin')),
);
?>

<h1>Create Konsultasiatin</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>