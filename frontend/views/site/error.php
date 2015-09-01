<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var string $name
 * @var string $message
 * @var Exception $exception
 */

$this->title = $name;
?>
 <div class="site-error">
    <div class="container">
    	<div class="row page-404">
            <div class="col-md-6"><h1><?= Html::encode($this->title) ?></h1></div>
            <div class="col-md-6">
                <div class="alert alert-danger">
                    <p class="margin-top-20"><span><?= nl2br(Html::encode($message)) ?></span></p>
                </div>
                <p>
                    The above error occurred while the Web server was processing your request.
                </p>
                <p>
                    Please contact us if you think this is a server error. Thank you.
                </p>
                <center><a href="index.php?r=site/index" class="btn btn-lg btn-danger"><i class="icon-chevron-left"></i> Return to Home page</a></center>
            </div>
        </div><!--/row-->
    </div>
</div>
