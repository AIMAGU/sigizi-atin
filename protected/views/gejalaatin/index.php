<?php
$this->breadcrumbs=array(
	'Gejalaatins',
);

$this->menu=array(
	array('label'=>'Create Gejalaatin','url'=>array('create')),
	array('label'=>'Manage Gejalaatin','url'=>array('admin')),
);
?>

<h1>Gejalaatins</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
