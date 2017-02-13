<?php

Yii::$app->language = 'es_ES';
use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\mpdf\Pdf;
use backend\models\TblPost;
use yii\web\JsExpression;
use yii\bootstrap\Modal;
use yii\widgets\Pjax;

$this->title = 'BLOG - DASHBOARD';

?>

<div class="col-md-12">
  <h1>BLOG <small>Dashboard</small></h1>
</div>
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3><?= $TotalPost; ?></h3>
          <p>Posts</p>
        </div>
        <div class="icon">
          <i class="fa fa-book"></i>
        </div>
        <a href="index.php?r=post%2Findex" class="small-box-footer">Details <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <!-- <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-green">
        <div class="inner">
          <h3><?php //$TotalCategories; ?></h3>
          <p>Categories</p>
        </div>
        <div class="icon">
          <i class="fa fa-book"></i>
        </div>
        <a href="index.php?r=categories%2Findex" class="small-box-footer">Details <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div> -->
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3><?= $TotalUsers; ?></h3>
          <p>Users</p>
        </div>
        <div class="icon">
          <i class="fa fa-users"></i>
        </div>
        <a href="index.php?r=user%2Findex" class="small-box-footer">Details <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>
