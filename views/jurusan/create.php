<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Jurusan $model */

$this->title = 'Tambah Data Jurusan';
$this->params['breadcrumbs'][] = ['label' => 'Data Jurusan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jurusan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>