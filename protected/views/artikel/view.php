<?php
$this->breadcrumbs=array(
	'Artikels'=>array('index'),
	$model->id_artikel,
);

$this->menu=array(
	array('label'=>'List Artikel','url'=>array('index')),
	array('label'=>'Create Artikel','url'=>array('create')),
	array('label'=>'Update Artikel','url'=>array('update','id'=>$model->id_artikel)),
	array('label'=>'Delete Artikel','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_artikel),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Artikel','url'=>array('admin')),
);
$this->judul=" Detail Artikel";
?>

<div class="row-fluid blog">
	<div class="span12">
		<h2>
			<?= $model->judul; ?>
		</h2>
		<p>
			Penulis <a href="javascript:;"><?= $model->idUser->nama_lengkap; ?></a>
		</p>
		<img src="foto/<?= $model->foto; ?>" alt="Foto">
		<div class="row-fluid">
			<div class="span6">
				<ul>
					<li><?= $model->created; ?></li>
				</ul>

			</div>
			<div class="span6 ">
				<ul class="show-right">
					<li><a href="javascript:;"><i class="icon-comments-alt"></i> 55 Comments</a></li>
					<li><a href="javascript:;"><i class="icon-heart"></i> 342 Likes</a></li>
					<li><a href="javascript:;"><i class="icon-share"></i> 34 Shares</a></li>
				</ul>
			</div>
		</div>
		<div>
			<p>
				<?= $model->isi; ?>
			</p>
		</div>
	</div>
</div>