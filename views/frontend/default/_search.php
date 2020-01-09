<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\oneri\controllers\frontend\SeaController */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="oner-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'userid') ?>

    <?= $form->field($model, 'filmisim') ?>

    <?= $form->field($model, 'tur1') ?>

    <?= $form->field($model, 'tur2') ?>

    <?php // echo $form->field($model, 'yorum') ?>

    <?php // echo $form->field($model, 'puan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>