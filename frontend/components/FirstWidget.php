<?php

namespace frontend\components;

use yii\base\Widget;

class FirstWidget extends Widget
{
    public function init()
    {
        parent::init();
    }

    /**
     * @return string
     */
    public function run()
    {
        return $this->render('first');
    }
}