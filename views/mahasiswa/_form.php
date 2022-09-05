<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Jk;
use app\models\Angkatan;
use app\models\Jurusan;

/** @var yii\web\View $this */
/** @var app\models\Mahasiswa $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="mahasiswa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?php
    $dataList = ArrayHelper::map(Jk::find()->asArray()->all(), 'id_jk', 'jenisKelamin');
    echo $form->field($model, 'id_jk')->dropDownList(
        $dataList,
        ['jenisKelamin' => '-Pilih Jenis Kelamin-']
    )
    ?>

    <?php
    $dataList = ArrayHelper::map(Jurusan::find()->asArray()->all(), 'id_jurusan', 'jurusan');
    echo $form->field($model, 'id_jurusan')->dropDownList(
        $dataList,
        ['jurusan' => '-Pilih Jenis Kelamin-']
    )
    ?>
    <?php
    $dataList = ArrayHelper::map(Angkatan::find()->asArray()->all(), 'id_angkatan', 'angkatan');
    echo $form->field($model, 'id_angkatan')->dropDownList(
        $dataList,
        ['angkatan' => '-Pilih Jenis Kelamin-']
    )
    ?>

    <div class="form-group">
        <?= Html::a('Kembali', ['index'], ['class' => 'btn btn-primary mt-3']) ?>
        <?= Html::submitButton('Save', ['class' => 'btn btn-success mt-3']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>