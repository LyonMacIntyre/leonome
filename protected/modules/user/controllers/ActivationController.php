<?php

class ActivationController extends Controller
{
    public $defaultAction = 'activation';


    /**
    * Activation user account
    */
    public function actionActivation () {
        $email = $_GET['email'];
        $activkey = $_GET['activkey'];
        if ($email&&$activkey) {
            $find = User::model()->notsafe()->findByAttributes(array('email'=>$email));
            if (isset($find)&&$find->status) {
                $this->render('/user/message',array('title'=>UserModule::t("User activation"),'content'=>UserModule::t("Your account is active.")));
            } elseif(isset($find->activkey) && ($find->activkey==$activkey)) {
                $find->activkey = UserModule::encrypting(microtime());
                $find->status = 1;
                $find->save();
                //assign role
                $authorizer = Yii::app()->getModule("rights")->getAuthorizer();
                $authorizer->authManager->assign('clients', $model->id);
                $this->render('/user/message',array('title'=>UserModule::t("User activation"),'content'=>UserModule::t("Your account has been activated.")));
            } else {
                $this->render('/user/message',array('title'=>UserModule::t("User activation"),'content'=>UserModule::t("Incorrect activation URL.")));
            }
        } else {
            $this->render('/user/message',array('title'=>UserModule::t("User activation"),'content'=>UserModule::t("Incorrect activation URL.")));
        }
    }

}