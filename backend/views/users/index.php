<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Users', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'UserId',
            'UserTypeId',
            'username',
            'auth_key',
            'password_hash',
            // 'password_reset_token',
            // 'email:email',
            // 'Names',
            // 'PreferredName',
            // 'Surname',
            // 'Gender',
            // 'Birthday',
            // 'Website',
            // 'FacebookId',
            // 'TwitterId',
            // 'IsLikedFanPage:boolean',
            // 'PhotoUrl:url',
            // 'IsPersonal:boolean',
            // 'IdentityNumber',
            // 'TaxNumber',
            // 'TaxOffice',
            // 'Comment:ntext',
            // 'role',
            // 'status',
            // 'lastLogin',
            // 'previousLogin',
            // 'LastUpdatedBy',
            // 'created_at',
            // 'updated_at',
            // 'deleted_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
