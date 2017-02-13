<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\TblPost;
use backend\models\User;
use kartik\widgets\SwitchInput;
use kartik\widgets\FileInput;


/* @var $this yii\web\View */
/* @var $model backend\models\TblOsig */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="tbl-user-create">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary" style="padding:15px;">

        <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

        <?= Html::activeLabel($model, 'title', ['label'=>'Title', 'class'=>'control-label']) ?>
        <?php echo $form->field($model, 'title', ['showLabels'=>false])->textInput(); ?>

        <?= Html::activeLabel($model, 'intro', ['label'=>'Intro Text', 'class'=>'control-label']) ?>
        <?= $form->field($model, 'intro', ['showLabels'=>false])->textarea(['rows' => 4]) ?>

        <?= Html::activeLabel($model, 'content', ['label'=>'Content', 'class'=>'control-label']) ?>
        <?= $form->field($model, 'content', ['showLabels'=>false])->textarea(['rows' => 8]) ?>

        <?= $form->field($model, 'picture')->widget(FileInput::classname(),
        ['options' => ['accept' => 'image/*'],
        'pluginOptions'=>['allowedFileExtensions'=>['jpg','gif','png'],],
      ]); ?>

      <?= Html::activeLabel($model, 'status', ['class'=>'control-label']) ?>
      <?php if ($model->isNewRecord) { $model->status = true; } ?>
      <?= $form->field($model, 'status', ['showLabels'=>false])->widget(SwitchInput::classname(), [
        'pluginOptions'=>[
          'handleWidth'=>70,
          'onColor' => 'success',
          'offColor' => 'danger',
          'onText'=>'<i class="fa fa-check"></i> Enable',
          'offText'=>'<i class="fa fa-close"></i> Disable']
        ]); ?>

      </div>
    </div>
    </div>
    <div class="box-footer">
      <?= Html::submitButton($model->isNewRecord ? 'Save' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
      <?= Html::a('Cancel', ['index'], ['class' => 'btn btn-danger']) ?>
    </div>
  </div>
</form>
<?php ActiveForm::end(); ?>
