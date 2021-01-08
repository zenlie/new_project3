<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

$this->title = 'Jenis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenis-index">
    <p>
        <?= Html::a('Tambah Jenis', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            'nm_jenis',
            
            ['class' => 'yii\grid\ActionColumn',
                'header' => 'Aksi',
                'options' => [
                    'style' => 'width: 100px; white-space: nowrap; ',
                ],
                'template' => '{update}{delete}',
                'buttons'=>[
                    'update'=>function ($url, $model) {
                        return Html::a('<i class="fas fa-pen"></i>', ['update', 'id' => (string)$model->id], ['class' => 'btn btn-sm btn-warning']);
                    },
                    'delete'=>function ($url, $model) {
                        return Html::a('<i class="fas fa-trash"></i>', ['delete', 'id' => (string)$model->id], ['class' => 'btn btn-sm btn-danger', 'onclick' => 'js:return confirm("Delete this data ?");']);
                    },
                ],
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
