<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Grupos */

$this->title = Yii::t('app', 'Create Grupos');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Grupos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="grupos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
