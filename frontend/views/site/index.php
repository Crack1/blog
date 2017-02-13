<?php
use yii\helpers\Html;
use yii\web\JsExpression;
use yii\bootstrap\Modal;
use yii\widgets\Pjax;
use yii\widgets\ListView;
?>
<br />
<div class="row">
  <div class="col-md-12">
    <div class="box box-primary" style="padding:15px;">
    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'summary'=>'',
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
                  return $this->render('_list_post',['model' => $model]);
            //return Html::a(Html::encode($model->title), ['view', 'id' => $model->id_post]);
        },
    ]) ?>
</div>
</div>
</div>
