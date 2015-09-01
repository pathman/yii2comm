<?php
use yii\helpers\Html;
use backend\assets\ProfileAsset;
use yii\helpers\ArrayHelper;
/**
 * @var yii\web\View $this
 */
$this->title = 'My Profile';

ProfileAsset::register($this);

//echo '<pre>';
//print_r($socials);
//echo '</pre>';

$id = Yii::$app->user->id;
$uid = $rows['id'];
$username = $rows['username'];
$email = $rows['email'];

$edit = false;
if($uid == $id) $edit = true;
?>

<div class="site-index">

    <div class="body-content">

<!-- Main content starts -->

<div class="content">

<!-- Sidebar -->
<div class="sidebar">
    <div class="sidebar-dropdown"><a href="#">Navigation</a></div>

    <div class="sidebar-inner">


        <!-- Search form -->
        <form id="sidebar-search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search">
                <?php echo Html::button('<i class="fa fa-search"></i>'); ?>
            </div>
        </form>

        <!--- Sidebar navigation -->
        <!-- If the main navigation has sub navigation, then add the class "has_submenu" to "li" of main navigation. -->
        <ul class="navi">

            <!-- Use the class nred, ngreen,,, or norange to add background color. You need to use this in <li> tag. -->

            <li class="current"><?php echo Html::a('<i class="fa fa-desktop"></i> Dashboard','#'); ?></li>

            <?php 
                if(Yii::$app->user->can('manageproducts') || Yii::$app->user->can('managesuppliers'))
                {
            ?>
            <!-- Menu with sub menu -->
            <li class="has_submenu">
                <?php echo Html::a('<i class="fa fa-th-list"></i> Widgets<span class="pull-right">2</span>','#'); ?>
                <ul>
                    <li><?php echo Html::a('Widgets #1','widgets1.html'); ?></li>
                    <li><?php echo Html::a('Widgets #2','widgets2.html'); ?></li>
                </ul>
            </li>
            <?php } ?>
            <?php 
                if(Yii::$app->user->can('manageproducts') || Yii::$app->user->can('managesuppliers'))
                {
            ?>
            <li><?php echo Html::a('<i class="fa fa-bar-chart-o"></i> Charts','index.php?r=site/static&view=charts'); ?></li>
            <?php } ?>
            <?php 
                if(Yii::$app->user->can('manageproducts') || Yii::$app->user->can('managesuppliers'))
                {
            ?>
            <li><?php echo Html::a('<i class="fa fa-sitemap"></i> UI Elements','index.php?r=site/static&view=ui'); ?></li>
            <?php } ?>
            <?php 
                if(Yii::$app->user->can('manageproducts') || Yii::$app->user->can('managesuppliers'))
                {
            ?>
            <li class="has_submenu">
                <?php echo Html::a('<i class="fa fa-file-alt"></i> Pages #1<span class="pull-right">7</span>','#'); ?>

                <ul>
                    <li><?php echo Html::a('Calendar','index.php/?r=site/static&view=calendar')?></li>
                    <li><?php echo Html::a('Make Post','index.php/?r=site/static&view=post');?></li>
                    <li><?php echo Html::a('Login','index.php/?r=site/login');?></li>
                    <li><?php echo Html::a('Register','index.php/?r=site/static&view=register');?></li>
                    <li><?php echo Html::a('Statement','index.php/?r=site/static&view=chat');?></li>
                    <li><?php echo Html::a('Error Log','index.php/?r=site/static&view=error-log');?></li>
                    <li><?php echo Html::a('Support','index.php/?r=site/static&view=support');?></li>
                </ul>
            </li>
            <?php }  ?>
            <?php 
                if(Yii::$app->user->can('manageproducts') || Yii::$app->user->can('managesuppliers'))
                {
            ?>
            <li class="has_submenu">
            <?php echo Html::a('<i class="fa fa-file-alt"></i> Pages #2<span class="pull-right">6</span>','#') ?>
                <ul>
                    <li><?php echo Html::a('Error','?r=site/error') ?></li>
                    <li><?php echo Html::a('Gallery','index.php?r=site/gallery') ?></li>
                    <li><?php echo Html::a('Grid','index.php?r=site/static&view=grid') ?></li>
                    <li><?php echo Html::a('Invoice','index.php?r=site/static&view=invoice') ?></li>
                    <li><?php echo Html::a('Media','index.php?r=site/static&view=media') ?></li>
                    <li><?php echo Html::a('Profile','index.php?r=site/profile') ?></li>    
                </u2l>
            </li>
            <?php } ?>
            <?php 
                if(Yii::$app->user->can('manageproducts') || Yii::$app->user->can('managesuppliers'))
                {
            ?>
            <li><?= Html::a('<i class="fa fa-list"></i> Forms','index.php?r=site/static&view=forms') ?></li>
            <?php } ?>
            <?php 
                if(Yii::$app->user->can('manageproducts') || Yii::$app->user->can('managesuppliers'))
                {
            ?>
            <li><?= Html::a('<i class="fa fa-table"></i> Tables','index.php?r=site/static&view=tables','')?></li>
            <?php } ?>
        </ul>       

    </div>

