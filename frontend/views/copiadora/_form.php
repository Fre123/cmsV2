<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Copiadora */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="copiadora-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_COPIADORA')->textInput() ?>

    <?= $form->field($model, 'ID_DEPARTAMENTO')->textInput() ?>

    <?= $form->field($model, 'DESCRIPCION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FECHA')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
