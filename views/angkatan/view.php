<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Angkatan $model */

$this->title = $model->id_angkatan;
$this->params['breadcrumbs'][] = ['label' => 'Angkatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="angkatan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_angkatan' => $model->id_angkatan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_angkatan' => $model->id_angkatan], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_angkatan',
            'angkatan',
        ],
    ]) ?>

</div>
