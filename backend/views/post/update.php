<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TblCasos */

$this->title = 'Edit product ';
$this->params['breadcrumbs'][] = ['label' => 'Product List', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Details', 'url' => ['view', 'id' => $model->id_post]];
$this->params['breadcrumbs'][] = 'Edit Product';
?>
<div class="tbl-casos-update">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= $this->render('_form', [
        'model' => $model,        
    ]) ?>

</div>
