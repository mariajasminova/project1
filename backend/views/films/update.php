<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Films */

$this->title = 'Update Films: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Films', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id_films]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="films-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>