<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\ReseniaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Resenias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resenia-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Resenia', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idComentario',
            'contenido:ntext',
            'fecha',
            'emailUsuario:email',
            'idVehiculo',
            // 'nCalidad',
            // 'nEconomia',
            // 'valoracion',
            // 'rendimientoR',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
