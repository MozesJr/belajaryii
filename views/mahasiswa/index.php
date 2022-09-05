<?php

use app\models\Mahasiswa;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\MahasiswaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Daftar Data Mahasiswa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Mahasiswa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_mahasiswa',
            'nim',
            'nama',
            'jk',
            'jurusan',
            //'angkatan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Mahasiswa $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_mahasiswa' => $model->id_mahasiswa]);
                }
            ],
        ],
    ]); ?>


</div>