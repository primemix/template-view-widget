<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\Teacher;
use frontend\models\Student;
/* @var $this yii\web\View */
/* @var $model frontend\models\Teacher */
/* @var $model frontend\models\Student */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'id')->dropDownList(Teacher::find()->select(['name', 'id'])->indexBy('id')->column())->label('Select Teacher name'); ?>

    <div class="form-group">
        <?= Html::submitButton(
            $model->isNewRecord ? 'Create' : 'Update', [
            'class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>