<?php /* @var $this Controller */ ?>
<?php
    Yii::app()->clientScript->registerScript(
       'myHideEffect',
       '$(".alert-success").animate({opacity: 1.0}, 3000).fadeOut("slow");',
       CClientScript::POS_READY
    );
?>
<?php $this->beginContent('//layouts/main'); ?>
<div id="content">
	<div class="row-fluid">
	<div class="span12">
	  <div class="widget">
			<div class="widget-title">
			   <h4><i class="icon-folder-open"></i><?= $this->judul; ?></h4>
			</div>
			<div class="widget-body">
				<?php foreach(Yii::app()->user->getFlashes() as $key => $message) {
					if ($key=='counters') {continue;}
					echo "<div class='alert alert-{$key}'>{$message}</div>";
				} ?>
				<?php echo $content; ?>
			</div>
	  </div>
	</div>
	</div>
</div>
<?php $this->endContent(); ?>