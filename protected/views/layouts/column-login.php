<?php /* @var $this Controller */ ?>
<?php
    Yii::app()->clientScript->registerScript(
       'myHideEffect',
       '$(".alert-success").animate({opacity: 1.0}, 3000).fadeOut("slow");',
       CClientScript::POS_READY
    );
?>
<?php $this->beginContent('//layouts/login'); ?>
<!-- BEGIN LOGIN -->
<div id="login">
	<?php foreach(Yii::app()->user->getFlashes() as $key => $message) {
		if ($key=='counters') {continue;}
		echo "<div class='alert alert-{$key}'>{$message}</div>";
	} ?>
	<?php echo $content; ?>
</div>
<!-- END LOGIN -->
<?php $this->endContent(); ?>