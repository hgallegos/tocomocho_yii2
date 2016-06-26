<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Vehiculo */

$this->title = $model->idVehiculo;
$this->params['breadcrumbs'][] = ['label' => 'Vehiculos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vehiculo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idVehiculo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idVehiculo], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idVehiculo',
            'idMarca',
            'anio',
            'tipo',
            'marca',
            'modelo',
            'nPuertas',
            'cilindrada',
            'tipoCombustible',
            'transmision',
            'traccion',
            'tasacionFiscal',
            'rendimientoTeorico',
            'valorPermiso',
            'precioVentaP',
            'cSeguridad',
            'alzavidrios',
            'cierreCentralizado',
            'airbag',
            'frenosABS',
            'aireAcondicionado',
            'nomImagen',
        ],
    ]) ?>

</div>
