<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Jurusan $model */

$this->title = 'Update Jurusan: ' . $model->jurusan;
$this->params['breadcrumbs'][] = ['label' => 'Data Jurusan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->jurusan;
?>
<div class="jurusan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>