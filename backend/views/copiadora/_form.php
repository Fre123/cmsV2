<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Departamento;

/* @var $this yii\web\View */
/* @var $model backend\models\Copiadora */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="copiadora-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_COPIADORA')->textInput() ?>


         <!--?= $form->field($model, 'ID_DEPARTAMENTO')->dropDownList(

    ArrayHelper::map(Departamento::find()->all(),'ID_DEPARTAMENTO', 'NOMBRE'),
    ['prompt'=>'Seleccione el departamento..']

     )
     ?>-->  
     <!--Consulta a la base de datos-->
    <?php $rows = (new \yii\db\Query())->select('NOMBRE')->from('departamento')->where(['=','NOMBRE', 'sistemas'])->limit(10)->all();
    $list = ArrayHelper::map($rows, 'ID_DEPARTAMENTO', 'NOMBRE');
    ?>


            <?= $form->field($model, 'ID_DEPARTAMENTO')->dropDownList($list,
            ['prompt'=>'Seleccione el departamento..']
            )
            ?>

 

    <?= $form->field($model, 'DESCRIPCION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FECHA')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
