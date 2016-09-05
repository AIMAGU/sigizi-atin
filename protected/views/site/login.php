<!-- BEGIN LOGIN FORM -->
<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'login-form',
	'focus'=>array($model,'username'),
)); ?>
  <div class="lock">
	  <i class="icon-lock"></i>
  </div>
  <div class="control-wrap">
	<h4>User Login</h4>       
	<?php echo $form->textFieldRow($model, 'username', array('label'=>false, 'placeholder'=>'Username', 'class'=>'span3', 'prepend'=>'<i class="icon-user"></i>', 'rel'=>'tooltip', 'title'=>'Masukkan Username')); ?>
	<?php echo $form->passwordFieldRow($model, 'password', array('label'=>false, 'placeholder'=>'Password', 'class'=>'span3', 'prepend'=>'<i class="icon-barcode"></i>', 'rel'=>'tooltip', 'title'=>'Masukkan Password')); ?>
	<div class="mtop10">
		<div class="block-hint pull-left small">
			<?php echo $form->checkbox($model, 'rememberMe'); ?> Remember me next time
		</div>
	</div>

	<div class="clearfix space5"></div>
  </div>
	<?php $this->widget('bootstrap.widgets.TbButton', array('type'=>'primary', 'buttonType'=>'submit', 'label'=>'Login', 'htmlOptions'=>array('class'=>'btn btn-block login-btn',))); ?>
	<?php $this->widget('bootstrap.widgets.TbButton', array(
		'label'=>'Belum Punya Akun? Daftar',
		'url'=>array('user/daftar'),
		'htmlOptions'=>array('class'=>'btn btn-block btn-warning',)
	)); ?>
<?php $this->endWidget(); ?>
<!-- END LOGIN FORM -->