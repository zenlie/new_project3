<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

$this->title = 'Satuan';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="satuan-index">
    <p>
        <?= Html::a('Tambah Satuan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            'nm_satuan',
            
            ['class' => 'yii\grid\ActionColumn',
                'header' => 'Aksi',
                'options' => [
                    'style' => 'width: 100px; white-space: nowrap; ',
                ],
                'template' => '{update}{delete}',
                'buttons'=>[
                    'update'=>function ($url, $model) {
                        return Html::a('<i class="fas fa-pen"></i>', ['update', '_id' => (string)$model->_id], ['class' => 'btn btn-sm btn-warning']);
                    },
                    'delete'=>function ($url, $model) {
                        return Html::a('<i class="fas fa-trash"></i>', ['delete', '_id' => (string)$model->_id], ['class' => 'btn btn-sm btn-danger', 'onclick' => 'js:return confirm("Delete this data ?");']);
                    },
                ],
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
