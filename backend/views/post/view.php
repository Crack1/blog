<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use backend\models\TblAcciones;
use kartik\widgets\Select2;
use kartik\daterange\DateRangePicker;
use kartik\mpdf\Pdf;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $model backend\models\TblOsig */

$this->title = 'Post Details';
$this->params['breadcrumbs'][] = ['label' => 'Post List', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<br />
<div class="row">
  <div class="col-md-12">
    <div class="box box-primary" style="padding:15px;">
      <div class="box-header">
        <h1><?= Html::encode($this->title) ?></h1>

        <?php echo Html::a('<i class="fa fa-edit"></i> Edit', ['update', 'id' => $model->id_post], ['class' => 'btn btn-primary']) ?>

        <?php echo Html::a('<i class="fa fa-ban"></i> Cancel', ['index'], ['class' => 'btn btn-danger', 'data-toggle'=>'tooltip', 'title'=>'Cancel']) ?>
      </div>
      <table class="table table-striped table-hover table-bordered">
        <tr>
          <td width="200px"><b>Title:</b></td>
          <td><?= $model->title; ?></td>
        </tr>
        <tr>
          <td><b>Intro Text:</b></td>
          <td><?= $model->intro; ?></td>
        </tr>
        <tr>
          <td><b>Content:</b></td>
          <td><?= $model->content; ?></td>
        </tr>
        <tr>
          <td><b>Picture:</b></td>
          <td>
            <img src="<?= Yii::$app->request->hostInfo . $model->picture ?>" width="800" />
          </td>
        </tr>
        <tr>
          <td><b>Status:</b></td>
          <td>
            <span class="badge bg-<?= $model->status==1?"green":"red"; ?>"><?= $model->status==1?"Enable":"Disable"; ?></span>
          </td>
        </tr>
        <tr>
          <td><b>Created at:</b></td>
          <td><?= $model->created_at ?></td>
        </tr>
        <tr>
          <td><b>Updated at:</b></td>
          <td><?= $model->updated_at ?></td>
        </tr>
        <tr>
          <td><b>Updated by:</b></td>
          <td><?= $model->user0->nombre .' '. $model->user0->apellido;?></td>
        </tr>
      </table>
    </div>
  </div>



</div>
