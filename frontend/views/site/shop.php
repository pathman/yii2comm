<?php
use yii\helpers\Html;
use frontend\assets\IndexAsset;

/**
 * @var yii\web\View $this
 */
IndexAsset::register($this);
//$this->title = 'Shop';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">

<!-- start: Page header / Breadcrumbs -->
<div id="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs">
            <h1 class="title">CameraStore<span> Canon EOS Rebel T4i</span></h1>
		</div>
    </div>
</div>
<!-- end: Page header / Breadcrumbs -->

    <h1><?= Html::encode($this->title) ?></h1>
<!-- start: Container -->
<div id="container">
    <div class="container">
        <div class="row-fluid">

        <!-- start: Page section -->
        <section class="span9 page-sidebar pull-right">

            <!-- start: Page title -->
            <div class="row-fluid page-title">
                <div class="inner">
                    <div class="page-header">
                        <h1>Shop page <small><i class="fa fa-angle-right "></i> all products</small></h1>
                    </div>
                </div>
            </div>
            <!-- end: Page title -->

            <!-- start: Results -->
            <div class="row-fluid shop-result">
                <div class="inner darken clearfix">
                    <div class="span6 result-count">
                        Showing 1 - 12 of 99 results
                    </div>
                    <div class="span6 result-ordering">
                        <div class="pull-right">
                            <select>
                                <option value="menu_order">Default sorting</option>
                                <option value="popularity">Sort by popularity</option>
                                <option value="rating">Sort by average rating</option>
                                <option value="date">Sort by newness</option>
                                <option value="price">Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to low</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end: Results -->

            <!-- start: products listing -->
            <?php 
            /**
             * TODO: use foreach to list products from data passed in by controller
             */
            ?>
            <div class="row-fluid shop-products">
                <ul class="thumbnails">
                    <!---->
                    <li class="item span4 first">
                        <div class="thumbnail">
                            <?= Html::a('<img src="img/products/product-1.jpg" alt="">
                                <span class="frame-overlay"></span>
                                <span class="price">$35</span>','?r=site/static&view=product',['class'=>'image']); ?>
                            <div class="inner notop nobottom">
                                <h4 class="title">Product #1</h4>
                                <p class="description">Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                            </div>
                        </div>
                        <div class="inner darken notop">
                            <?= Html::a(Html::button('Add<i class="fa fa-shopping-cart"></i>',['class'=>'btn btn-add-to-cart']),'#'); ?>
                        </div>
                    </li>
                    <li class="item span4">
                        <div class="thumbnail">
                            <?= Html::a('<img src="img/products/product-2.jpg" alt="">
                                <span class="frame-overlay"></span>
                                <span class="price">$50</span>','?r=site/static&view=product',['class'=>'image']); ?>
                            <div class="inner notop">
                                <h4 class="title">Product #2</h4>
                                <p class="description">Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                            </div>
                        </div>
                        <div class="inner darken notop">
                            <?= Html::a(Html::button('View options',['class'=>'btn btn-add-to-cart']),'#'); ?>
                        </div>
                    </li>
                    <li class="item span4">
                        <div class="thumbnail">
                            <?= Html::a('<img src="img/products/product-3.jpg" alt="">
                                <span class="frame-overlay"></span>
                                <span class="price">$25</span>','?r=site/static&view=product',['class'=>'image']); ?>
                            <div class="inner notop">
                                <h4 class="title">Product #3</h4>
                                <p class="description">Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                            </div>
                        </div>
                        <div class="inner darken notop">
                            <?= Html::a(Html::button('Add<i class="fa fa-shopping-cart"></i>',['class'=>'btn btn-add-to-cart']),'#'); ?>
                        </div>
                    </li>
                    <!---->
                    <li class="item span4 first">
                        <div class="thumbnail">
                            <?= Html::a('<img src="img/products/product-4.jpg" alt="">
                                <span class="frame-overlay"></span>
                                <span class="price">$80</span>','?r=site/static&view=product',['class'=>'image']); ?>
                            <div class="inner notop">
                                <h4 class="title">Product #4</h4>
                                <p class="description">Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                            </div>
                        </div>
                        <div class="inner darken notop">
                            <?= Html::a(Html::button('Add<i class="fa fa-shopping-cart"></i>',['class'=>'btn btn-add-to-cart']), '#'); ?>
                        </div>
                    </li>
                    <li class="item span4">
                        <div class="thumbnail">
                            <?= Html::a('<img src="img/products/product-5.jpg" alt="">
                                <span class="frame-overlay"></span>
                                <span class="price">$35</span>','?r=site/static&view=product',['class'=>'image']); ?>
                            <div class="inner notop nobottom">
                                <h4 class="title">Product #1</h4>
                                <p class="description">Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                            </div>
                        </div>
                        <div class="inner darken notop">
                            <?= Html::a(Html::button('Add<i class="fa fa-shopping-cart"></i>',['class'=>'btn btn-add-to-cart']), '#'); ?>
                        </div>
                    </li>
                    <li class="item span4">
                        <div class="thumbnail">
                            <?= Html::a('<img src="img/products/product-6.jpg" alt="">
                                <span class="frame-overlay"></span>
                                <span class="price">$50</span>','?r=site/static&view=product',['class'=>'image']); ?>
                            <div class="inner notop">
                                <h4 class="title">Product #2</h4>
                                <p class="description">Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                            </div>
                        </div>
                        <div class="inner darken notop">
                            <?= Html::a(Html::button('View options',['class'=>'btn btn-add-to-cart']),'#'); ?>
                        </div>
                    </li>
                    <!---->
                    <li class="item span4 first">
                        <div class="thumbnail">
                            <?= Html::a('<img src="img/products/product-7.jpg" alt="">
                                <span class="frame-overlay"></span>
                                <span class="price">$25</span>','?r=site/static&view=product',['class'=>'image']); ?>
                            <div class="inner notop">
                                <h4 class="title">Product #3</h4>
                                <p class="description">Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                            </div>
                        </div>
                        <div class="inner darken notop">
                            <?= Html::a(Html::button('Add<i class="fa fa-shopping-cart"></i>',['class'=>'btn btn-add-to-cart']), '#'); ?>
                        </div>
                    </li>
                    <li class="item span4">
                        <div class="thumbnail">
                            <?= Html::a('<img src="img/products/product-8.jpg" alt="">
                                <span class="frame-overlay"></span>
                                <span class="price">$50</span>','?r=site/static&view=product',['class'=>'image']); ?>
                            <div class="inner notop">
                                <h4 class="title">Product #2</h4>
                                <p class="description">Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                            </div>
                        </div>
                        <div class="inner darken notop">
                            <?= Html::a(Html::button('View options',['class'=>'btn btn-add-to-cart']),'#'); ?>
                        </div>
                    </li>
                    <li class="item span4">
                        <div class="thumbnail">
                            <?= Html::a('<img src="img/products/product-1.jpg" alt="">
                                <span class="frame-overlay"></span>
                                <span class="price">$25</span>','?r=site/static&view=product',['class'=>'image']); ?>
                            <div class="inner notop">
                                <h4 class="title">Product #3</h4>
                                <p class="description">Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                            </div>
                        </div>
                        <div class="inner darken notop">
                            <?= Html::a(Html::button('Add<i class="fa fa-shopping-cart"></i>',['class'=>'btn btn-add-to-cart']),'#'); ?>
                        </div>
                    </li>
                    <!---->
                    <li class="item span4 first">
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
                            <?= Html::a(Html::button('Add<i class="fa fa-shopping-cart"></i>',['class'=>'btn btn-add-to-cart']),'#'); ?>
                        </div>
                    </li>
                    <!---->
                </ul>
            </div>
            <!-- end: products listing -->

            <!-- start: Pagination -->
            <?php 
            /**
             * TODO: use yii pagination widget here
             */
            ?>
            <div class="pagination pagination-right">
               
            </div>
            <!-- end: Pagination -->

        </section>
        <!-- end: Page section -->

        <!-- start: Sidebar -->
        <aside class="span3 sidebar pull-left">

            <section class="widget inner shopping-cart-widget">
                <h3 class="widget-title">Shopping Cart</h3>
                <div class="products">
                    <div class="media">
                        <a class="pull-right" href="?r=site/static&view=product">
                            <img class="media-object" src="img/products/prod-scs-1.jpg" alt=""/>
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading"><?= Html::a('Canon EOS T4i','?r=site/static&view=product',[''=>'']); ?></h4>
                            1 x $43
                        </div>
                    </div>
                    <div class="media">
                        <a class="pull-right" href="?r=site/static&view=product">
                            <img class="media-object" src="img/products/prod-scs-2.jpg" alt=""/>
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading"><?= Html::a('Canon EOS 6D','?r=site/static&view=product'); ?></h4>
                            1 x $12
                        </div>
                    </div>
                </div>
                <p class="subtotal">
                    <strong>Subtotal:</strong>
                    <span class="amount">$55</span>
                </p>
                <p class="buttons">
                    <a class="btn btn-inverse viewcart" href="#">View Cart</a>
                    <a class="btn btn-inverse checkout" href="#">Checkout &rarr;</a>
                </p>
            </section>

            <!-- start: Search widget -->
            <?php 
            /**
             * TODO: add the Yii pagiation widget here 
             */
            ?>
            <section class="search widget">
				<form id="search" class="input-append">
					<input class="span4" id="appendedInputButton" type="text" placeholder="Search" />
					<input class="btn search-bt" type="submit" name="submit" value="Search" />
				</form>
            </section>
            <!-- end: Search widget -->
            <?php 
            /**
             * TODO: add a foreach statement to populate categories
             */
            ?>
            <!-- start: Categories -->
            <section class="widget inner categories-widget">
                <h3 class="widget-title">Categories</h3>
                <ul class="icons clearfix">
                    <li><?= Html::a('Design','#'); ?> (5)</li>
                    <li><?= Html::a('General','#'); ?> (1)</li>
                    <li><?= Html::a('Photography','#'); ?> (8)</li>
                    <li><?= Html::a('Products','#'); ?> (19)</li>
                </ul>
            </section>
            <!-- end: Categories -->
            <?php 
            /**
             * TODO: make numbers dynamic
             */
            ?>
            <!-- start: Filter by -->
            <section class="widget inner">
                <h3 class="widget-title">Filter by</h3>
                <ul class="icons check clearfix">
                    <li class="on"><?= Html::a('Free Shipping','#'); ?> (775)</li>
                    <li><?= Html::a('Rebates','#'); ?> (297)</li>
                    <li><?= Html::a('In stock','#'); ?> (548)</li>
                    <li><?= Html::a('New Release','#'); ?> (79)</li>
                </ul>
            </section>
            <!-- end: Filter by -->
            <?php 
            /**
             * TODO: use foreach to populate Brands
             */
            ?>
            <!-- start: Filter by Brand -->
            <section class="widget inner">
                <h3 class="widget-title">Brand</h3>
                <ul class="icons check clearfix">
                    <li><?= Html::a('Canon','#'); ?> (116)</li>
                    <li><?= Html::a('Fujifilm','#'); ?> (41)</li>
                    <li><?= Html::a('Hasselblad','#'); ?> (14)</li>
                    <li><?= Html::a('Nikon','#'); ?> (151)</li>
                    <li><?= Html::a('Olympus','#'); ?> (71)</li>
                    <li class="on"><?= Html::a('Panasonic','#'); ?> (47)</li>
                </ul>
            </section>
            <!-- end: Filter by Brand -->
            <?php 
            /**
             * TODO: make numbers dynamic and links pass price range back to controller
             */
            ?>
            <!-- start: Filter by price -->
            <section class="widget inner price-widget">
                <h3 class="widget-title">Price</h3>
                <ul class="unstyled clearfix">
                    <li><?= Html::a('$0 to $249.99','#'); ?> (251)</li>
                    <li><?= Html::a('$250 to $499.99','#'); ?> (169)</li>
                    <li><?= Html::a('$500 to $749.99','#'); ?> (195)</li>
                    <li><?= Html::a('$750 to $999.99','#'); ?> (65)</li>
                    <li><?= Html::a('$1000 to $1499.99','#'); ?> (40)</li>
                    <li><?= Html::a('$1500 to $1999.99','#'); ?> (18)</li>
                    <li><?= Html::a('$2000 to $2999.99','#'); ?> (20)</li>
                    <li><?= Html::a('$3000 to $3999.99','#'); ?> (13)</li>
                    <li><?= Html::a('$4000 to $4999.99','#'); ?> (2)</li>
                    <li><?= Html::a('$5000 to $9999.99','#'); ?> (11)</li>
                    <li><?= Html::a('$10000 and up','#'); ?> (28)</li>
                </ul>
                <?php 
                /**
                 * TODO: use form widget and pass price range back to controller
                 */
                ?>
                <div class="controls controls-row">
                    <form>
                        <input type="text" placeholder="from" class="span4">
                        <input type="text" placeholder="to" class="span4">
                        <?= Html::a(Html::button('GO',['class'=>'btn btn-inverse']),'#'); ?>
                    </form>
                </div>
            </section>
            <!-- end: Filter by price -->

            <!-- start: Text Widget -->
            <section class="widget inner">
                <h3 class="widget-title">Ready to Purchase</h3>
                <p>Lorem ipsum dolor sit amet, consect <?= Html::a('etuer adipi scing','#'); ?> elit, sed diam nonummy nibh euis mod tinci dunt ut laoreet dolore magna</p>
                <?= Html::a(Html::button('Purchase',['class'=>'btn btn-large btn-danger']),'#'); ?>
            </section>
            <!-- end: Text Widget -->

        </aside>
        <!-- end: Sidebar -->
        </div>

    </div>
</div>
<!-- end: Container -->
</div>
