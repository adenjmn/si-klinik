<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Tagihan $model */

$this->title = $model->id_tagihan;
$this->params['breadcrumbs'][] = ['label' => 'Pembayaran', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tagihan-view">

    <?= DetailView::widget([
        'model' => $pasien,
        'attributes' => [
            'id_pasien',
            'nama',
            'nik',
        ],
    ]) ?>
   
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_tagihan',
            'id_pasien',
            'id_obat',
            'id_tindakan',
            'total_bayar',
            'status_pembayaran',
        ],
    ]) ?>    

</div>
