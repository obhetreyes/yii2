<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Sesiones */

$this->title = Yii::t('app', 'Create Sesiones');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sesiones'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sesiones-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
