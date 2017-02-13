<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this \yii\web\View */
/* @var $content string */

dmstr\web\AdminLteAsset::register($this);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Yii2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>Blog</b> Yii2
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">WELCOME</p>

    <div class="site-login">
        <h1><?= Html::encode($this->title) ?></h1>
        <div class="row">
            <div class="col-lg-12">
                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                <div class="form-group">
                  <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                </div>
                <div class="form-group">
                  <?= $form->field($model, 'password')->passwordInput() ?>
                </div>
                    <div class="form-group">
                        <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
  </div>
  <!-- /.login-box-body -->
</div><!-- /.login-box -->

</body>
</html>
