<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use app\models\EntryForm;

class SiteController extends Controller
{
    public function actions()
    {
        return [
            'pages' => [
                'class' => 'yii\web\ViewAction'
            ]
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        return $this->render('login');
    }


    public function actionEntry()
    {
        $model = new EntryForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            return $this->render('register-confirm', ['model' => $model]);
        } else {
            return $this->render('register', ['model' => $model]);
        }
        
    }
}