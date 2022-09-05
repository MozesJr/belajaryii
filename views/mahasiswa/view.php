<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Mahasiswa $model */

$this->title = $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Data Mahasiswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="mahasiswa-view">

    <h1><?= Html::encode($this->title) ?></h1>



    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id_mahasiswa',
            'nim',
            'nama',
            'jk.jenisKelamin',
            'jurusan.jurusan',
            'angkatan.angkatan',
        ],
    ]) ?>

    <p>
        <?= Html::a('Kembali', ['index'], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Update', ['update', 'id_mahasiswa' => $model->id_mahasiswa], ['class' => 'btn btn-warning']) ?>
        <?= Html::a('Delete', ['delete', 'id_mahasiswa' => $model->id_mahasiswa], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

</div>