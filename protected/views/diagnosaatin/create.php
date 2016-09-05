<?php
$this->breadcrumbs=array(
	'Diagnosaatins'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Diagnosaatin','url'=>array('index')),
	array('label'=>'Manage Diagnosaatin','url'=>array('admin')),
);

$this->judul=' Tambah Diagnosa Pakar';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>