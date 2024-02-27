<?php

use app\models\Pasien;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\PasienSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Transaksi Pasien';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pasien-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Pendaftaran', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php
    if (!Yii::$app->user->isGuest) {
        echo GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
    
                'id_pasien',
                'nama',
                'nik',
                'id_tindakan',
                'id_obat',
                [
                    'class' => ActionColumn::className(),
                    'urlCreator' => function ($action, Pasien $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'id_pasien' => $model->id_pasien]);
                     }
                ],
            ],
        ]);
    }else{
        echo GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
    
                'id_pasien',
                'nama',
                'nik',
                'id_tindakan',
                'id_obat',
                [
                    'class' => ActionColumn::className(),
                    'visibleButtons' => [
                        'update' => false, 
                        'delete' => false, 
                    ],
                    'urlCreator' => function ($action, Pasien $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'id_pasien' => $model->id_pasien]);
                     }
                ],
            ],
        ]);
    }
    ?>


</div>
