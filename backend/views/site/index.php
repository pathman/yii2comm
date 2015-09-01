<?php
use yii\helpers\Html;
use backend\assets\HomeAsset;
use yii\data\Pagination;
/**
 * @var yii\web\View $this
 */
$this->title = 'MegaSale Administration';

HomeAsset::register($this);

// vars passed in by controller
    
    $id = Yii::$app->user->id;
    $uid = $rows['UserId'];
    $username = $rows['username'];
    $created = $rows['created_at'];
    $updated = $rows['updated_at'];
    $previouslogin = $rows['previousLogin'];
    $lastlogin = $rows['lastLogin'];
    
    // set the edit flag
    $edit = false;
    if($uid == $id) $edit=true;
?>
<div class="site-index">

    <div class="body-content">

<!-- Main content starts -->
    <!-- custom.js (loaded at end of page) will automatically slide down a message under the menu bar -->

<div class="content">

<!-- Sidebar -->
<div class="sidebar">
    <div class="sidebar-dropdown"><a href="#">Navigation</a></div>

    <div class="sidebar-inner">


        <!-- sidebar shortcuts -->
        <div class="sidebar-shortcuts" class="sidebar-shortcuts-large">
            <?= Html::a(Html::button('<i class="fa fa-signal"></i>',array('class'=>'btn btn-success')),'#') ?>
            <?= Html::a(Html::button('<i class="fa fa-pencil"></i>',array('class'=>'btn btn-info')),'index.php?r=site/profile&id='.$uid) ?>
            <?= Html::a(Html::button('<i class="fa fa-group"></i>',array('class'=>'btn btn-warning')),'#') ?>
            <?= Html::a(Html::button('<i class=" fa fa-cogs"></i>',array('class'=>'btn btn-danger')),'#') ?>
        </div>

        <!--- Sidebar navigation -->
        <!-- If the main navigation has sub navigation, then add the class "has_submenu" to "li" of main navigation. -->
        <ul class="navi">

            <!-- Use the class nred, ngreen,,, or norange to add background color. You need to use this in <li> tag. -->

            <li class="current"><a href="#"><i class="fa-desktop"></i> Dashboard</a></li>
            <?php 
                if(Yii::$app->user->can('manageproducts') || Yii::$app->user->can('managesuppliers'))
                {
            ?>
            <!-- Menu with sub menu -->
            <li class="has_submenu">
             <!-- Menu name with icon -->
                <?= Html::a('<i class="fa fa-th-list"></i> Widgets <span class="pull-right">2</span>','#') ?>
                <ul>
                    <li><?= Html::a('Widgets #1','widgets1.html') ?></li>
                    <li><?= Html::a('Widgets #2','widgets2.html') ?></li>
                </ul>
            </li>
            <?php } ?>            
            <?php 
                if(Yii::$app->user->can('manageproducts') || Yii::$app->user->can('managesuppliers'))
                {
            ?>
            <li><?= Html::a('<i class="fa fa-bar-chart-o"></i> Charts','index.php?r=site/static&view=charts') ?></li>
            <?php } ?>
            <?php 
                if(Yii::$app->user->can('manageproducts') || Yii::$app->user->can('managesuppliers'))
                {
            ?>
            <li><?= Html::a('<i class="fa fa-sitemap"></i> UI Elements','index.php?r=site/static&view=ui') ?></li>
            <?php } ?>
            <?php 
                if(Yii::$app->user->can('manageproducts') || Yii::$app->user->can('managesuppliers'))
                {
            ?>
            <li class="has_submenu">
                <?= Html::a('<i class="fa-file-alt"></i> Pages #1<span class="pull-right">7</span>','#') ?>
                <ul>
                    <li><?= Html::a('Calendar',['index.php/?r=site/static&view=calendar']); ?></li>
                    <li><?= Html::a('Make Post','index.php/?r=site/static&view=post'); ?></li>
                    <li><?= Html::a('Login','index.php/?r=site/login'); ?></li>
                    <li><?= Html::a('Register','index.php/?r=@frothome/site/signup'); ?>
                    <li><?= Html::a('Statement','index.php/?r=site/static&view=chat'); ?></li>
                    <li><?= Html::a('Error Log','index.php/?r=site/error'); ?></li>
                    <li><?= Html::a('Support','index.php/?r=site/static&view=support'); ?></li>
                </ul>
            </li>
            <?php } ?>
            
            <?php 
                if(Yii::$app->user->can('manageproducts') || Yii::$app->user->can('managesuppliers'))
                {
            ?>
            <li class="has_submenu">
            <?= Html::a('<i class="fa fa-file"></i> Pages #2<span class="pull-right">6</span>','#'); ?>

                <ul>
                    <li><?= Html::a('Error','site/error') ?></li>
                    <li><?= Html::a('Gallery','index.php?r=site/gallery&id='.$uid) ?></li>
                    <li><?= Html::a('Grid','index.php?r=site/static&view=grid') ?></li>
                    <li><?= Html::a('Invoice','index.php?r=site/static&view=invoice') ?></li>
                    <li><?= Html::a('Media','index.php?r=site/static&view=media') ?></li>
                    <li><?= Html::a('Profile','index.php?r=site/profile&id='.$uid) ?></li>    
                </ul>
            </li>
            <?php } ?>
            <?php 
                if(Yii::$app->user->can('manageproducts') || Yii::$app->user->can('managesuppliers'))
                {
            ?>
            <li><?= Html::a('<i class="fa fa-list"></i> Forms', 'index.php?r=site/static&view=forms') ?></li>
            <?php } ?>
            <?php 
                if(Yii::$app->user->can('manageproducts') || Yii::$app->user->can('managesuppliers'))
                {
            ?>
            <li><?= Html::a('<i class="fa fa-table"></i> Tables','index.php?r=site/static&view=tables','')?></li>
            <?php } ?>
        </ul>


    </div> <!-- end sidebar-inner -->

