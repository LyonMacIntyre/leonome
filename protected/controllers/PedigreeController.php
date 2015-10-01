<?php

class PedigreeController extends GxController {

    public function filters()
    {
        return array(
            'rights', // perform access control for CRUD operations

        );
    }

    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id, 'Pedigree'),
        ));
    }

    public function actionCreate() {
        $model = new Pedigree;


        if (isset($_POST['Pedigree'])) {
            $model->setAttributes($_POST['Pedigree']);

            if ($model->save()) {
                if (Yii::app()->getRequest()->getIsAjaxRequest())
                    Yii::app()->end();
                else
                    $this->redirect(array('view', 'id' => $model->PedigreeId));
            }
        }

        $this->render('create', array( 'model' => $model));
    }

    public function actionUpdate($id) {
        $model = $this->loadModel($id, 'Pedigree');


        if (isset($_POST['Pedigree'])) {
            $model->setAttributes($_POST['Pedigree']);

            if ($model->save()) {
                $this->redirect(array('view', 'id' => $model->PedigreeId));
            }
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    public function actionDelete($id) {
        if (Yii::app()->getRequest()->getIsPostRequest()) {
            $this->loadModel($id, 'Pedigree')->delete();

            if (!Yii::app()->getRequest()->getIsAjaxRequest())
                $this->redirect(array('admin'));
        } else
            throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
    }

    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Pedigree');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    public function actionAdmin() {
        $model = new Pedigree('search');
        $model->unsetAttributes();

        if (isset($_GET['Pedigree']))
            $model->setAttributes($_GET['Pedigree']);

        $this->render('admin', array(
            'model' => $model,
        ));
    }

}