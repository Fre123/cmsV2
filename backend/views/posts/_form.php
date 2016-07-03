<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Posts */
/* @var $form yii\widgets\ActiveForm */

use dosamigos\ckeditor\CKEditor;

?>

<div class="posts-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--?= $form->field($model, 'post_id')->textInput() ?-->

    <?= $form->field($model, 'post_title')->textarea(['rows' => 6]) ?>

    <!--?= $form->field($model, 'post_author')->textInput(['maxlength' => true]) ?-->

    <!--?= $form->field($model, 'post_time')->textInput() ?-->

    <!--?= $form->field($model, 'post_content')->textarea(['rows' => 6]) ?-->

    <?= $form->field($model, 'post_content')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'basic'
    ]) ?>

    <?= $form->field($model, 'post_tags')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'post_status')->dropDownList(['0'=> 'Inactivo', '1' => 'Activo']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
