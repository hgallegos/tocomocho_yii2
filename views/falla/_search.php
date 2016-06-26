<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\FallaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="falla-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idFalla') ?>

    <?= $form->field($model, 'categoria') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'costoReparacion') ?>

    <?= $form->field($model, 'idComentario') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
