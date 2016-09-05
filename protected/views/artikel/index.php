<?php
$this->breadcrumbs=array(
	'Artikels',
);

$this->menu=array(
	array('label'=>'Create Artikel','url'=>array('create')),
	array('label'=>'Manage Artikel','url'=>array('admin')),
);
$this->judul=" Artikel";
?>
<?php 
if(Yii::app()->user->level==1){
$this->widget('bootstrap.widgets.TbButton', array(
	'type'=>'primary',
	'icon'=>'icon-pencil icon-white',
	'label'=>'Tulis Artikel',
	'url'=>array('create')
));	
}
?>
<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
