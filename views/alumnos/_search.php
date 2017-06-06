<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AlumnosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alumnos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'paterno') ?>

    <?= $form->field($model, 'materno') ?>

    <?= $form->field($model, 'edad') ?>

    <?php // echo $form->field($model, 'nu_carrera') ?>

    <?php // echo $form->field($model, 'nu_grupo') ?>

    <?php // echo $form->field($model, 'genero') ?>

    <?php // echo $form->field($model, 'semestre') ?>

    <?php // echo $form->field($model, 'nu_docente') ?>

    <?php // echo $form->field($model, 'diagnostico') ?>

    <?php // echo $form->field($model, 'nu_sesion') ?>

    <?php // echo $form->field($model, 'dirección') ?>

    <?php // echo $form->field($model, 'teléfono') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
