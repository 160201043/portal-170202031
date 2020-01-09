<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kouosl\oneri\models\oner */

$this->title = 'Update Entry: ' . $model->filmisim;
$this->params['breadcrumbs'][] = ['label' => 'Oners', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>

<body style = "background : url('https://www.elsetge.cat/myimg/f/102-1025623_all-you-need-to-know-about-davy-jones.jpg')no-repeat center center fixed ; -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;">

</body>

<div class="oner-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>