<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kouosl\oneri\models\oner */

$this->title = 'Yorum ekle';
$this->params['breadcrumbs'][] = ['label' => 'Oners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<body style = "background-color : turquoise ;">
  <div align='center'> <img src = "https://tavsiyelist.com/wp-content/uploads/2019/08/en-iyi-filmler-2019.jpg" width="800" height="300"> </div>

</body>
<div class="oner-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>