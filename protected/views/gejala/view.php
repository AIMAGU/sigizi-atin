<?php
$this->breadcrumbs=array(
	'Gejalas'=>array('index'),
	$model->id_gejala,
);

$this->menu=array(
	array('label'=>'List Gejala','url'=>array('index')),
	array('label'=>'Create Gejala','url'=>array('create')),
	array('label'=>'Update Gejala','url'=>array('update','id'=>$model->id_gejala)),
	array('label'=>'Delete Gejala','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_gejala),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Gejala','url'=>array('admin')),
);
$this->judul=' Riwayat Gejala';

$usia=$model->usia;
$jk=$model->jenis_kelamin;
$tb=$model->tinggi_badan;
$bb=$model->berat_badan;
$aktivitas=$model->aktivitas;
$gula2jam=$model->glukosa_2_jam;
$gulapuasa=$model->glukosa_puasa;
$kolesterol=$model->kolesterol;
$tekanandarah=$model->tekanan_darah;
//Hitung
$bbi=90/100*($tb-100);
//
if($jk==1){
	$kb=$bbi*30;
}else{
	$kb=$bbi*25;
}
//
$imt=$bb/($tb/100*$tb/100);
//
if($usia<59){
	$kusia=(-5/100)*$kb;
}elseif($usia<69){
	$kusia=(-10/100)*$kb;
}else{
	$kusia=(-20/100)*$kb;
}
//
if($aktivitas=="Ringan"){
	$kaktiv=(20/100)*$kb;
}elseif($aktivitas=="Berat"){
	$kaktiv=(40/100)*$kb;
}elseif($aktivitas=="Bedrest"){
	$kaktiv=(10/100)*$kb;
}else{
	$kaktiv=0;
}
//
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
?>

<div class="span3">
	<div class="text-center profile-pic">
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/aimagu-theme/img/profile-pic.jpg" alt="">
	</div>
	<ul class="nav nav-tabs nav-stacked">
		<li><a href="javascript:void(0)"><i class="icon-coffee"></i> Portfolio</a></li>
		<li><a href="javascript:void(0)"><i class="icon-paper-clip"></i> Riwayats</a></li>
		<li><a href="javascript:void(0)"><i class="icon-picture"></i> Gallery</a></li>
	</ul>
	<ul class="nav nav-tabs nav-stacked">
		<li><a href="javascript:void(0)"><i class="icon-facebook"></i> Facebook</a></li>
		<li><a href="javascript:void(0)"><i class="icon-twitter"></i> Twitter</a></li>
		<li><a href="javascript:void(0)"><i class="icon-linkedin"></i> LinkedIn</a></li>
		<li><a href="javascript:void(0)"><i class="icon-pinterest"></i> Pinterest</a></li>
		<li><a href="javascript:void(0)"><i class="icon-github"></i> Github</a></li>
	</ul>
</div>
<div class="span6">
	<div class="alert alert-success"><i class="icon-ok-sign"></i> Data Tervalidasi</div>
	<h4><?= Yii::app()->user->name; ?><br/><small>Detail Data Gejala bulan <b><?php echo date('F Y', strtotime($model->created)); ?></b></small></h4>	
	<?php $this->widget('bootstrap.widgets.TbDetailView',array(
		'data'=>$model,
		'type'=>'striped bordered condensed',
		'attributes'=>array(
			//'id_gejala',
			'usia',
			array(
			   'name'=>'Jenis Kelamin',
			   'type'=>'raw',
			   'value'=>(CHtml::encode($model->jenis_kelamin)==1)? "Laki-laki":"Perempuan",
			),
			'tinggi_badan',
			'berat_badan',
			'aktivitas',
			'glukosa_2_jam',
			'glukosa_puasa',
			'kolesterol',
			'tekanan_darah',
			'created',
			//'id_user',
		),
	)); ?>
	<p class="push">
	<?php $this->widget('bootstrap.widgets.TbGridView',array(
		'id'=>'riwayat-grid',
		'dataProvider'=>Riwayat::model()->setMenu(),
		'type'=>'striped bordered condensed',
		'summaryText'=>'<span class="label label-success">Menu Makan</span>',
		'emptyText'=>'Silahkan hubungi dokter',
		'template' => '{summary}{items}{pager}',
		'columns'=>array(
			//'id_menu',
			'idMenu.waktu',
			'idMenu.tipe',
			'idMenu.menu'
		),
	)); ?>
	</p>
</div>
<div class="span3">
	<h4>Biodata Diri</h4>
	<?php
		echo "<span class='label label-warning'>Username</span> ".$user->username."<br>";
		echo "<span class='label label-warning'>Tempat Lahir</span> ".$user->tempat_lahir."<br>";
		echo "<span class='label label-warning'>Tanggal Lahir</span> ".$user->tanggal_lahir."<br>";
		echo "<span class='label label-warning'>Email</span> ".$user->email."<br>";
		echo "<span class='label label-warning'>Telp</span> ".$user->telp."<br>";
		echo "<span class='label label-warning'>Alamat</span> ".$user->alamat."<br>";
	?>
	<h4>Kebutuhan Gizi</h4>
	<ul class="icons push">
		<li><i class="icon-hand-right"></i> 
		<?php
			$karbohidrat=(60/100)*$kalori;
			echo "Karbohidrat ".$karbohidrat;
			echo " = ".round($karbohidrat/4,1)." gram";

		?></li>
		<li><i class="icon-hand-right"></i> 
		<?php
			$lemak=(25/100)*$kalori;
			echo "Lemak: ".$lemak;
			echo " = ".round($lemak/9,1)." gram";
		?>
		</li>
		<li><i class="icon-hand-right"></i> 
		<?php
			$protein=(15/100)*$kalori;
			echo "Protein: ".$protein;
			echo " = ".round($protein/4,1)." gram";
		?>
		</li>
		<li><i class="icon-hand-right"></i> 
		<?php echo "DM ".$diet; ?>
		</li>
	</ul>
	<h4>Riwayat Gejala Lainnya</h4>
	<ul class="unstyled">
		<li> <strong>Riwayat 1</strong>: <a href="javascript:void(0)">exampleproject1.com</a></li>
		<li> <strong>Riwayat 2</strong>: <a href="javascript:void(0)">exampleproject2.com</a></li>
		<li> <strong>Riwayat 3</strong>: <a href="javascript:void(0)">exampleproject3.com</a></li>
		<li> <strong>Riwayat 4</strong>: <a href="javascript:void(0)">exampleproject4.com</a></li>
		<li> <strong>Riwayat 5</strong>: <a href="javascript:void(0)">exampleproject5.com</a></li>
		<li> <strong>Riwayat 6</strong>: <a href="javascript:void(0)">exampleproject6.com</a></li>
		<li> <strong>Riwayat 7</strong>: <a href="javascript:void(0)">exampleproject7.com</a></li>
		<li> <strong>Riwayat 8</strong>: <a href="javascript:void(0)">exampleproject8.com</a></li>
		<li> <strong>Riwayat 9</strong>: <a href="javascript:void(0)">exampleproject9.com</a></li>
		<li> <strong>Riwayat 10</strong>: <a href="javascript:void(0)">exampleproject10.com</a></li>
	</ul>
</div>
<div class="space5"></div>