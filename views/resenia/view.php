<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Resenia */
?>
<div class="resenia-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idComentario',
            'contenido:ntext',
            'fecha',
            'emailUsuario:email',
            'idVehiculo',
            'nCalidad',
            'nEconomia',
            'valoracion',
            'rendimientoR',
        ],
    ]) ?>

</div>
