<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $model frontend\models\Department */
$this->title = 'Create Department';
$this->params['breadcrumbs'][] = ['label' => 'Department', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>