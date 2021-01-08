<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="jenis-form">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nm_jenis')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
