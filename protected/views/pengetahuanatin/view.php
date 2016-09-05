<?php
$this->breadcrumbs=array(
	'Pengetahuanatins'=>array('index'),
	$model->id_pengetahuan,
);

$this->menu=array(
	array('label'=>'List Pengetahuanatin','url'=>array('index')),
	array('label'=>'Create Pengetahuanatin','url'=>array('create')),
	array('label'=>'Update Pengetahuanatin','url'=>array('update','id'=>$model->id_pengetahuan)),
	array('label'=>'Delete Pengetahuanatin','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pengetahuan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pengetahuanatin','url'=>array('admin')),
);
?>

<?php		
	/* $check=Konsultasiatin::model()->findByAttributes(array(
		'id_diagnosa' => Null,
		'id_konsultasi'=>Yii::app()->session['id_konsultasi'],
	));
	if(!empty($check->id_konsultasi)){
		echo "Lanjut";
	}else{
		echo "End-Tampilkan diagnosa";
	} */
	if(!empty($_GET['end']) && $_GET['end']==1){
		$diagnosa=Diagnosaatin::model()->findByAttributes(array(
			'id_diagnosa' => $_GET['id'],
		));
		echo "<h3 class='well'><center>".$diagnosa->nama."<br>";
		$this->widget('bootstrap.widgets.TbButton', array(
			'type'=>'success',
			'icon'=>'icon-flag icon-white',
			'label'=>'KONSULTASI LAGI',
			'url'=>array('konsultasiatin/start')
		));
		echo "&nbsp";
		if($_GET['id']==1){
			$this->widget('bootstrap.widgets.TbButton', array(
				'type'=>'warning',
				'icon'=>'icon-th icon-white',
				'label'=>'LIHAT MENU',
				'url'=>array('gejala/create')
			));
		}
		echo "</center></h3>";
		$id_konsultasi=Yii::app()->session['id_konsultasi'];
		$riwayat = Konsultasidetailatin::model()->findAll(
			array("condition"=>"id_konsultasi =  $id_konsultasi","order"=>"id_konsultasi_detail"));
		echo '<div class="alert alert-block alert-info fade in">
				<h4 class="alert-heading">Riwayat</h4>';
		foreach($riwayat as $i){
			echo '<p>'.$i->idPengetahuan->idGejala->pertanyaan;
			if($i->jawaban==1){
				echo " <span class='badge badge-success'>Ya</span></p>";
			}else{
				echo " <span class='badge badge-important'>Tidak</span></p>";
			};
		}
		echo "</div>";
	}else{
		echo "<h3 class='well'><center>".$model->idGejala->pertanyaan;
		if($model->y_gejala && $model->n_diagnosa){
			echo "<br>";
			$this->widget('bootstrap.widgets.TbButton', array(
				'type'=>'primary',
				'icon'=>'icon-ok icon-white',
				'label'=>'YA',
				'url'=>array('konsultasidetailatin/riwayat', 'j'=>1, 'id'=>$model->y_gejala, 'p'=>$model->id_pengetahuan)
			));echo "&nbsp";
			$this->widget('bootstrap.widgets.TbButton', array(
				'type'=>'warning',
				'icon'=>'icon-remove icon-white',
				'label'=>'TIDAK',
				'url'=>array('konsultasidetailatin/end', 'j'=>0, 'id'=>$model->n_diagnosa, 'p'=>$model->id_pengetahuan)
			));
		}elseif($model->y_gejala && $model->n_gejala){
			echo "<br>";
			$this->widget('bootstrap.widgets.TbButton', array(
				'type'=>'primary',
				'icon'=>'icon-ok icon-white',
				'label'=>'YA',
				'url'=>array('konsultasidetailatin/riwayat', 'j'=>1, 'id'=>$model->y_gejala, 'p'=>$model->id_pengetahuan)
			));echo "&nbsp";
			$this->widget('bootstrap.widgets.TbButton', array(
				'type'=>'warning',
				'icon'=>'icon-remove icon-white',
				'label'=>'TIDAK',
				'url'=>array('konsultasidetailatin/riwayat', 'j'=>0, 'id'=>$model->n_gejala, 'p'=>$model->id_pengetahuan)
			));
		}elseif($model->y_diagnosa && $model->n_gejala){
			echo "<br>";
			$this->widget('bootstrap.widgets.TbButton', array(
				'type'=>'primary',
				'icon'=>'icon-ok icon-white',
				'label'=>'YA',
				'url'=>array('konsultasidetailatin/end', 'j'=>1, 'id'=>$model->y_diagnosa, 'p'=>$model->id_pengetahuan)
			));echo "&nbsp";
			$this->widget('bootstrap.widgets.TbButton', array(
				'type'=>'warning',
				'icon'=>'icon-remove icon-white',
				'label'=>'TIDAK',
				'url'=>array('konsultasidetailatin/riwayat', 'j'=>0, 'id'=>$model->n_gejala, 'p'=>$model->id_pengetahuan)
			));
		}elseif($model->y_diagnosa && $model->n_diagnosa){
			echo "<br>";
			$this->widget('bootstrap.widgets.TbButton', array(
				'type'=>'primary',
				'icon'=>'icon-ok icon-white',
				'label'=>'YA',
				'url'=>array('konsultasidetailatin/end', 'j'=>1, 'id'=>$model->y_diagnosa, 'p'=>$model->id_pengetahuan)
			));echo "&nbsp";
			$this->widget('bootstrap.widgets.TbButton', array(
				'type'=>'warning',
				'icon'=>'icon-remove icon-white',
				'label'=>'TIDAK',
				'url'=>array('konsultasidetailatin/end', 'j'=>0, 'id'=>$model->n_diagnosa, 'p'=>$model->id_pengetahuan)
			));
		}
	}
?>
</center></h3>