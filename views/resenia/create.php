<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Resenia */

$this->title = 'Create Resenia';
$this->params['breadcrumbs'][] = ['label' => 'Resenias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resenia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
