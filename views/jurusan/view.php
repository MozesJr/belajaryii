<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Jurusan $model */

$this->title = $model->jurusan;
$this->params['breadcrumbs'][] = ['label' => 'Data Jurusan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="jurusan-view">

    <h1><?= Html::encode($this->title) ?></h1>



    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id_jurusan',
            'jurusan',
        ],
    ]) ?>

    <p>
        <?= Html::a('Update', ['update', 'id_jurusan' => $model->id_jurusan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_jurusan' => $model->id_jurusan], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

</div>