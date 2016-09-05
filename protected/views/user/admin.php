<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List User','url'=>array('index')),
	array('label'=>'Create User','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('user-grid', {
		data: $(this).serialize()
	});
	return false;
});
");

$this->judul=' Manajemen User';
?>

<?php $this->widget('bootstrap.widgets.TbButton', array(
	'type'=>'primary',
	'icon'=>'icon-plus',
	'label'=>'Tambah',
	'url'=>array('daftar'),
)); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'user-grid',
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
		//'id_user',
		'nama_lengkap',
		'username',
		//'password',
		//'alamat',
		'tempat_lahir',
		'tanggal_lahir',
		array(
			'name'=>'jenis_kelamin',
            'type'=>'html',
            'value' => '$data->jenis_kelamin == 1 ? "L": "P"',
			'htmlOptions'=>array('style'=>'width: 30px'),
        ),
		array(
			'header'=>'Akses',
            'type'=>'html',
            'value' => '$data->level == 1 ? "<span class=\"label label-success\">Admin</span>": ($data->level == 2 ? "<span class=\"label label-warning\">Petugas</span>" : ($data->level == 3 ? "<span class=\"label label-important\">Pengguna</span>" : ($data->level == 4 ? "<span class=\"label label-info\">Manajer</span>" : "Belum Diset")))',
			'htmlOptions'=>array('style'=>'width: 30px'),
        ),
		/*
		'email',
		'telp',
		'created',
		'active',
		*/
		array(
			'header'=>'Aksi',
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{view} {update} {delete}',
			'buttons'=>array
            (
                'view' => array(
                    'label'=>'Detail',
                ),
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
