<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Copiadora;


/* @var $this yii\web\View */
/* @var $model backend\models\ReporteFallos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reporte-fallos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_REPORTE')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'ID_USER')->textInput(['disabled'=>true]) ?>

    

    <?= $form->field($model, 'CEDULA_USER')->textInput(['maxlength' => true,'disabled'=>true]) ?>

    <?= $form->field($model, 'ESTADO')->dropDownList([ 1 => 'Activa', 0 => 'Inactiva', ], ['prompt' => 'Estado...'])?>

    

    <?= $form->field($model, 'ID_COPIADORA')->dropDownList(
    ArrayHelper::map(Copiadora::find()->all(), 'ID_COPIADORA', 'DESCRIPCION'),
    ['prompt'=>'Seleccione la computadora...']

    ) ?>

    <?= $form->field($model, 'NOVEDADES')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
