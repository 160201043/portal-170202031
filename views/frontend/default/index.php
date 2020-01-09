<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Block;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Filmler';
$this->params['breadcrumbs'][] = $this->title;
?>

<body style = "background : url('http://www.yenislayt.com/upload/11b7161d8e.jpg')no-repeat center center fixed ; -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;">

</body>
<div class="oner-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Add new entry', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel'=> $searchModel,
        'columns' => [
            //'id',
            //'userid',
            ['attribute'=>'filmisim',
             'label'=>'Films title',
        /*'contentOptions'=>['style'=>'background:yellow;'] */  ],
            ['attribute'=>'tur1',
             'label'=>'Type of the Movie',
             'contentOptions'=>['style'=>'background:yellow;']   ],
             ['attribute'=>'tur2',
             'label'=>'Type of the Movie',
             'contentOptions'=>['style'=>'background:yellow;']   ],
            ['attribute'=>'puan',
             'label'=>'Rate',
        /*'contentOptions'=>['style'=>'background:yellow;'] */  ],
            //'yorum:ntext',

            ['class' => 'yii\grid\ActionColumn',
              'header'=> 'Transactions',
              'headerOptions'=> ['width'=>'80'],
              'template'=>'{view}'],
        ],
    ]); ?>


</div>