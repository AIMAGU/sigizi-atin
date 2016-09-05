<?php
$this->breadcrumbs=array(
	'Riwayats',
);

$this->menu=array(
	array('label'=>'Create Riwayat','url'=>array('create')),
	array('label'=>'Manage Riwayat','url'=>array('admin')),
);
?>

<h1>Riwayats</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
