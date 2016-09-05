<?php
$this->breadcrumbs=array(
	'Artikels'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Artikel','url'=>array('index')),
	array('label'=>'Manage Artikel','url'=>array('admin')),
);
$this->judul="Tambah Artikel Baru";
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>