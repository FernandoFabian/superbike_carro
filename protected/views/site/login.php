<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>Iniciar sesion</h1>

<p>Por favor ingresa tus datos</p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Los campos <span class="required">*</span> son requeridos.</p>

	<div class="row">
		<?php echo $form->labelEx($model,'Usuario'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Contraseña'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
		<!--p class="hint">
			Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>.
		</p-->
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'Recordarme'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>
	<a href="index.php?r=turista/create">Aún no estás registrado, Registrate aquí! </a>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Ingresar'); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
