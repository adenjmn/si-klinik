<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PasienSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pasien-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_pasien') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'nik') ?>

    <?= $form->field($model, 'id_tindakan') ?>

    <?= $form->field($model, 'id_obat') ?>

    <?php // echo $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'id_wilayah') ?>

    <?php // echo $form->field($model, 'jenis_kelamin') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
