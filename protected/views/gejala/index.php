<?php
$this->breadcrumbs=array(
	'Gejalas',
);

$this->menu=array(
	array('label'=>'Create Gejala','url'=>array('create')),
	array('label'=>'Manage Gejala','url'=>array('admin')),
);

$this->judul=" Riwayat Konsultasi";
?>
<div class="well">
<center>
<?php $this->widget('bootstrap.widgets.TbButton', array(
	'type'=>'danger',
	'icon'=>'icon-arrow-right',
	'label'=>'Mulai Konsultasi',
	'url'=>array('konsultasiatin/start'),
)); ?>
</center>
</div>


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
			'name'=>'jenis_kelamin',
            'type'=>'html',
			'header'=>'JK',
            'value' => '$data->jenis_kelamin == 1 ? "L": "P"',
			'htmlOptions'=>array('style'=>'width: 30px'),
        ),
		array(
			'name'=>'created',
			'header'=>'Bulan',
			'value' => function($data) { return Yii::app()->dateFormatter->format("MM-yyyy",strtotime($data->created)); },
		),
		array(
			'header'=>'Total Kalori',
			'value' => function($data) { 
				$usia=$data->usia;
				$jk=$data->jenis_kelamin;
				$tb=$data->tinggi_badan;
				$bb=$data->berat_badan;
				$aktivitas=$data->aktivitas;
				$gula2jam=$data->glukosa_2_jam;
				$gulapuasa=$data->glukosa_puasa;
				$kolesterol=$data->kolesterol;
				$tekanandarah=$data->tekanan_darah;
				$bbi=90/100*($tb-100);
				if($jk==1){
					$kb=$bbi*30;
				}else{
					$kb=$bbi*25;
				}
				$imt=$bb/($tb/100*$tb/100);
				if($usia<59){
					$kusia=(-5/100)*$kb;
				}elseif($usia<69){
					$kusia=(-10/100)*$kb;
				}else{
					$kusia=(-20/100)*$kb;
				}
				if($aktivitas=="Ringan"){
					$kaktiv=(20/100)*$kb;
				}elseif($aktivitas=="Berat"){
					$kaktiv=(40/100)*$kb;
				}elseif($aktivitas=="Bedrest"){
					$kaktiv=(10/100)*$kb;
				}else{
					$kaktiv=0;
				}
				if($imt<18.5){
					$kimt=(20/100)*$kb;
				}elseif($imt>22.9){
					$kimt=(-20/100)*$kb;
				}else{
					$kimt=0;
				}
				$kalori=$kb+$kusia+$kaktiv+$kimt;
				return $kalori;
			},
		),
		array(
			'header'=>'Status',
			'value' => function($data) { 
				$usia=$data->usia;
				$jk=$data->jenis_kelamin;
				$tb=$data->tinggi_badan;
				$bb=$data->berat_badan;
				$aktivitas=$data->aktivitas;
				$gula2jam=$data->glukosa_2_jam;
				$gulapuasa=$data->glukosa_puasa;
				$kolesterol=$data->kolesterol;
				$tekanandarah=$data->tekanan_darah;
				$bbi=90/100*($tb-100);
				if($jk==1){
					$kb=$bbi*30;
				}else{
					$kb=$bbi*25;
				}
				$imt=$bb/($tb/100*$tb/100);
				if($usia<59){
					$kusia=(-5/100)*$kb;
				}elseif($usia<69){
					$kusia=(-10/100)*$kb;
				}else{
					$kusia=(-20/100)*$kb;
				}
				if($aktivitas=="Ringan"){
					$kaktiv=(20/100)*$kb;
				}elseif($aktivitas=="Berat"){
					$kaktiv=(40/100)*$kb;
				}elseif($aktivitas=="Bedrest"){
					$kaktiv=(10/100)*$kb;
				}else{
					$kaktiv=0;
				}
				if($imt<18.5){
					$kimt=(20/100)*$kb;
				}elseif($imt>22.9){
					$kimt=(-20/100)*$kb;
				}else{
					$kimt=0;
				}
				$kalori=$kb+$kusia+$kaktiv+$kimt;
				if($gulapuasa<110 && $gula2jam<140){
					return "Non DM";
				}else{
					return "DM";
				}
				
			},
		),
		array(
			'header'=>'DIET',
			'value' => function($data) { 
				$usia=$data->usia;
				$jk=$data->jenis_kelamin;
				$tb=$data->tinggi_badan;
				$bb=$data->berat_badan;
				$aktivitas=$data->aktivitas;
				$gula2jam=$data->glukosa_2_jam;
				$gulapuasa=$data->glukosa_puasa;
				$kolesterol=$data->kolesterol;
				$tekanandarah=$data->tekanan_darah;
				$bbi=90/100*($tb-100);
				if($jk==1){
					$kb=$bbi*30;
				}else{
					$kb=$bbi*25;
				}
				$imt=$bb/($tb/100*$tb/100);
				if($usia<59){
					$kusia=(-5/100)*$kb;
				}elseif($usia<69){
					$kusia=(-10/100)*$kb;
				}else{
					$kusia=(-20/100)*$kb;
				}
				if($aktivitas=="Ringan"){
					$kaktiv=(20/100)*$kb;
				}elseif($aktivitas=="Berat"){
					$kaktiv=(40/100)*$kb;
				}elseif($aktivitas=="Bedrest"){
					$kaktiv=(10/100)*$kb;
				}else{
					$kaktiv=0;
				}
				if($imt<18.5){
					$kimt=(20/100)*$kb;
				}elseif($imt>22.9){
					$kimt=(-20/100)*$kb;
				}else{
					$kimt=0;
				}
				$kalori=$kb+$kusia+$kaktiv+$kimt;
				if($gulapuasa<110 && $gula2jam<140){
					$dm=0;
				}else{
					$dm=1;
				}
				if($dm==1){
					if($kalori<=1200){
						$diet=1100;
					}elseif($kalori<=1400){
						$diet=1300;
					}elseif($kalori<=1600){
						$diet=1500;
					}elseif($kalori<=1800){
						$diet=1700;
					}elseif($kalori<=2000){
						$diet=1900;
					}elseif($kalori<=2200){
						$diet=2100;
					}elseif($kalori<=2400){
						$diet=2300;
					}elseif($kalori>2400){
						$diet=2500;
					}
				}else{
					$diet=0;
				}
				return $diet;
			},
		),
		array(
			'header'=>'Menu',
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{list}{delete}',
			'buttons'=>array
            (
				'list' => array(
                    'label'=>'Lihat Menu Makanan',
                    'icon'=>'list white',
                    'url'=>'Yii::app()->createUrl("gejala/view", array("id"=>$data->id_gejala))',
                    'options'=>array(
                        'class'=>'btn btn-small btn-success btn-block',
                    ),
                ),
				'delete' => array(
                    'label'=>'Hapus',
                    'icon'=>'trash white',
                    'url'=>'Yii::app()->createUrl("gejala/delete", array("id"=>$data->id_gejala))',
                    'options'=>array(
                        'class'=>'btn btn-small btn-danger btn-block',
                    ),
                ),
			)
		),
	),
)); ?>
