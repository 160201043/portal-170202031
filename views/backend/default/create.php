<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kouosl\oneri\models\oner */

$this->title = 'Create Oner';
$this->params['breadcrumbs'][] = ['label' => 'Oners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oner-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>