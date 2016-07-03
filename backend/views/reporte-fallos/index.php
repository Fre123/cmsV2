<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ReporteFallosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reporte Fallos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reporte-fallos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Reporte Fallos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_USER',
            'CEDULA_USER',
            'ESTADO',
            'ID_REPORTE',
            'ID_COPIADORA',
            // 'NOVEDADES',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
