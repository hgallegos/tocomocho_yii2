<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\FallaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fallas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="falla-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Falla', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idFalla',
            'categoria',
            'descripcion',
            'costoReparacion',
            'idComentario',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
