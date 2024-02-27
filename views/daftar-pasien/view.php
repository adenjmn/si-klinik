<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Pasien $model */

$this->title = $pasien->id_pasien;
$this->params['breadcrumbs'][] = ['label' => 'Transaksi Pasien', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pasien-view">
    <?php
    if (!Yii::$app->user->isGuest) {
        echo Html::a('Update', ['update', 'id_pasien' => $pasien->id_pasien], ['class' => 'btn btn-primary']);
        echo Html::a('Delete', ['delete', 'id_pasien' => $pasien->id_pasien], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]);
    }
    ?>
    <h3>Data Pasien</h3>
    <?= DetailView::widget([
        'model' => $pasien,
        'attributes' => [
            'id_pasien',
            'nama',
            'nik',
            'id_tindakan',
            'id_obat',
            'alamat:ntext',
            'id_wilayah',
            'jenis_kelamin',
        ],
    ]) ?>
    <!-- <hr> -->
    <?php 
    if ($obat) {
        echo '<h3>Data Obat ' . $pasien->nama . '</h3>';
        echo DetailView::widget([
            'model' => $obat,
            'attributes' => [
                'id_obat',
                'nama_obat',
                'dosis',
                'harga',
            ],
        ]);
    } else {
        echo '<h3>Data sedang diproses</h3>';
    }

    if ($tindakan) {
        echo '<h3>Data Tindakan ' . $pasien->nama . '</h3>';
        echo DetailView::widget([
            'model' => $tindakan,
            'attributes' => [
                'id_tindakan',
                'deskripsi',
                'harga',
            ],
        ]);
    } else {
        echo '<h3>Data sedang diproses</h3>';
    }
    ?>

</div>
