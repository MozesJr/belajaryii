<?php

use app\models\Angkatan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\AngkatanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Angkatans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="angkatan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Angkatan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_angkatan',
            'angkatan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Angkatan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_angkatan' => $model->id_angkatan]);
                 }
            ],
        ],
    ]); ?>


</div>
