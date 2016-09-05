<?php
$this->breadcrumbs=array(
	'Gejalas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Gejala','url'=>array('index')),
	array('label'=>'Create Gejala','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('gejala-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
$this->judul=' Cetak Laporan Penderita Diabetes Melitus';
?>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'gejala-grid',
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
		//'id_gejala',
		'idUser.nama_lengkap',
		array(
			'name'=>'created',
			'header'=>'Bulan',
			'value' => function($data) { return Yii::app()->dateFormatter->format("MM-yyyy",strtotime($data->created)); },
		),
		array(
			'header'=>'Karbohidrat',
			'value' => function($data) { return 2100; },
		),
		array(
			'header'=>'Lemak',
			'value' => function($data) { return 2100; },
		),
		array(
			'header'=>'Protein',
			'value' => function($data) { return 2100; },
		),
		array(
			'header'=>'DM',
			'value' => function($data) { return 2300; },
		),
		/* array(
			'header'=>'Bulan',
			'value' => function($data) { return $dm; },
		), */
		/* 'usia',
		array(
			'name'=>'jenis_kelamin',
            'type'=>'html',
            'value' => '$data->jenis_kelamin == 1 ? "L": "P"',
			'htmlOptions'=>array('style'=>'width: 30px'),
        ), 
		'tinggi_badan',
		'berat_badan',
		'aktivitas', */
		/*
		'glukosa_2_jam',
		'glukosa_puasa',
		'kolesterol',
		'tekanan_darah',
		'created',
		*/
		array(
			'header'=>'Menu',
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{list}',
			'buttons'=>array
            (
				'list' => array
                (
                    'label'=>'Lihat Menu Makanan',
                    'icon'=>'list white',
                    'url'=>'Yii::app()->createUrl("gejala/view", array("id"=>$data->id_gejala))',
                    'options'=>array(
                        'class'=>'btn btn-small btn-success btn-block',
                    ),
                ),
			)
		),
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

<embed src="cetak-laporan.pdf" width="100%" height="500" type='application/pdf'><br>
<?php $this->widget('bootstrap.widgets.TbButton', array(
	'type'=>'primary',
	'icon'=>'icon-search',
	'label'=>'Pencarian',
	'url'=>array('create'),
)); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div id="gejala-grid" class="grid-view">
<table class="items table table-striped table-bordered table-condensed">
<thead>
<tr>
<th id="gejala-grid_c0">No.</th><th id="gejala-grid_c1">Nama Lengkap</th><th id="gejala-grid_c10">JK</th><th id="gejala-grid_c2"><a class="sort-link" href="/yii-atin2/gejala-admin.html?Gejala_sort=created">Bulan<span class="caret"></span></a></th><th id="gejala-grid_c3">Total Kalori</th><th id="gejala-grid_c4">Status</th><th class="button-column" id="gejala-grid_c7">Menu</th><th class="button-column" id="gejala-grid_c8">Aksi</th></tr>
</thead>
<tbody>
<tr class="odd">
<td style="width: 25px">1</td><td>Abdul Hasan</td><td>L</td><td>08-2016</td><td>1458</td><td>DM 1500</td><td class="button-column"><a class="btn btn-small btn-success btn-block" title="Lihat Menu Makanan" rel="tooltip" href="/yii-atin2/gejala-view.html?id=14"><i class="icon-list icon-white"></i></a></td><td class="button-column"><a class="update" title="Ubah" rel="tooltip" href="/yii-atin2/gejala-update.html?id=14"><i class="icon-pencil"></i></a> <a class="delete" title="Hapus" rel="tooltip" href="/yii-atin2/gejala-delete.html?id=14"><i class="icon-trash"></i></a></td></tr>
<tr class="even">
<td style="width: 25px">2</td><td>Shabila Ana</td><td>P</td><td>08-2016</td><td>1546.87</td><td>DM 1500</td><td class="button-column"><a class="btn btn-small btn-success btn-block" title="Lihat Menu Makanan" rel="tooltip" href="/yii-atin2/gejala-view.html?id=16"><i class="icon-list icon-white"></i></a></td><td class="button-column"><a class="update" title="Ubah" rel="tooltip" href="/yii-atin2/gejala-update.html?id=16"><i class="icon-pencil"></i></a> <a class="delete" title="Hapus" rel="tooltip" href="/yii-atin2/gejala-delete.html?id=16"><i class="icon-trash"></i></a></td></tr>
<tr class="odd">
<td style="width: 25px">3</td><td>UNTARI</td><td>P</td><td>08-2016</td><td>1068.75</td><td>DM 1100</td><td class="button-column"><a class="btn btn-small btn-success btn-block" title="Lihat Menu Makanan" rel="tooltip" href="/yii-atin2/gejala-view.html?id=20"><i class="icon-list icon-white"></i></a></td><td class="button-column"><a class="update" title="Ubah" rel="tooltip" href="/yii-atin2/gejala-update.html?id=20"><i class="icon-pencil"></i></a> <a class="delete" title="Hapus" rel="tooltip" href="/yii-atin2/gejala-delete.html?id=20"><i class="icon-trash"></i></a></td></tr>
<tr class="even">
<td style="width: 25px">4</td><td>Sunanto</td><td>L</td><td>08-2016</td><td>1749.6</td><td>DM 1700</td><td class="button-column"><a class="btn btn-small btn-success btn-block" title="Lihat Menu Makanan" rel="tooltip" href="/yii-atin2/gejala-view.html?id=16"><i class="icon-list icon-white"></i></a></td><td class="button-column"><a class="update" title="Ubah" rel="tooltip" href="/yii-atin2/gejala-update.html?id=16"><i class="icon-pencil"></i></a> <a class="delete" title="Hapus" rel="tooltip" href="/yii-atin2/gejala-delete.html?id=16"><i class="icon-trash"></i></a></td></tr>
<tr class="odd">
<td style="width: 25px">5</td><td>Hendro</td><td>L</td><td>08-2016</td><td>2019.6</td><td>DM 2100</td><td class="button-column"><a class="btn btn-small btn-success btn-block" title="Lihat Menu Makanan" rel="tooltip" href="/yii-atin2/gejala-view.html?id=20"><i class="icon-list icon-white"></i></a></td><td class="button-column"><a class="update" title="Ubah" rel="tooltip" href="/yii-atin2/gejala-update.html?id=20"><i class="icon-pencil"></i></a> <a class="delete" title="Hapus" rel="tooltip" href="/yii-atin2/gejala-delete.html?id=20"><i class="icon-trash"></i></a></td></tr>
<tr class="even">
<td style="width: 25px">6</td><td>Leni</td><td>P</td><td>08-2016</td><td>1670.6</td><td>Non DM</td><td class="button-column"><a class="btn btn-small btn-danger btn-block" title="Lihat Menu Makanan" rel="tooltip" href="/yii-atin2/gejala-view.html?id=16"><i class="icon-remove icon-white"></i></a></td><td class="button-column"><a class="update" title="Ubah" rel="tooltip" href="/yii-atin2/gejala-update.html?id=16"><i class="icon-pencil"></i></a> <a class="delete" title="Hapus" rel="tooltip" href="/yii-atin2/gejala-delete.html?id=16"><i class="icon-trash"></i></a></td></tr>
<tr class="odd">
<td style="width: 25px">7</td><td>Rina</td><td>P</td><td>08-2016</td><td>1822.5</td><td>DM 1900</td><td class="button-column"><a class="btn btn-small btn-success btn-block" title="Lihat Menu Makanan" rel="tooltip" href="/yii-atin2/gejala-view.html?id=20"><i class="icon-list icon-white"></i></a></td><td class="button-column"><a class="update" title="Ubah" rel="tooltip" href="/yii-atin2/gejala-update.html?id=20"><i class="icon-pencil"></i></a> <a class="delete" title="Hapus" rel="tooltip" href="/yii-atin2/gejala-delete.html?id=20"><i class="icon-trash"></i></a></td></tr>
<tr class="even">
<td style="width: 25px">8</td><td>Handoko</td><td>L</td><td>08-2016</td><td>2369.2</td><td>DM 2300</td><td class="button-column"><a class="btn btn-small btn-success btn-block" title="Lihat Menu Makanan" rel="tooltip" href="/yii-atin2/gejala-view.html?id=16"><i class="icon-list icon-white"></i></a></td><td class="button-column"><a class="update" title="Ubah" rel="tooltip" href="/yii-atin2/gejala-update.html?id=16"><i class="icon-pencil"></i></a> <a class="delete" title="Hapus" rel="tooltip" href="/yii-atin2/gejala-delete.html?id=16"><i class="icon-trash"></i></a></td></tr>
<tr class="odd">
<td style="width: 25px">9</td><td>Poniyem</td><td>P</td><td>08-2016</td><td>1044</td><td>Non DM</td><td class="button-column"><a class="btn btn-small btn-danger btn-block" title="Lihat Menu Makanan" rel="tooltip" href="/yii-atin2/gejala-view.html?id=20"><i class="icon-remove icon-white"></i></a></td><td class="button-column"><a class="update" title="Ubah" rel="tooltip" href="/yii-atin2/gejala-update.html?id=20"><i class="icon-pencil"></i></a> <a class="delete" title="Hapus" rel="tooltip" href="/yii-atin2/gejala-delete.html?id=20"><i class="icon-trash"></i></a></td></tr>
<tr class="even">
<td style="width: 25px">10</td><td>Sarijo</td><td>L</td><td>08-2016</td><td>2018.2</td><td>DM 2100</td><td class="button-column"><a class="btn btn-small btn-success btn-block" title="Lihat Menu Makanan" rel="tooltip" href="/yii-atin2/gejala-view.html?id=16"><i class="icon-list icon-white"></i></a></td><td class="button-column"><a class="update" title="Ubah" rel="tooltip" href="/yii-atin2/gejala-update.html?id=16"><i class="icon-pencil"></i></a> <a class="delete" title="Hapus" rel="tooltip" href="/yii-atin2/gejala-delete.html?id=16"><i class="icon-trash"></i></a></td></tr>
</tbody>
</table><div class="summary">Menampilkan 1-10 dari 10 hasil</div><div class="keys" style="display:none" title="/yii-atin2/gejala-admin.html"><span>14</span><span>16</span><span>20</span></div>
</div>