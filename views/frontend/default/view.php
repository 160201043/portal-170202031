<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\bootstrap\Progress;
/* @var $this yii\web\View */
/* @var $model kouosl\oneri\models\oner */

$this->title = $model->filmisim;
$this->params['breadcrumbs'][] = ['label' => 'Oners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

?>
<body style = "background-color : 	#F0FFFF ;">

</body>
<div class="oner-view">

    <h1><?= Html::encode($this->title) ?></h1>
    
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'If the account that created the comment is not login, it will not be deleted',
                'method' => 'post',
            ],
        ]) ?>
    </p> 
            
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            //'userid',
            'filmisim',
            'tur1',
            'tur2',
        ],
    ]) ?>
    <div style = "color:black;" >  <h3> Puan: </h3>  </div>
    <?= Progress::widget([
    'percent' => $model->puan,
    'barOptions' => ['class' => 'progress-bar-success'],
    'options' => ['class' => 'progress-striped']
    ]);
    ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'yorum:ntext',
        ],
    ]) ?>

</div>