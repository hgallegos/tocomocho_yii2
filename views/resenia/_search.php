<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\ReseniaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resenia-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idComentario') ?>

    <?= $form->field($model, 'contenido') ?>

    <?= $form->field($model, 'fecha') ?>

    <?= $form->field($model, 'emailUsuario') ?>

    <?= $form->field($model, 'idVehiculo') ?>

    <?php // echo $form->field($model, 'nCalidad') ?>

    <?php // echo $form->field($model, 'nEconomia') ?>

    <?php // echo $form->field($model, 'valoracion') ?>

    <?php // echo $form->field($model, 'rendimientoR') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