</div> <!-- end sidebar -->

<!-- Sidebar ends -->
    
    
<!-- Main bar -->
<div class="mainbar">

<!-- Page heading -->
<div class="page-head">
    <!-- Breadcrumb -->
    <div class="bread-crumb">
        <?= Html::a('<i class="fa fa-home"></i>', '?r=site/index') ?>
        <!-- Divider -->
        <i class="fa fa-angle-right"></i>
        <?= Html::a('Dashboard', '?r=site/index', array('class' => 'bread-current') ) ?>
    </div>
    <!-- welcome user -->
        <h5>Welcome back <?= strtoupper($username) ?>! You last logged in on <?= date('l, M jS, Y \a\t H:i:s A', $lastlogin) ?></h5>
    <!-- Page heading -->
    <div class="clearfix"></div>

</div>
<!-- Page heading ends -->


<!-- Matter -->

<div class="matter">
    <div class="container">

<!-- Today status. jQuery Sparkline plugin used. -->

<div class="row">
    <div class="col-md-12">
    <?php $id = Yii::$app->user->id; ?>
    <!-- Navigation Dashboard starts -->
        <ul class="nav-dash"> 
            <li>
                 <?= Html::a('<i class="fa fa-user fa-lg"></i>', 'index.php?r=site/profile&id='.$uid, array('data-toggle'=>'tooltip', 'data-original-title' =>'Users' )) ?>
            </li>
            <li>
                <?= Html::a('<i class="fa fa-calendar fa-lg"></i><span class="badge badge-inverse">5</span>', 'index.php/?r=site/static&view=calendar', array('data-toggle'=>'tooltip', 'data-original-title' =>'Calendar' )) ?>
            </li>            
            <li>
                <?= Html::a('<i class="fa fa-comments fa-lg"></i><span class="badge badge-success">3</span>', 'index.php?r=site/static&view=chat', array('data-toggle'=>'tooltip', 'data-original-title' =>'Chat' )) ?>
            </li>
            <li>
               <?= Html::a('<i class="fa fa-camera-retro fa-lg"></i>', 'index.php?r=site/gallery&id='.$uid, array('data-toggle'=>'tooltip', 'data-original-title'=>'Photos')); ?>
            </li>
            <li>
                <?= Html::a('<i class="fa fa-bar-chart-o fa-lg"></i>', 'index.php?r=site/static&view=charts', array('data-toggle'=>'tooltip', 'data-original-title'=>'Charts')); ?>
            </li>
            <li>
                <?= Html::a('<i class="fa fa-table fa-lg"></i><span class="badge badge-warning">1</span>', 'index.php?r=site/static&view=tables', array('data-toggle'=>'tooltip', 'data-original-title'=>'Tables')); ?>
            </li>
            <li>
                <?= Html::a('<i class="fa fa-tasks fa-lg"></i>', 'index.php?r=site/static&view=forms', array('data-toggle'=>'tooltip', 'data-original-title'=>'Forms')); ?>
            </li>            
            <?php 
                if(Yii::$app->user->can('superadmin'))
                { 
                ?>
            <li>            
                <?= Html::a('<i class="fa fa-cogs fa-lg"></i>', 'index.php?r=site/static&view=ui', array('data-toggle'=>'tooltip', 'data-original-title'=>'Settings')) ?>
            </li>
            <?php } ?>
        </ul>
    <!-- Navigation Dashboard ends  -->

    <!-- Statistics starts -->

        <div class="row">
            <!-- stats -->
            <?php 
                if(Yii::$app->user->can('manageproducts') || Yii::$app->user->can('managesuppliers'))
                {
            ?>
            <div class="well-container">
                <div class="well wblue">
                    <div class="well-icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <div class="well-data">
                        <span class="well-data-number">8000</span>
                        <div class="well-content">Total Users</div>
                    </div>
                </div>
                <div class="well wviolet">
                    <div class="well-icon">
                        <i class="fa fa-shopping-cart"></i>
                    </div>
                    <div class="well-data">
                        <span class="well-data-number">$8434</span>
                        <div class="well-content">Total Sales</div>
                    </div>
                </div>
                <div class="well wred">
                    <div class="well-icon">
                        <i class="fa fa-fire"></i>
                    </div>
                    <div class="well-data">
                        <span class="well-data-number">+95%</span>
                        <div class="well-content">Popularity</div>
                    </div>
                </div>
                <div class="well wviolet">
                    <div class="well-icon">
                        <i class="fa fa-envelope-o"></i>
                    </div>
                    <div class="well-data">
                        <span class="well-data-number">3433</span>
                        <div class="well-content">Subscribers</div>
                    </div>
                </div>
                <div class="well wlime">
                    <div class="well-icon">
                        <i class="fa fa-credit-card"></i>
                    </div>
                    <div class="well-data">
                        <span class="well-data-number">$13433</span>
                        <div class="well-content">Total Profit</div>
                    </div>
                </div>
                <div class="well worange">
                    <div class="well-icon">
                        <i class="fa fa-download"></i>
                    </div>
                    <div class="well-data">
                        <span class="well-data-number">143433</span>
                        <div class="well-content">Total Downloads</div>
                    </div>
                </div>
                <div class="well wpink">
                    <div class="well-icon">
                        <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="well-data">
                        <span class="well-data-number">0.3%</span>
                        <div class="well-content">Server Downtime</div>
                    </div>
                </div>
                <div class="well wgray">
                    <div class="well-icon">
                        <i class="fa fa-file-text"></i>
                    </div>
                    <div class="well-data">
                        <span class="well-data-number">3433</span>
                        <div class="well-content">Total Tickets</div>
                    </div>
                </div>
            </div>
            <!-- Statistics ends -->
            <?php } ?>
            
            <!-- Recent comments widget -->
              <?php 
                if(Yii::$app->user->can('manageproducts') || Yii::$app->user->can('managesuppliers'))
                {
            ?>
            <div class="col-md-6">
                <!-- Widget -->
                <div class="widget wgray margin-top-0">
                    <!-- Widget title -->
                    <div class="widget-head">
                        <div class="pull-left"><i class="fa fa-comment"></i> Recent Comments</div>
                        <div class="widget-icons pull-right">
                        <?= Html::a('<i class="fa fa-chevron-up"></i>','#',array('class'=>'wminimize')) ?>
                        <?= Html::a('<i class="fa fa-times"></i>','#',array('class'=>'wclose')) ?>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="widget-content">
                        <!-- Widget content -->
                        <div class="padd">

                            <ul class="recent">


                                <li>

                                    <div class="recent-content">
                                        <div class="recent-meta">Posted on 25/1/2120 by Ashok</div>
                                        <div>Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur
                                            dapibus adipiscing elit.
                                        </div>

                                        <div class="btn-group">
                                        <?= Html::button('<i class="fa fa-check"></i>',array('class'=>'btn btn-sm btn-success')) ?>
                                        <?= Html::button('<i class="fa fa-pencil"></i>',array('class'=>'btn btn-sm btn-primary')) ?>
                                        <?= Html::button('<i class="fa fa-times"></i>',array('class'=>'btn btn-sm btn-danger')) ?>
                                        </div>

                                        <button class="btn btn-sm btn-danger pull-right">Spam</button>

                                        <div class="clearfix"></div>
                                    </div>
                                </li>


                                <li>

                                    <div class="recent-content">
                                        <div class="recent-meta">Posted on 25/1/2120 by Ashok</div>
                                        <div>Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur
                                            dapibus adipiscing elit.
                                        </div>

                                        <div class="btn-group">
                                        <?= Html::button('<i class="fa fa-check"></i>',array('class'=>'btn btn-sm btn-success')) ?>
                                        <?= Html::button('<i class="fa fa-pencil"></i>',array('class'=>'btn btn-sm btn-primary')) ?>
                                        <?= Html::button('<i class="fa fa-times"></i>',array('class'=>'btn btn-sm btn-danger')) ?>
                                        </div>

                                        <button class="btn btn-sm btn-danger pull-right">Spam</button>

                                        <div class="clearfix"></div>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>

                </div>

            </div>
            <?php } ?>
            <!-- Empty widget container -->
            <?php 
                if(Yii::$app->user->can('manageproducts') || Yii::$app->user->can('managesuppliers'))
                {
            ?>
            <div class="col-md-6">
                <!-- Widget -->
                <div class="widget wgray margin-top-0">
                    <!-- Widget title -->
                    <div class="widget-head">
                        <div class="pull-left"><i class="fa fa-tasks"></i> Tasks</div>
                        <div class="widget-icons pull-right">
                        <?= Html::a('<i class="fa fa-chevron-up"></i>','#',array('class'=>'wminimize')) ?>
                        <?= Html::a('<i class="fa fa-times"></i>','#',array('class'=>'wclose')) ?>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="widget-content">
                        <!-- Widget content -->
                        <div class="padd">

                    <ul class="recent">


                        <li>
                            <div class="avatar pull-left">
                                <img src="img/admin.png" width="40" alt=""/>
                            </div>

                            <div class="recent-content">
                                <div class="recent-meta">Posted on 06/19/2014 by ScrumMaster</div>
                                <div>Produce video Begining Y11 2.0 (4 of 15).</br></br>
                                </div>

                                <div class="btn-group">
                                <?= Html::button('<i class="fa fa-circle-o-notch fa-spin"></i>',array('class'=>'btn btn-sm btn-warning')); ?>
                                <?= Html::button('<i class="fa fa-check"></i>',array('class'=>'btn btn-sm btn-success')); ?>
                                <?= Html::button('<i class="fa fa-times"></i>',array('class'=>'btn btn-sm btn-danger')); ?>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </li>


                        <li>
                            <div class="avatar pull-left">
                                <img src="img/user.jpg" alt=""/>
                            </div>

                            <div class="recent-content">
                                <div class="recent-meta">Posted on 06/19/2014 by ScrumMaster</div>
                                <div>Create graphics for project Delta.</br></br>
                                </div>

                                <div class="btn-group">
                                <?= Html::button('<i class="fa fa-circle-o-notch fa-spin"></i>',array('class'=>'btn btn-sm btn-warning')); ?>
                                <?= Html::button('<i class="fa fa-check"></i>',array('class'=>'btn btn-sm btn-success')); ?>
                                <?= Html::button('<i class="fa fa-times"></i>',array('class'=>'btn btn-sm btn-danger')); ?>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </li>


                        <li>
                            <div class="avatar pull-left">
                                <img src="img/user.jpg" alt=""/>
                            </div>

                            <div class="recent-content">
                                <div class="recent-meta">Posted on 06/19/2014 by ScrumMaster</div>
                                <div>new logo design for project Marble Slab.</br></br>
                                </div>

                                <div class="btn-group">
                                <?= Html::button('<i class="fa fa-circle-o-notch fa-spin"></i>',array('class'=>'btn btn-sm btn-warning')); ?>
                                <?= Html::button('<i class="fa fa-check"></i>',array('class'=>'btn btn-sm btn-success')); ?>
                                <?= Html::button('<i class="fa fa-times"></i>',array('class'=>'btn btn-sm btn-danger')); ?>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </li>
                        <li>
                            <div class="avatar pull-left">
                                <img src="img/user.jpg" alt=""/>
                            </div>

                            <div class="recent-content">
                                <div class="recent-meta">Posted on 06/19/2014 by ScrumMaster</div>
                                <div>Create new print media for project Marble Slab.</br></br>
                                </div>

                                <div class="btn-group">
                                <?= Html::button('<i class="fa fa-circle-o-notch fa-spin"></i>',array('class'=>'btn btn-sm btn-warning')); ?>
                                <?= Html::button('<i class="fa fa-check"></i>',array('class'=>'btn btn-sm btn-success')); ?>
                                <?= Html::button('<i class="fa fa-times"></i>',array('class'=>'btn btn-sm btn-danger')); ?>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </li>


                    </ul>
                        
                        </div>
                    </div>

                </div>

            </div>
            <?php } ?>
            <!-- Empty colapsable container Ends -->
    </div> <!-- end row -->
