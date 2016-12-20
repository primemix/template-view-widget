<?php
use frontend\components\FirstWidget;

$this->registerCssFile('@web/css/main.css');

?>

<h1>main/index</h1>
<p>
    <?= FirstWidget::widget() ?>
    <?= $hello ?>
</p>