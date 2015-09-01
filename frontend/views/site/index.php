<?php
use frontend\assets\IndexAsset;
use yii\helpers\Html;
/**
 * @var yii\web\View $this
 */

$this->title = 'Beginning Yii 2.0 - ecomm';
IndexAsset::register($this);
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><?= Html::a('Get started with Yii','http://www.yiiframework.com',['class'=>'btn btn-lg btn-success', 'target'=>'_blank']); ?></p>
    </div>
    <div class="body-content">
        <div class="row">
            <div class="col-lg-4">
                <h2>Step 1</h2>
                <p>This is a 15 part tutorial on Beginning Yii 2.0. The object of the tutorial is to flesh out an ecommerce website. 
                Be sure that you follow the Tutorial on YouTube.</p>

                <p><?= Html::a('PlayList &raquo;','https://www.youtube.com/playlist?list=PLMyGpiUTm10799F8FfSai3wvlL4DB4qqX',['class'=>'btn btn-default', 'target'=>'_blank']); ?></p>
            </div>
            <div class="col-lg-4">
                <h2>Step 2</h2>
                <p>If you've gotten this far, you have already seen the first video and are ready for more.<br/>
                We will be coding our site pretty heavily and you will find the code on github.</p>

                <p><?= Html::a('GitHub &raquo;','https://github.com/tskmatrix/ecomm',['class'=>'btn btn-default', 'target'=>'_blank']); ?></p>
            </div>
            <div class="col-lg-4">
                <h2>Step 3</h2>

                <p>Now you may add additional extensions to your site. Be sure that they are for Yii 2.0.</p>

                <p><?= Html::a('Yii Extensions &raquo;','http://www.yiiframework.com/extensions/"',['class'=>'btn btn-default', 'target'=>'_blank']); ?></p>
                
                 <p><?= Html::a('packagist &raquo;','https://packagist.org/search/?q=yii2',['class'=>'btn btn-default', 'target'=>'_blank']); ?></p>
            </div>
        </div> 
        
    <!-- start: Top categories -->
            <div class="row-fluid featured-categories">
            <h3>Top Categories</h3>
                <ul class="thumbnails">
                    <li class="span3 item">
                        <div class="thumbnail">
                            <?= Html::a('<img src="img/products/product-1.jpg" alt="">
                                <span class="frame-overlay"></span>
                                <h4 class="title"><i class="fa fa-camera"></i> Photography</h4>
                                <span class="link">view all products <i class="fa fa-chevron-right"></i></span>','?r=site/static&view=products',['class'=>'image']); ?>
                            <div class="inner notop">
                                <p class="description">
                                    <?= Html::a('Digital Cameras','?r=site/static&view=products'); ?>,
                                    <?= Html::a('Lenses','?r=site/static&view=products'); ?>,
                                    <?= Html::a('Flashes','?r=site/static&view=products'); ?>,
                                    <?= Html::a('Printers & Scanners','?r=site/static&view=products'); ?>,
                                    <?= Html::a('See All','?r=site/static&view=products',['class'=>'see-all']); ?>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="span3 item">
                        <div class="thumbnail">
                            <?= Html::a('<img src="img/products/camcorder.jpg" alt="">
                                <span class="frame-overlay"></span>
                                <h4 class="title"><i class="fa fa-video-camera"></i> Camcorders</h4>
                                <span class="link">view all products <i class="fa fa-chevron-right"></i></span>','?r=site/static&view=products',['class'=>'image']); ?>
                            <div class="inner notop">
                                <p class="description">
                                    <?= Html::a('Digital Cameras','?r=site/static&view=products'); ?>,
                                    <?= Html::a('Lenses','?r=site/static&view=products'); ?>,
                                    <?= Html::a('Flashes','?r=site/static&view=products'); ?>,
                                    <?= Html::a('Printers & Scanners','?r=site/static&view=products'); ?>,
                                    <?= Html::a('See All','?r=site/static&view=products',['class'=>'see-all']); ?>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="span3 item">
                        <div class="thumbnail">
                            <?= Html::a('<img src="img/products/product-5.jpg" alt="">
                                <span class="frame-overlay"></span>
                                <h4 class="title"><i class="fa fa-camera"></i> Professional</h4>
                                <span class="link">view all products <i class="fa fa-chevron-right"></i></span>','?r=site/static&view=products',['class'=>'image']); ?>
                            <div class="inner notop">
                                <p class="description">
                                    <?= Html::a('Digital Cameras','?r=site/static&view=products'); ?>,
                                    <?= Html::a('Lenses','?r=site/static&view=products'); ?>,
                                    <?= Html::a('Flashes','?r=site/static&view=products'); ?>,
                                    <?= Html::a('Printers & Scanners','?r=site/static&view=products'); ?>,
                                    <?= Html::a('See All','?r=site/static&view=products',['class'=>'see-all']); ?>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="span3 item">
                        <div class="thumbnail">
                            <?= Html::a('<img src="img/products/product-7.jpg" alt="">
                                <span class="frame-overlay"></span>
                                <h4 class="title"><i class="fa fa-camera"></i> Accessories</h4>
                                <span class="link">view all products <i class="fa fa-chevron-right"></i></span>','?r=site/static&view=products',['class'=>'image']); ?>
                            <div class="inner notop">
                                <p class="description">
                                    <?= Html::a('Digital Cameras','?r=site/static&view=products'); ?>,
                                    <?= Html::a('Lenses','?r=site/static&view=products'); ?>,
                                    <?= Html::a('Flashes','?r=site/static&view=products'); ?>,
                                    <?= Html::a('Printers & Scanners','?r=site/static&view=products'); ?>,
                                    <?= Html::a('See All','?r=site/static&view=products',['class'=>'see-all']); ?> 
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- end: Top categories -->

            <!-- start: Featured products -->
            <div class="row-fluid featured-products">
                <h3>Featured Products</h3>
                <ul class="thumbnails">
                    <li class="span3 item">
                        <div class="thumbnail">
                            <?= Html::a('<img src="img/products/product-2.jpg" alt="">
                                <span class="frame-overlay"></span>
                                <span class="price">$35</span>','?r=site/static&view=product',['class'=>'image']); ?>
                            <div class="inner notop nobottom">
                                <h4 class="title">Product #1</h4>
                                <p class="description">Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                            </div>
                        </div>
                        <div class="inner darken notop">
                            <?= Html::a('Add<i class="fa fa-shopping-cart"></i>','#',['class'=>'btn btn-add-to-cart']); ?>
                        </div>
                    </li>
                    <li class="span3 item">
                        <div class="thumbnail">
                            <?= Html::a('<img src="img/products/product-4.jpg" alt="">
                                <span class="frame-overlay"></span>
                                <span class="price">$50</span>','?r=site/static&view=product',['class'=>'image']); ?>
                            <div class="inner notop">
                                <h4 class="title">Product #2</h4>
                                <p class="description">Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                            </div>
                        </div>
                        <div class="inner darken notop">
                            <?= Html::a('View options<i class="fa fa-share"></i>','#',['class'=>'btn btn-add-to-cart']); ?>
                        </div>
                    </li>
                    <li class="span3 item">
                        <div class="thumbnail">
                            <?= Html::a('<img src="img/products/product-6.jpg" alt="">
                                <span class="frame-overlay"></span>
                                <span class="price">$25</span>','?site/static&view=product',['class'=>'image']); ?>
                            <div class="inner notop">
                                <h4 class="title">Product #3</h4>
                                <p class="description">Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                            </div>
                        </div>
                        <div class="inner darken notop">
                            <?= Html::a('Add<i class="fa fa-shopping-cart"></i>','#',['class'=>'btn btn-add-to-cart']); ?>
                        </div>
                    </li>
                    <li class="span3 item">
                        <div class="thumbnail">
                            <?= Html::a('<img src="img/products/product-8.jpg" alt="">
                                <span class="frame-overlay"></span>
                                <span class="price">$80</span>','?r=site/static&view=product',['class'=>'image']); ?>
                            <div class="inner notop">
                                <h4 class="title">Product #4</h4>
                                <p class="description">Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                            </div>
                        </div>
                        <div class="inner darken notop">
                            <?= Html::a('Add<i class="fa fa-shopping-cart"></i>','#',['class'=>'btn btn-add-to-cart']); ?> 
                        </div>
                    </li>
                </ul>
            </div>
            <!-- end: Featured products -->
    </div>
    
</div>