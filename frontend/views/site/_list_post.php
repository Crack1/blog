<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
    <h1 class="title">
    <?= Html::a(Html::encode($model->title), Url::toRoute(['view', 'id' => $model->id_post]), ['title' => $model->title]) ?>
  </h1>
    <div class="user-block">
    <span class="small">by <?= $model->user0->nombre .' '. $model->user0->apellido;?> on <?= $model->created_at; ?></span>
    </div>

      <p style="text-align:center">
      <img class="img-responsive" src="<?= Yii::$app->request->hostInfo . $model->picture ?>"  />
      </p>
<div class="box-body">
    <?= Html::encode($model->intro); ?>
</div>
