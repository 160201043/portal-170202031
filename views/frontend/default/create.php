<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kouosl\oneri\models\oner */

$this->title = '';
$this->params['breadcrumbs'][] = ['label' => 'Oners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<body style = "background : url('http://www.slayt.org/wp-content/uploads/2011/11/Black-Background-Wood-4-Darker-2560x1600-by-Freeman-680x425.jpg')no-repeat center center fixed ; -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;">

</body>

<body >
  <div align='center'> <img src = "https://tavsiyelist.com/wp-content/uploads/2019/08/en-iyi-filmler-2019.jpg" width="800" height="300"> </div>

</body>
<div class="oner-create" style=" color : red ;">

    <h1><?= Html::encode($this->title) ?></h1>
    <h3>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    </h3>
</div>