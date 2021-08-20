<?php

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    /*
     如何解决中文和英文转换的问题？？ 
     使用 Label??
     */

    public function attributeLabels()
    {
        return [
            'name' => Yii::t('app', 'Your name'),
            'email' => Yii::t('app', 'You email')
        ];
    }
    // 字段返回定义
    public function fields()
    {

    }
    public function rules()
    {
        // , 'message' => Yii::t('@yii/messages', 'required', 'message')
        return [
            [['name', 'email'], 'required'],
            ['email', 'email']
        ];
    }

}