<?php

namespace app\components;

use yii\base\Component;

class TestComponent extends Component
{
    public $var1=10;
    public function __construct($config = [])
    {
        echo '<prev>';
        var_dump("1111");
        echo '</prev>';
        parent::__construct($config);
    }

    public function hello()
    {
        echo '<prev>';
        var_dump("Hello from test");
        echo '</prev>';
    }
}