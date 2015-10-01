<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->PedigreeId)),
	array('label'=>Yii::t('app', 'Delete') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->PedigreeId), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'PedigreeId',
'Name',
'SireId',
'DamId',
'Sex',
'DOB',
'Coiall',
'Hd',
'RegNo',
'Coi10gen',
'Hyperlink',
'Photo',
'AdRegNo',
'Ed',
'Eye',
'Lpn1',
'DET',
'Lpn1ID',
'Lpnnw',
'Lpn2',
'Lpn2ID',
'Dna',
'CountryBorn',
'CountryStay',
'TatooMicro',
'KennelName',
'Thyroid',
'DThyroid',
'WebOwner',
	),
)); ?>

