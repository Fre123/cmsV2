<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;
use backend\models\Departamento;
$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                
                <?= $form->field($model, 'cedula') ?>
                <?= $form->field($model, 'id_dp')->dropDownList(

                    ArrayHelper::map(Departamento::find()->all(),'ID_DEPARTAMENTO', 'NOMBRE'),
                    ['prompt'=>'Seleccione el departamento..']
                ) ?>
                <?= $form->field($model, 'first_name') ?>
                 <?= $form->field($model, 'last_name') ?>
                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>
                
                <?php  $authItems = ArrayHelper::map($authItems,'name', 'name');  ?>
                <?= $form->field($model, 'permissons')->checkboxList($authItems);?>

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
