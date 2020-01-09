<?php

use yii\helpers\Html;
use yii\grid\GridView;

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


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel'=> $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'userid',
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
            //'puan',
            //'yorum:ntext',

            ['class' => 'yii\grid\ActionColumn',
              'header'=> 'Transactions',
              'headerOptions'=> ['width'=>'80'],],
        ],
    ]); ?>


</div>