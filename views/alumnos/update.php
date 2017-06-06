<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Alumnos */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Alumnos',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Alumnos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="alumnos-update">

    <h1><FONT SIZE=5 COLOR=white><?= Html::encode($this->title) ?><FONT SIZE=4 COLOR=gray></h1>

    <?= $this->render('_form', [
        'model' => $model,'carreras' => $carreras,'docentes' => $docentes,'grupos' => $grupos,'sesiones' => $sesiones,
    ]) ?>

</div>
