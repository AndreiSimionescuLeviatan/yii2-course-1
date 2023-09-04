<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\rest\ActiveController;

class Customer extends ActiveRecord
{
    public function rules()
    {
        return [
          [['username','email','status'],'required']
        ];
    }
}