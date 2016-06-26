<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\VehiculoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vehiculo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idVehiculo') ?>

    <?= $form->field($model, 'idMarca') ?>

    <?= $form->field($model, 'anio') ?>

    <?= $form->field($model, 'tipo') ?>

    <?= $form->field($model, 'marca') ?>

    <?php // echo $form->field($model, 'modelo') ?>

    <?php // echo $form->field($model, 'nPuertas') ?>

    <?php // echo $form->field($model, 'cilindrada') ?>

    <?php // echo $form->field($model, 'tipoCombustible') ?>

    <?php // echo $form->field($model, 'transmision') ?>

    <?php // echo $form->field($model, 'traccion') ?>

    <?php // echo $form->field($model, 'tasacionFiscal') ?>

    <?php // echo $form->field($model, 'rendimientoTeorico') ?>

    <?php // echo $form->field($model, 'valorPermiso') ?>

    <?php // echo $form->field($model, 'precioVentaP') ?>

    <?php // echo $form->field($model, 'cSeguridad') ?>

    <?php // echo $form->field($model, 'alzavidrios') ?>

    <?php // echo $form->field($model, 'cierreCentralizado') ?>

    <?php // echo $form->field($model, 'airbag') ?>

    <?php // echo $form->field($model, 'frenosABS') ?>

    <?php // echo $form->field($model, 'aireAcondicionado') ?>

    <?php // echo $form->field($model, 'nomImagen') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
