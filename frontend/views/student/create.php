<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $model frontend\models\Student */
$this->title = 'Create Student';
$this->params['breadcrumbs'][] = ['label' => 'Student', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>