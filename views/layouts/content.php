<?php

use yii\bootstrap4\Breadcrumbs;
?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0 text-dark">
                                    <?php
                                    if (!is_null($this->title)) {
                                        echo \yii\helpers\Html::encode($this->title);
                                    } else {
                                        echo \yii\helpers\Inflector::camelize($this->context->id);
                                    }
                                    ?>
                                </h1>
                            </div>
                            <div class="col-sm-6">
                                <?php
                                echo Breadcrumbs::widget([
                                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                                    'options' => [
                                        'class' => 'float-sm-right'
                                    ]
                                ]);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <?= $content ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>