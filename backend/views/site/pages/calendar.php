<?php
use yii\helpers\Html;
use backend\assets\CalendarAsset;
/**
 * @var yii\web\View $this
 */
$this->title = 'Calendar';

// register javascript and css for this page
CalendarAsset::register($this);


?>

    <!-- Main bar -->
    <div class="mainbar">

        <!-- Page heading -->
        <div class="page-head">
            <!-- Breadcrumb -->
            <div class="bread-crumb">
                <a href="index.html"><i class="icon-home"></i></a>
                <!-- Divider -->
                <i class="icon-angle-right"></i>
                <a href="#">Pages #1</a>
                <i class="icon-angle-right"></i>
                <a href="#" class="bread-current">Calendar</a>
            </div>

            <!-- Page heading -->
            <h3 class="content-heading">Calendar</h3>

            <div class="clearfix"></div>

        </div>
        <!-- Page heading ends -->


        <!-- Matter -->

        <div class="matter">
            <div class="container">

                <div class="row">

                    <div class="col-md-12">

                        <!-- Below line produces calendar. I am using FullCalendar plugin. -->
                        <div id="calendar"></div>

                    </div>

                </div>

            </div>
        </div>

        <!-- Matter ends -->

    </div>

    <!-- Mainbar ends -->
<!-- Content ends -->