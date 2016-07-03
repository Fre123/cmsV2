<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Copiadora */

$this->title = 'Update Copiadora: ' . $model->ID_COPIADORA;
$this->params['breadcrumbs'][] = ['label' => 'Copiadoras', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_COPIADORA, 'url' => ['view', 'id' => $model->ID_COPIADORA]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="copiadora-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
