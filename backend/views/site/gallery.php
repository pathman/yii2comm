<?php 
/**
 * @var yii\web\View $this
 */
use yii\helpers\Html;
use backend\assets\ProfileAsset;

ProfileAsset::register($this);

$this->title = 'Gallery';

$id = Yii::$app->user->id;
$uid = $rows['id'];
$username = $rows['username'];
$email = $rows['email'];

//$this->params['breadcrumbs'][] = $this->title;
?>
<h1>This is <?php echo strtoupper($username) ?>'s Gallery page</h1>
