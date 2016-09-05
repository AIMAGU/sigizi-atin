<?php
$this->breadcrumbs=array(
	'Konsultasiatins',
);

$this->menu=array(
	array('label'=>'Create Konsultasiatin','url'=>array('create')),
	array('label'=>'Manage Konsultasiatin','url'=>array('admin')),
);
?>

<h1>Konsultasiatins</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
