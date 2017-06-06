<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sesiones */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Sesiones',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sesiones'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="sesiones-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
