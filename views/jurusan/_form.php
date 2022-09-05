<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Jurusan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="jurusan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'jurusan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success mt-5']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>