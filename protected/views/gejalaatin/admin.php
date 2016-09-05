<?php
$this->breadcrumbs=array(
	'Gejalaatins'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Gejalaatin','url'=>array('index')),
	array('label'=>'Create Gejalaatin','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('gejalaatin-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
$this->judul=' Manajemen Gejala Pakar';
?>

<?php $this->widget('bootstrap.widgets.TbButton', array(
	'type'=>'primary',
	'icon'=>'icon-plus',
	'label'=>'Tambah',
	'url'=>array('create'),
)); ?>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'gejalaatin-grid',
	'dataProvider'=>$model->search(),
	'type'=>'striped bordered condensed',
	'template' => '{items}{pager}{summary}',
	'columns'=>array(
		array(
			'header' => 'No.',
			'value' => '$row + 1 + ($this->grid->dataProvider->pagination->currentPage
				* $this->grid->dataProvider->pagination->pageSize)',
			'htmlOptions'=>array('style'=>'width: 25px'),
		),
		'kode',
		'nama',
		'pertanyaan',
		array(
			'header'=>'Aksi',
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update} {delete}',
			'buttons'=>array
            (
                'update' => array(
                    'label'=>'Ubah',
                ),
				'delete' => array(
                    'label'=>'Hapus',
                ),
			)
		),
	),
)); ?>
