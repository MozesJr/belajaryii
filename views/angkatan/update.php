<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Angkatan $model */

$this->title = 'Update Angkatan: ' . $model->id_angkatan;
$this->params['breadcrumbs'][] = ['label' => 'Angkatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_angkatan, 'url' => ['view', 'id_angkatan' => $model->id_angkatan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="angkatan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
