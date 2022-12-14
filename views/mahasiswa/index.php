<?php

use app\models\Mahasiswa;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\MahasiswaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Data Mahasiswa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Data Mahasiswa', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_mahasiswa',
            'nim',
            'nama',
            'jk.jenisKelamin',
            'jurusan.jurusan',
            'angkatan.angkatan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Mahasiswa $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_mahasiswa' => $model->id_mahasiswa]);
                }
            ],
        ],
    ]); ?>


</div>