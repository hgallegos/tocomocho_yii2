<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Resenia */

$this->title = 'Update Resenia: ' . $model->idComentario;
$this->params['breadcrumbs'][] = ['label' => 'Resenias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idComentario, 'url' => ['view', 'id' => $model->idComentario]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="resenia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
