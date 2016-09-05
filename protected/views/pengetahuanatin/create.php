<?php
$this->breadcrumbs=array(
	'Pengetahuanatins'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pengetahuanatin','url'=>array('index')),
	array('label'=>'Manage Pengetahuanatin','url'=>array('admin')),
);
$this->judul=' Tambah Pengetahuan Pakar';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>