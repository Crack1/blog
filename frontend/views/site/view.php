<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use kartik\widgets\Select2;
use kartik\daterange\DateRangePicker;
use kartik\mpdf\Pdf;
use yii\bootstrap\Modal;

$this->params['breadcrumbs'][] = ['label' => 'Blog', 'url' => ['index']];
?>

<br />
<div class="row">
  <div class="col-md-12">
    <div class="box box-primary" style="padding:15px;">
      <div class="box-header">
        <h1><?= Html::encode($model->title) ?></h1> by <?= $model->user0->nombre .' '. $model->user0->apellido;?> on <?= $model->created_at; ?>
      </div>
            <p style="text-align:center">
            <img class="img-responsive" src="<?= Yii::$app->request->hostInfo . $model->picture ?>"/>
            </p>
            <div class="box-body">
                <?= Html::encode($model->content); ?>
            </div>
    </div>
  </div>
</div>
