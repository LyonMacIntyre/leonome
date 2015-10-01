<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'pedigree-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'Name'); ?>
		<?php echo $form->textField($model, 'Name', array('maxlength' => 64)); ?>
		<?php echo $form->error($model,'Name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'SireId'); ?>
		<?php echo $form->textField($model, 'SireId'); ?>
		<?php echo $form->error($model,'SireId'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'DamId'); ?>
		<?php echo $form->textField($model, 'DamId'); ?>
		<?php echo $form->error($model,'DamId'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'Sex'); ?>
		<?php echo $form->textField($model, 'Sex', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'Sex'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'DOB'); ?>
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
		<?php echo $form->error($model,'DOB'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'Coiall'); ?>
		<?php echo $form->textField($model, 'Coiall', array('maxlength' => 32)); ?>
		<?php echo $form->error($model,'Coiall'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'Hd'); ?>
		<?php echo $form->textField($model, 'Hd', array('maxlength' => 32)); ?>
		<?php echo $form->error($model,'Hd'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'RegNo'); ?>
		<?php echo $form->textField($model, 'RegNo', array('maxlength' => 64)); ?>
		<?php echo $form->error($model,'RegNo'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'Coi10gen'); ?>
		<?php echo $form->textField($model, 'Coi10gen', array('maxlength' => 64)); ?>
		<?php echo $form->error($model,'Coi10gen'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'Hyperlink'); ?>
		<?php echo $form->textField($model, 'Hyperlink', array('maxlength' => 256)); ?>
		<?php echo $form->error($model,'Hyperlink'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'Photo'); ?>
		<?php echo $form->textField($model, 'Photo', array('maxlength' => 128)); ?>
		<?php echo $form->error($model,'Photo'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'AdRegNo'); ?>
		<?php echo $form->textField($model, 'AdRegNo', array('maxlength' => 64)); ?>
		<?php echo $form->error($model,'AdRegNo'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'Ed'); ?>
		<?php echo $form->textField($model, 'Ed', array('maxlength' => 32)); ?>
		<?php echo $form->error($model,'Ed'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'Eye'); ?>
		<?php echo $form->textField($model, 'Eye', array('maxlength' => 128)); ?>
		<?php echo $form->error($model,'Eye'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'Lpn1'); ?>
		<?php echo $form->textField($model, 'Lpn1', array('maxlength' => 64)); ?>
		<?php echo $form->error($model,'Lpn1'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'DET'); ?>
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
		<?php echo $form->error($model,'DET'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'Lpn1ID'); ?>
		<?php echo $form->textField($model, 'Lpn1ID', array('maxlength' => 32)); ?>
		<?php echo $form->error($model,'Lpn1ID'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'Lpnnw'); ?>
		<?php echo $form->textField($model, 'Lpnnw', array('maxlength' => 32)); ?>
		<?php echo $form->error($model,'Lpnnw'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'Lpn2'); ?>
		<?php echo $form->textField($model, 'Lpn2', array('maxlength' => 32)); ?>
		<?php echo $form->error($model,'Lpn2'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'Lpn2ID'); ?>
		<?php echo $form->textField($model, 'Lpn2ID', array('maxlength' => 32)); ?>
		<?php echo $form->error($model,'Lpn2ID'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'Dna'); ?>
		<?php echo $form->textField($model, 'Dna', array('maxlength' => 32)); ?>
		<?php echo $form->error($model,'Dna'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'CountryBorn'); ?>
		<?php echo $form->textField($model, 'CountryBorn', array('maxlength' => 64)); ?>
		<?php echo $form->error($model,'CountryBorn'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'CountryStay'); ?>
		<?php echo $form->textField($model, 'CountryStay', array('maxlength' => 64)); ?>
		<?php echo $form->error($model,'CountryStay'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'TatooMicro'); ?>
		<?php echo $form->textField($model, 'TatooMicro', array('maxlength' => 32)); ?>
		<?php echo $form->error($model,'TatooMicro'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'KennelName'); ?>
		<?php echo $form->textField($model, 'KennelName', array('maxlength' => 64)); ?>
		<?php echo $form->error($model,'KennelName'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'Thyroid'); ?>
		<?php echo $form->textField($model, 'Thyroid', array('maxlength' => 64)); ?>
		<?php echo $form->error($model,'Thyroid'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'DThyroid'); ?>
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
		<?php echo $form->error($model,'DThyroid'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'WebOwner'); ?>
		<?php echo $form->textField($model, 'WebOwner', array('maxlength' => 256)); ?>
		<?php echo $form->error($model,'WebOwner'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->