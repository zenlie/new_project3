<?php

use yii\helpers\Html;

$this->title = 'Tambah Satuan';
$this->params['breadcrumbs'][] = ['label' => 'Satuan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satuan-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
