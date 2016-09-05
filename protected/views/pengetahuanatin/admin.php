<?php
$this->breadcrumbs=array(
	'Pengetahuanatins'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Pengetahuanatin','url'=>array('index')),
	array('label'=>'Create Pengetahuanatin','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('pengetahuanatin-grid', {
		data: $(this).serialize()
	});
	return false;
});
");

$this->judul=' Manajemen Pengetahuan Pakar';
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
		array(
			'header'=>'Basis Pengetahuan',
			'value'=>function($data){
				if($data->y_gejala){
					$y=$data->y_gejala;
					$y = Gejalaatin::model()->findByPK($y);
				}else{
					$y=$data->y_diagnosa;
					$y = Diagnosaatin::model()->findByPK($y);
				}
				if($data->n_gejala){
					$n=$data->n_gejala;
					$n = Gejalaatin::model()->findByPK($n);
				}else{
					$n=$data->n_diagnosa;
					$n = Diagnosaatin::model()->findByPK($n);
				}
				
				echo "<b>JIKA</b> ".$data->idGejala->nama."<br>";
				echo "<b>MAKA</b> ".$y['nama']."<br>";
				echo "<b>JIKA TIDAK MAKA</b> ".$n['nama'];
			}
		),
		/* 'y_gejala',
		'n_gejala',
		'y_diagnosa',
		'n_diagnosa', */
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
