<?php
$this->breadcrumbs=array(
	'Konsultasidetailatins'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Konsultasidetailatin','url'=>array('index')),
	array('label'=>'Manage Konsultasidetailatin','url'=>array('admin')),
);
?>

<h1>Create Konsultasidetailatin</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>