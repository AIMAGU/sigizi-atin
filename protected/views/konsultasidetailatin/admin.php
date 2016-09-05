<?php
$this->breadcrumbs=array(
	'Konsultasidetailatins'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Konsultasidetailatin','url'=>array('index')),
	array('label'=>'Create Konsultasidetailatin','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('konsultasidetailatin-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Konsultasidetailatins</h1>
<?php $this->widget('bootstrap.widgets.TbButton', array(
	'type'=>'primary',
	'icon'=>'icon-plus',
	'label'=>'Tambah',
	'url'=>array('create'),
)); ?>
<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'konsultasidetailatin-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_konsultasi_detail',
		'id_konsultasi',
		'id_pengetahuan',
		'jawaban',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
