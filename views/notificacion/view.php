<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Notificacion */
?>
<div class="notificacion-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idNotificacion',
            'email:email',
            'descripcion',
            'idVehiculo',
        ],
    ]) ?>

</div>
