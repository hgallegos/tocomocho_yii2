<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Falla */

$this->title = 'Update Falla: ' . $model->idFalla;
$this->params['breadcrumbs'][] = ['label' => 'Fallas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idFalla, 'url' => ['view', 'id' => $model->idFalla]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="falla-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
