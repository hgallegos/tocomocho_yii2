<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Usuario */
?>
<div class="usuario-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'email:email',
            'nombre',
            'password',
            'valoracionDeUsuario',
            'tipo',
        ],
    ]) ?>

</div>
