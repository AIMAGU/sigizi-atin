<?php
$this->breadcrumbs=array(
	'Konsultasidetailatins',
);

$this->menu=array(
	array('label'=>'Create Konsultasidetailatin','url'=>array('create')),
	array('label'=>'Manage Konsultasidetailatin','url'=>array('admin')),
);
?>

<h1>Konsultasidetailatins</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
