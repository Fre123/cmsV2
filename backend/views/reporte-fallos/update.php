<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ReporteFallos */

$this->title = 'Update Reporte Fallos: ' . $model->ID_REPORTE;
$this->params['breadcrumbs'][] = ['label' => 'Reporte Fallos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_REPORTE, 'url' => ['view', 'id' => $model->ID_REPORTE]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="reporte-fallos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
