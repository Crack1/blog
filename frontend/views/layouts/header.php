<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

  <?= Html::a('<img src="logo.png" class="logo-lg" align="center" height="50px"' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

  <nav class="navbar navbar-static-top" role="navigation">

<div class="navbar-custom-title">
  Yii2 Blog
</div>


<div class="navbar-custom-menu">
  <ul class="nav navbar-nav">
          <!-- Menu Body -->
          <!-- <li class="user-body">
          <div class="col-xs-4 text-center">
          <a href="#">Followers</a>
        </div>
        <div class="col-xs-4 text-center">
        <a href="#">Sales</a>
      </div>
      <div class="col-xs-4 text-center">
      <a href="#">Friends</a>
    </div>
  </li> -->
  <!-- Menu Footer-->

</ul>


<!-- User Account: style can be found in dropdown.less -->

</div>
</nav>
</header>
