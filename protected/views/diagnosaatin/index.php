<?php
$this->breadcrumbs=array(
	'Diagnosaatins',
);

$this->menu=array(
	array('label'=>'Create Diagnosaatin','url'=>array('create')),
	array('label'=>'Manage Diagnosaatin','url'=>array('admin')),
);
?>

<h1>Diagnosaatins</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
