<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'PedigreeId'); ?>
		<?php echo $form->textField($model, 'PedigreeId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Name'); ?>
		<?php echo $form->textField($model, 'Name', array('maxlength' => 64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'SireId'); ?>
		<?php echo $form->textField($model, 'SireId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'DamId'); ?>
		<?php echo $form->textField($model, 'DamId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Sex'); ?>
		<?php echo $form->textField($model, 'Sex', array('maxlength' => 10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'DOB'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'DOB',
			'value' => $model->DOB,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Coiall'); ?>
		<?php echo $form->textField($model, 'Coiall', array('maxlength' => 32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Hd'); ?>
		<?php echo $form->textField($model, 'Hd', array('maxlength' => 32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'RegNo'); ?>
		<?php echo $form->textField($model, 'RegNo', array('maxlength' => 64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Coi10gen'); ?>
		<?php echo $form->textField($model, 'Coi10gen', array('maxlength' => 64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Hyperlink'); ?>
		<?php echo $form->textField($model, 'Hyperlink', array('maxlength' => 256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Photo'); ?>
		<?php echo $form->textField($model, 'Photo', array('maxlength' => 128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'AdRegNo'); ?>
		<?php echo $form->textField($model, 'AdRegNo', array('maxlength' => 64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Ed'); ?>
		<?php echo $form->textField($model, 'Ed', array('maxlength' => 32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Eye'); ?>
		<?php echo $form->textField($model, 'Eye', array('maxlength' => 128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Lpn1'); ?>
		<?php echo $form->textField($model, 'Lpn1', array('maxlength' => 64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'DET'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'DET',
			'value' => $model->DET,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Lpn1ID'); ?>
		<?php echo $form->textField($model, 'Lpn1ID', array('maxlength' => 32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Lpnnw'); ?>
		<?php echo $form->textField($model, 'Lpnnw', array('maxlength' => 32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Lpn2'); ?>
		<?php echo $form->textField($model, 'Lpn2', array('maxlength' => 32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Lpn2ID'); ?>
		<?php echo $form->textField($model, 'Lpn2ID', array('maxlength' => 32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Dna'); ?>
		<?php echo $form->textField($model, 'Dna', array('maxlength' => 32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'CountryBorn'); ?>
		<?php echo $form->textField($model, 'CountryBorn', array('maxlength' => 64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'CountryStay'); ?>
		<?php echo $form->textField($model, 'CountryStay', array('maxlength' => 64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'TatooMicro'); ?>
		<?php echo $form->textField($model, 'TatooMicro', array('maxlength' => 32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'KennelName'); ?>
		<?php echo $form->textField($model, 'KennelName', array('maxlength' => 64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Thyroid'); ?>
		<?php echo $form->textField($model, 'Thyroid', array('maxlength' => 64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'DThyroid'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'DThyroid',
			'value' => $model->DThyroid,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'WebOwner'); ?>
		<?php echo $form->textField($model, 'WebOwner', array('maxlength' => 256)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
