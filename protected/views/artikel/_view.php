<div class="row-fluid blog">
	<div class="span4">
		<img src="foto/<?= $data->foto;?>" alt="Foto">
	</div>
	<div class="span8">
		<div class="date">
			<p class="day"><?= Yii::app()->dateFormatter->format("dd",strtotime($data->created)); ?></p>
			<p class="month"><?= Yii::app()->dateFormatter->format("MMM",strtotime($data->created)); ?></p>
		</div>
		<h2>
			<?php echo CHtml::link($data->judul,array('view','id'=>$data->id_artikel)); ?>
		</h2>
		<p>
			Penulis <a href="#"><?= $data->idUser->nama_lengkap;?></a>
		</p>
		<p>
			<?= $data->isi; ?>
		</p>
		<ul>
			<li><a href="javascript:;"><i class="icon-comments-alt"></i> 55 Comments</a></li>
			<li><a href="javascript:;"><i class="icon-heart"></i> 342 Likes</a></li>
			<li><a href="javascript:;"><i class="icon-share"></i> 34 Shares</a></li>
		</ul>
		<?php echo CHtml::link('Continue Reading',array('view','id'=>$data->id_artikel),array('class'=>"btn btn-info")); ?>
	</div>
</div>