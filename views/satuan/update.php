<?php

use yii\helpers\Html;

$this->title = 'Update Satuan: ' . $model->_id;
$this->params['breadcrumbs'][] = ['label' => 'Satuan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->_id, 'url' => ['view', '_id' => $model->_id]];
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="satuan-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>   
</div>
