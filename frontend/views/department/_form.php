<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\University;
use frontend\models\Department;
/* @var $this yii\web\View */
/* @var $model frontend\models\Department */
/* @var $model frontend\models\University */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'university_id')->dropDownList(University::find()->select(['name', 'id'])->indexBy('id')->column())->label('Select Univer name'); ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>