</div>

<!-- Sidebar ends -->

<!-- Main bar -->
<div class="mainbar">

<!-- Page heading -->
<div class="page-head">
    <!-- Breadcrumb -->
    <div class="bread-crumb">
    <?= Html::a('<i class="fa fa-home"></i>','index.php?r=site/index'); ?>
        <!-- Divider -->
        <?= Html::a(' <i class="fa fa-angle-right"></i> Profile','#',['class'=>'bread-current']); ?>
    </div>

    <!-- Page heading -->
    <h3 class="content-heading">
        <i class="fa fa-user"></i>
        <?php 
            echo strtoupper($username);
        ?>
        <small>Developer</small> 
        <?php if($edit == true) echo Html::a('<i class="fa fa-pencil"></i>', '#', ['title'=>'edit profile']); ?>
    </h3>
    
    

    <div class="clearfix"></div>

</div>
<!-- Page heading ends -->


<!-- Matter -->

<div class="matter">
<div class="container">

<div class="row">

<div class="col-md-3">
    <div class="text-center">
        <img class="img-responsive" alt="image" src="img/admin.png" width="40%">
    </div>
    <div class="list-group">
    <?= Html::a('<i class="fa fa-coffee"></i>My Portfolio', 'index.php?r=site/static&view=portfolio&id='. $uid, array('class'=>'list-group-item'));  ?>
    <?= Html::a('<i class="fa fa-paperclip"></i>Projects','index.php?r=site/static&view=projects&id='. $uid,array('class'=>'list-group-item')); ?> 
    <?= Html::a('<i class="fa fa-picture-o"></i>Gallery','index.php?r=site/gallery&id='. $uid,array('class'=>'list-group-item')); ?>
    </div>
    <?php 
        foreach($socials as $social)
        {
            if($social['id'] == $uid)
            {
    ?>
    
    <div class="list-group">        
        <!-- Follow on G+ -->
        <?php if($social['google'] !== '') echo Html::a('<i class="fa fa-share"></i> Follow on G+',$social['google'],array('class'=>'list-group-item')); ?>
        <!-- follow on twitter -->
        <?php if($social['twitter'] !== '') echo Html::a('<i class="fa fa-share"></i> Follow on twitter',$social['twitter'],array('class'=>'list-group-item')); ?>
        <!-- mailto link -->
        <?php echo Html::a('<i class="fa fa-envelope-o"></i> Send Message','mailto://'. $email, array('class'=>'list-group-item')); ?>
    </div>
    
    <div class="list-group">
        <?php if($social['facebook'] !== '') echo Html::a('<i class="fa fa-facebook"></i> Facebook', $social['facebook'], array('target'=>'_blank', 'class'=>'list-group-item')); ?>
        <?php if($social['twitter'] !== '') echo Html::a('<i class="fa fa-twitter"></i> Twitter', $social['twitter'], array('target'=>'_blank', 'class'=>'list-group-item')); ?>
        <?php if($social['google'] !== '') echo Html::a('<i class=" fa fa-google-plus"></i> Google+', $social['google'], array('class'=>'list-group-item', 'target'=>'_blank')); ?>
        <?php if($social['linkedin'] !== '') echo Html::a('<i class="fa fa-linkedin"></i> LinkedIn', $social['linkedin'], array('class'=>'list-group-item', 'target'=>'_blank')); ?>
        <?php if($social['pintrest'] !== '') echo Html::a('<i class="fa fa-pintrest"></i> Pintrest', $social['pintrest'], array('class'=>'list-group-item', 'target'=>'_blank')); ?>
        <?php if($social['git'] !== '') echo Html::a('<i class="fa fa-git"></i> Github',$social['git'], array('class'=>'list-group-item', 'target'=>'_blank')); ?>
        <?php if($social['tumblr'] !== '') echo Html::a('<i class="fa fa-tumblr"></i> Tumblr',$social['tumblr'], array('class'=>'list-group-item', 'target'=>'_blank')); ?>
        <?php if($social['instagram'] !== '') echo Html::a('<i class="fa fa-tumblr"></i> Instagram',$social['instagram'], array('class'=>'list-group-item', 'target'=>'_blank')); ?> 
    </div>
    <?php 
        }
    }
    ?>
