<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Country;
use yii\web\HttpException;

class CountryController extends Controller
{
    public function actionIndex()
    {
        $query = Country::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $countries = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'countries' => $countries,
            'pagination' => $pagination
        ]);
    }

    public function actionForward()
    {
        return $this->redirect("http://a963.com");
    }

    public function actionView($id)
    {
        // print_r(Yii::$app->request->get());
        if (empty($id)) {
            throw new HttpException(402, '参数不对');
        }
        $model = Country::findOne(['code' =>'US']);
        $country = $model->toArray([], ['ps', 'os']);
        var_dump($country);
    }

}