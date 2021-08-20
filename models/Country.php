<?php
namespace app\models;

use yii\db\ActiveRecord;

class Country extends ActiveRecord
{
    public function extraFields() {

        return [
            'ps' => function () {
                return 'jaemsx';
            }
        ];
    }
}