<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Copiadora */

$this->title = 'Create Copiadora';
$this->params['breadcrumbs'][] = ['label' => 'Copiadoras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="copiadora-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
