<?php

use yii\helpers\Html;

$this->title = 'Update Jenis: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Jenis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jenis-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
