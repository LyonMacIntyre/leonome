<?php

Yii::import('application.models._base.BasePedigree');

class Pedigree extends BasePedigree
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}