</div>

<div class="col-md-6">
    <h4>Experience</h4>
    <ul class="icons-ul push">
    <?php 
        foreach($companies as $item)
        {
            $name = $item['name'];
            $desc = $item['description'];
            $link  = $item['link'];
    ?>
        <li>
            <i class="fa fa-li fa-arrow-right"></i>
            <strong><?= $name ?></strong>,
            <br>
            <em><?= $desc ?></em>
            <br>
            <?php echo Html::a($link,'http://'. $link, array('target'=>'_blank')) ?>
        </li>
    <?php } ?>
    </ul>
    <h4>About</h4>
    
    <p class="push">Our founder, lead developer and Admin is Tom King. Tom has been in the IT game 
    for more than 20 years. He got his start in IT while working at Motorola in 
    Austin, TX. After leaving Motorola Tom went into the web development 
    consulting field full time. He now takes on engagements that really peak his 
    interest. Most of the time he is sitting in his home office writing code and 
    producing tutorial videos for his YouTube channel.</p>
    <h4>
        <i class="fa fa-book"></i>
        Address
    </h4>
    <address>
        <strong>TSKMatrix</strong>
        <br>
        Street 000
        <br>
        Houston, TX 77070
        <br>
        <abbr title="Phone">P:</abbr>
        (713) 555-5555
    </address>
    
    <h4>Favorite Quote</h4>
    <blockquote>
        <p><i class="fa fa-quote-left"></i> It's not just Iraq. It's Libya. It's Egypt. It's Syria. 
        The spread of terrorism has increased exponentially under this president's leadership. 
        After the last election, I said that I hoped the president would seize this moment and take the lead, 
        and here we are a year and a half later. You look at this presidency, and you can't help but get the 
        sense that the wheels are coming off. <i class="fa fa-quote-right"></i></p>
        <small>
            John Boehner
            <cite title="Source Title"> &ndash; House Speaker 2014</cite>
        </small>
    </blockquote>
</div>

