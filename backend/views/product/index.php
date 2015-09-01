<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'alternateName',
            'description:ntext',
            'name',
            'manufacturerID',
            // 'manufacturerPartNumber',
            // 'cost',
            // 'price',
            // 'DateCreated',
            // 'LastUpdated',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
