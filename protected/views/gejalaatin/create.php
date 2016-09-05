<?php
$this->breadcrumbs=array(
	'Gejalaatins'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Gejalaatin','url'=>array('index')),
	array('label'=>'Manage Gejalaatin','url'=>array('admin')),
);

$this->judul=' Tambah Gejala Pakar';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>