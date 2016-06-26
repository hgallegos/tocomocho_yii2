<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\VehiculoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vehiculos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vehiculo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Vehiculo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idVehiculo',
            'idMarca',
            'anio',
            'tipo',
            'marca',
            // 'modelo',
            // 'nPuertas',
            // 'cilindrada',
            // 'tipoCombustible',
            // 'transmision',
            // 'traccion',
            // 'tasacionFiscal',
            // 'rendimientoTeorico',
            // 'valorPermiso',
            // 'precioVentaP',
            // 'cSeguridad',
            // 'alzavidrios',
            // 'cierreCentralizado',
            // 'airbag',
            // 'frenosABS',
            // 'aireAcondicionado',
            // 'nomImagen',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
