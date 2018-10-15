<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Producer */

$this->title = 'Update Producer: ' . $model->id_producer;
$this->params['breadcrumbs'][] = ['label' => 'Producers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_producer, 'url' => ['view', 'id' => $model->id_producer]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="producer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
