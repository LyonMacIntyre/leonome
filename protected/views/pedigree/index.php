<?php

$this->breadcrumbs = array(
	Pedigree::label(2),
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' ' . Pedigree::label(), 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . Pedigree::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(Pedigree::label(2)); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 