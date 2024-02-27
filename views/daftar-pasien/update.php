<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Pasien $model */

$this->title = 'Update Pasien: ' . $model->id_pasien;
$this->params['breadcrumbs'][] = ['label' => 'Transaksi Pasien', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pasien, 'url' => ['view', 'id_pasien' => $model->id_pasien]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pasien-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form_update', [
        'model' => $model,
    ]) ?>

</div>
