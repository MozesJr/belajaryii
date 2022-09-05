<?php

use app\models\Jurusan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\JurusanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Data Jurusan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jurusan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Data Jurusan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_jurusan',
            'jurusan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Jurusan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_jurusan' => $model->id_jurusan]);
                }
            ],
        ],
    ]); ?>


</div>