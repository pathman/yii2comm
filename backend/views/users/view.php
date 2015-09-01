<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var common\models\Users $model
 */

$this->title = $model->UserId;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->UserId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->UserId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'UserId',
            'UserTypeId',
            'username',
            'auth_key',
            'password_hash',
            'password_reset_token',
            'email:email',
            'Names',
            'PreferredName',
            'Surname',
            'Gender',
            'Birthday',
            'Website',
            'FacebookId',
            'TwitterId',
            'IsLikedFanPage:boolean',
            'PhotoUrl:url',
            'IsPersonal:boolean',
            'IdentityNumber',
            'TaxNumber',
            'TaxOffice',
            'Comment:ntext',
            'role',
            'status',
            'lastLogin',
            'previousLogin',
            'LastUpdatedBy',
            'created_at',
            'updated_at',
            'deleted_at',
        ],
    ]) ?>

</div>
