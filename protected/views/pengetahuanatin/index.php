<?php
$this->breadcrumbs=array(
	'Pengetahuanatins',
);

$this->menu=array(
	array('label'=>'Create Pengetahuanatin','url'=>array('create')),
	array('label'=>'Manage Pengetahuanatin','url'=>array('admin')),
);
?>

<h1>Pengetahuanatins</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