<div class="col-md-3">
    <h5 class="page-header-sub">Actions</h5>

    <div class="btn-group push">
    <?= Html::a(Html::button('<i class="fa fa-plus"></i>Hire now!', array('class'=>'btn btn-success', 'data-toggle'=>'tooltip','data-original-title'=>'Ask for a quote')),'index.php?r=site/index'); ?>
    <?= Html::a(Html::button('<i class="fa fa-envelope"></i>', array('class'=>'btn btn-info', 'data-toggle'=>'tooltip','data-original-title'=>'Send a message')),'index.php?r=site/index'); ?>
    </div>
    <div class="btn-group push">
    <?= Html::a(Html::button('<i class="fa fa-star"></i>', array('class'=>'btn btn-danger','data-toggle'=>'tooltip','data-original-title'=>'Add to favorites')),'#'); ?>
    <?= Html::a(Html::button('<i class="fa fa-share"></i>', array('class'=>'btn btn-warning','data-toggle'=>'tooltip','data-original-title'=>'Follow')),'#'); ?>
    <?= Html::a(Html::button('<i class="fa fa-share-alt"></i>', array('class'=>'btn btn-primary','data-toggle'=>'tooltip','data-original-title'=>'Share Profile')),'#'); ?>
    </div>
    <h5 class="page-header-sub">
        <i class="fa fa-bolt"></i>
        Current Status
    </h5>

    <div class="alert alert-success">
        <i class="fa fa-ok-sign"></i>
        Available for hire
    </div>
    <h5 class="page-header-sub">
        <i class="fa-certificate"></i>
        Skills
    </h5>
    <table class="table table-borderless">
        <tbody>
        <tr>
            <td class="cell-small">
                <span class="label label-inverse">HTML</span>
            </td>
            <td>
                <div class="progress progress-striped active progress-mini">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="100"
                         aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                        <span class="sr-only">80% Complete</span>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <span class="label label-inverse">CSS</span>
            </td>
            <td>
                <div class="progress progress-mini">
                    <div class="progress-bar progress-bar-info" style="width: 70%"></div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <span class="label label-inverse">Javascript</span>
            </td>
            <td>
                <div class="progress progress-mini">
                    <div class="progress-bar progress-bar-success" style="width: 100%"></div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <span class="label label-inverse">PHP</span>
            </td>
            <td>
                <div class="progress progress-mini">
                    <div class="progress-bar progress-bar-success" style="width: 100%"></div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <span class="label label-inverse">Yii</span>
            </td>
            <td>
                <div class="progress progress-mini">
                    <div class="progress-bar progress-bar-info" style="width: 90%"></div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <span class="label label-inverse">Photoshop</span>
            </td>
            <td>
                <div class="progress progress-mini">
                    <div class="progress-bar progress-bar-info" style="width: 60%"></div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <span class="label label-inverse">Node.js</span>
            </td>
            <td>
                <div class="progress progress-mini">
                    <div class="progress-bar progress-bar-warning" style="width: 45%"></div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <span class="label label-inverse">Java</span>
            </td>
            <td>
                <div class="progress progress-mini">
                    <div class="progress-bar progress-bar-danger" style="width: 40%"></div>
                </div>
            </td>
        </tr>
        </tbody>
        <!-- data passed in by controller -->
    </table>
    <h5 class="page-header-sub">
        <i class="fa fa-flag"></i>
        Featured Projects
    </h5>
    <ul class="icons-ul">
        <li>
            <i class="fa fa-li fa-angle-right"></i>
            <strong>Project #1</strong>,
            <?php echo Html::a('exampleproject1.com','#'); ?>
        </li>
        <li>
            <i class="fa fa-li fa-angle-right"></i>
            <strong>Project #2</strong>
            ,
            <?php echo Html::a('exampleproject2.com','#'); ?>
        </li>
        <li>
            <i class="fa fa-li fa-angle-right"></i>
            <strong>Project #3</strong>,
            <?php echo Html::a('exampleproject3.com','#'); ?>
        </li>
        <li>
            <i class="fa fa-li fa-angle-right"></i>
            <strong>Project #4</strong>,
            <?php echo Html::a('exampleproject4.com','#'); ?>
        </li>
        <li>
            <i class="fa fa-li fa-angle-right"></i>
            <strong>Project #5</strong>,
            <?php echo Html::a('exampleproject5.com','#'); ?>
        </li>
        <li>
            <i class="fa fa-li fa-angle-right"></i>
            <strong>Project #6</strong>,
            <?php echo Html::a('exampleproject6.com','#'); ?>
        </li>
    </ul>
</div>

</div>

</div>
</div>

<!-- Matter ends -->

</div><!-- End Main bar -->
</div><!-- Main content ends -->
</div>
</div>