</div> <!-- end col-md-12 -->
</div> <!-- End Status Row -->

<!-- Today status ends -->

<!-- Dashboard Graph starts -->
<?php 
    if(Yii::$app->user->can('manageproducts') || Yii::$app->user->can('managesuppliers'))
    {
?>
<div class="row">
    <div class="col-md-6">

        <!-- Widget -->
        <!-- Chart -->
        <div class="widget wgray">
            <!-- Widget head -->
            <div class="widget-head">
                <div class="pull-left"><i class="fa fa-bar-chart"></i> Dashboard</div>
                <div class="widget-icons pull-right">
                        <?= Html::a('<i class="fa fa-chevron-up"></i>','#',array('class'=>'wminimize')) ?>
                        <?= Html::a('<i class="fa fa-times"></i>','#',array('class'=>'wclose')) ?>
                </div>
                <div class="clearfix"></div>
            </div>

            <!-- Widget content -->
            <div class="widget-content">
                <div class="padd">

                    <!-- Bar chart (Blue color). jQuery Flot plugin used. -->
                    <div id="bar-chart"></div>


                </div>
            </div>
            <!-- Widget ends -->

        </div><!-- end widget Dashboard Barchart -->
    </div><!-- end col-md-6 -->

    <!-- curve chart -->
    <div class="col-md-6">
        <div class="widget wgray">
            <div class="widget-head">
                <div class="pull-left"><i class="fa fa-bar-chart"></i> Curve Chart</div>
                <div class="widget-icons pull-right">
                        <?= Html::a('<i class="fa fa-chevron-up"></i>','#',array('class'=>'wminimize')) ?>
                        <?= Html::a('<i class="fa fa-times"></i>','#',array('class'=>'wclose')) ?>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="widget-content">
                <div class="padd">

                    <!-- Curve chart -->

                    <div id="curve-chart"></div>

                    <hr/>
                    <!-- Hover location -->
                    <div id="hoverdata">Mouse hovers at
                        (<span id="x">0</span>, <span id="y">0</span>). <span id="clickdata"></span></div>

                    <!-- Skil this line. <div class="uni"><input id="enableTooltip" type="checkbox">Enable tooltip</div> -->

                </div>
            </div>
        </div>
    </div><!-- curve chart ends -->
</div><!-- end row -->
<?php } ?>
<?php 
    if(Yii::$app->user->can('manageproducts') || Yii::$app->user->can('managesuppliers'))
    {
?>
<div class="row">

    <!-- Chats widget -->
    <div class="col-md-6">
        <!-- Widget -->
        <div class="widget wgray">
            <!-- Widget title -->
            <div class="widget-head">
                <div class="pull-left"><i class="fa fa-bar-chart"></i> Chats</div>
                <div class="widget-icons pull-right">
                        <?= Html::a('<i class="fa fa-chevron-up"></i>','#',array('class'=>'wminimize')) ?>
                        <?= Html::a('<i class="fa fa-times"></i>','#',array('class'=>'wclose')) ?>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="widget-content">
                <!-- Widget content -->
                <div class="padd">

                    <ul class="chats">

                        <!-- Chat by us. Use the class "by-me". -->
                        <li class="by-me">
                            <!-- Use the class "pull-left" in avatar -->
                            <div class="avatar pull-left">
                                <img src="img/user.jpg" alt=""/>
                            </div>

                            <div class="chat-content">
                                <!-- In meta area, first include "name" and then "time" -->
                                <div class="chat-meta">Ashok <span class="label label-inverse pull-right">3 hours ago</span></div>
                                Vivamus diam elit diam, consectetur dapibus adipiscing elit.
                                <div class="clearfix"></div>
                            </div>
                        </li>

                        <!-- Chat by other. Use the class "by-other". -->
                        <li class="by-other">
                            <!-- Use the class "pull-right" in avatar -->
                            <div class="avatar pull-right">
                                <img src="img/user.jpg" alt=""/>
                            </div>

                            <div class="chat-content">
                                <!-- In the chat meta, first include "time" then "name" -->
                                <div class="chat-meta"><span class="label label-success"> 3 hours ago </span><span class="pull-right">Ravi</span></div>
                                Vivamus diam elit diam, consectetur fconsectetur dapibus adipiscing elit.
                                <div class="clearfix"></div>
                            </div>
                        </li>

                        <li class="by-me">
                            <div class="avatar pull-left">
                                <img src="img/user.jpg" alt=""/>
                            </div>

                            <div class="chat-content">
                                <div class="chat-meta">Ashok <span class="label label-inverse pull-right">4 hours ago</span></div>
                                Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus
                                adipiscing elit.
                                <div class="clearfix"></div>
                            </div>
                        </li>

                        <li class="by-other">
                            <!-- Use the class "pull-right" in avatar -->
                            <div class="avatar pull-right">
                                <img src="img/user.jpg" alt=""/>
                            </div>

                            <div class="chat-content">
                                <!-- In the chat meta, first include "time" then "name" -->
                                <div class="chat-meta"><span class="label label-success"> 3 hours ago </span><span class="pull-right">Ravi</span></div>
                                Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus
                                adipiscing elit.
                                <div class="clearfix"></div>
                            </div>
                        </li>

                    </ul>

                </div>
            </div><!-- end widget content -->
            <!-- Widget footer -->
            <div class="widget-foot">

                <!-- Chat input box -->
                <form class="form-inline no-margin">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Type your message">
                    </div>
                    <?= Html::button('Send',array('type'=>'submit', 'class'=>'btn btn-info')) ?>
                </form>

            </div><!-- end widget foot -->

        </div>
    </div><!-- end col-md-6 -->
    <!-- Recent posts widget -->
    <div class="col-md-6">
        <!-- Widget -->
        <div class="widget wgray">
            <!-- Widget title -->
            <div class="widget-head">
                <div class="pull-left"><i class="fa fa-refresh"></i> Recent Posts</div>
                <div class="widget-icons pull-right">
                        <?= Html::a('<i class="fa fa-chevron-up"></i>','#',array('class'=>'wminimize')) ?>
                        <?= Html::a('<i class="fa fa-times"></i>','#',array('class'=>'wclose')) ?>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="widget-content">
                <!-- Widget content -->
                <div class="padd">


                    <ul class="recent">


                        <li>
                            <div class="avatar pull-left">
                                <img src="img/user.jpg" alt=""/>
                            </div>

                            <div class="recent-content">
                                <div class="recent-meta">Posted on 25/1/2120 by Ashok</div>
                                <div>Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur
                                    dapibus adipiscing elit.
                                </div>

                                <div class="btn-group">
                                <?= Html::button('<i class="fa fa-check"></i>', array('class'=>'btn btn-sm btn-success')) ?>
                                <?= Html::button('<i class="fa fa-pencil"></i>', array('class'=>'btn btn-sm btn-primary')) ?>
                                <?= Html::button('<i class="fa fa-times"></i>', array('class'=>'btn btn-sm btn-danger')) ?>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </li>


                        <li>
                            <div class="avatar pull-left">
                                <img src="img/user.jpg" alt=""/>
                            </div>

                            <div class="recent-content">
                                <div class="recent-meta">Posted on 25/1/2120 by Ashok</div>
                                <div>Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur
                                    dapibus adipiscing elit.
                                </div>

                                <div class="btn-group">
                                <?= Html::button('<i class="fa fa-check"></i>', array('class'=>'btn btn-sm btn-success')) ?>
                                <?= Html::button('<i class="fa fa-pencil"></i>', array('class'=>'btn btn-sm btn-primary')) ?>
                                <?= Html::button('<i class="fa fa-times"></i>', array('class'=>'btn btn-sm btn-danger')) ?>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </li>


                        <li>
                            <div class="avatar pull-left">
                                <img src="img/user.jpg" alt=""/>
                            </div>

                            <div class="recent-content">
                                <div class="recent-meta">Posted on 25/1/2120 by Ashok</div>
                                <div>Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur
                                    dapibus adipiscing elit.
                                </div>

                                <div class="btn-group">
                                <?= Html::button('<i class="fa fa-check"></i>', array('class'=>'btn btn-sm btn-success')) ?>
                                <?= Html::button('<i class="fa fa-pencil"></i>', array('class'=>'btn btn-sm btn-primary')) ?>
                                <?= Html::button('<i class="fa fa-times"></i>', array('class'=>'btn btn-sm btn-danger')) ?>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </li>
                        <li>
                            <div class="avatar pull-left">
                                <img src="img/user.jpg" alt=""/>
                            </div>

                            <div class="recent-content">
                                <div class="recent-meta">Posted on 25/1/2120 by Ashok</div>
                                <div>Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur
                                    dapibus adipiscing elit.
                                </div>

                                <div class="btn-group">
                                <?= Html::button('<i class="fa fa-check"></i>', array('class'=>'btn btn-sm btn-success')) ?>
                                <?= Html::button('<i class="fa fa-pencil"></i>', array('class'=>'btn btn-sm btn-primary')) ?>
                                <?= Html::button('<i class="fa fa-times"></i><', array('class'=>'btn btn-sm btn-danger')) ?>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </li>


                    </ul>


                </div>
            </div>

            <!-- Widget footer -->
            <div class="widget-foot">


                <ul class="pagination pull-right">
                    <li><?= Html::a('Prev','#') ?></li>
                    <li><?= Html::a('1','#') ?></li>
                    <li><?= Html::a('2','#') ?></li>
                    <li><?= Html::a('3','#') ?></li>
                    <li><?= Html::a('4','#') ?></li>
                    <li><?= Html::a('5','#') ?></li>
                    <li><?= Html::a('Next','#') ?><a href="#">Next</a></li>
                </ul>

                <div class="clearfix"></div>

            </div>

        </div>
        
    </div><!-- end recent post widget -->
</div><!-- end  row  -->
<?php } ?>
</div>
</div> <!--  End Matter -->
</div> <!-- End mainbar -->
</div> <!-- End content -->
<?php 
    if(Yii::$app->user->can('manageproducts') || Yii::$app->user->can('managesuppliers'))
    {
?>
<!-- Notification box starts -->
<div class="slide-box">

    <!-- Notification box head -->
    <div class="slide-box-head">
        <!-- Title -->
        <div class="pull-left">Notification Box</div>
        <!-- Icon -->
        <div class="slide-icons pull-right">
        <?= Html::a('<i class="fa fa-chevron-down"></i>','#', array('class'=>'sminimize')) ?>
        <?= Html::a('<i class="fa fa-times"></i>','#', array('class'=>'sclose')) ?>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="slide-content">

        <!-- It is default bootstrap nav tabs. See official bootstrap doc for doubts -->
        <ul class="nav nav-tabs">
            <!-- Tab links -->
            <li class="active"><?= Html::a('<i class="fa fa-bar-chart-o"></i>','#tab1', array('data-toggle'=>'tab')) ?></li>
            <li><?= Html::a('<i class="fa fa-phone"></i>','#tab2', array('data-toggle'=>'tab')) ?></li>
            <li><?= Html::a('<i class="fa fa-comments"></i>','', array('data-toggle'=>'tab')) ?></li>
        </ul>

        <!-- Tab content -->

        <div class="tab-content">

            <div class="tab-pane active" id="tab1">

                <!-- Graph #1 -->
                <div class="slide-data">
                    <div class="slide-data-text">Today Earnings</div>
                    <div class="slide-data-result">$5,0000 <i class="fa fa-arrow-up red"></i></div>
                    <div class="clearfix"></div>
                    <hr/>
                    <span id="todayspark4" class="spark"></span>
                </div>

                <!-- Graph #2 -->
                <div class="slide-data">
                    <div class="slide-data-text">Yesterday Earnings</div>
                    <div class="slide-data-result">$4,6000 <i class="fa fa-arrow-down green"></i></div>
                    <div class="clearfix"></div>
                    <hr/>
                    <span id="todayspark5" class="spark"></span>
                </div>

            </div>

            <div class="tab-pane" id="tab2">
                <h5>Have some content here.</h5>

                <p>Aliquam dui libero, pharetra nec venenatis in, scelerisque quis odio. In hac habitasse platea
                    dictumst. Etiam porta placerat turpis, eget fermentum neque egestas at. Vestibulum ullamcorper,
                    augue a sollicitudin vestibulum, orci purus semper felis, lobortis consequat nisi nunc eu enim. </p>
            </div>

            <div class="tab-pane" id="tab3">
                <h5>Have some content here.</h5>

                <p>Aliquam dui libero, pharetra nec venenatis in, scelerisque quis odio. In hac habitasse platea
                    dictumst. Etiam porta placerat turpis, eget fermentum neque egestas at. Vestibulum ullamcorper,
                    augue a sollicitudin vestibulum, orci purus semper felis, lobortis consequat nisi nunc eu enim.</p>
            </div>

        </div>

    </div>

</div>
<?php } ?>
<!-- Notification box ends -->

<!-- Scroll to top -->
<span class="totop"><?= Html::a('<i class="fa fa-chevron-up"></i>','#') ?></span>

</div><!-- end body-content -->
</div><!-- end site-index -->
 