<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Angkatan $model */

$this->title = 'Create Angkatan';
$this->params['breadcrumbs'][] = ['label' => 'Angkatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="angkatan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
