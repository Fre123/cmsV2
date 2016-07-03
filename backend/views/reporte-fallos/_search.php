<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ReporteFallosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reporte-fallos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_USER') ?>

    <?= $form->field($model, 'CEDULA_USER') ?>

    <?= $form->field($model, 'ESTADO') ?>

    <?= $form->field($model, 'ID_REPORTE') ?>

    <?= $form->field($model, 'ID_COPIADORA') ?>

    <?php // echo $form->field($model, 'NOVEDADES') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
