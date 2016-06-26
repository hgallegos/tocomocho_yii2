<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Falla */

$this->title = $model->idFalla;
$this->params['breadcrumbs'][] = ['label' => 'Fallas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="falla-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idFalla], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idFalla], [
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
            'idFalla',
            'categoria',
            'descripcion',
            'costoReparacion',
            'idComentario',
        ],
    ]) ?>

</div>
