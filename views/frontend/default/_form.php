<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model kouosl\oneri\models\oner */
/* @var $form yii\widgets\ActiveForm */
//  Yii::$app->user->identity->id
?>

<div class="oner-form">
    
    <?php $form = ActiveForm::begin(); ?>

    <!--<?= $form->field($model, 'id')->textInput() ?>-->

    <?= $form->field($model, 'filmisim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tur1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tur2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'puan')->textInput() ?>

    <?= $form->field($model, 'yorum')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>