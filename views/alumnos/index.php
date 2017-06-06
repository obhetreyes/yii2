<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\AlumnosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Alumnos');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alumnos-index">
<body background="http://k38.kn3.net/75103A388.jpg">

    <h1><FONT SIZE=5 COLOR=white><?= Html::encode($this->title) ?><FONT SIZE=4 COLOR=gray></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Alumnos'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'nombre:ntext',
            'paterno:ntext',
            'materno:ntext',
            'edad',
            //'nu_carrera',
            //'nu_grupo',
            //'genero:ntext',
            //'semestre:ntext',
            //'nu_docente',
            //'diagnostico:ntext',
            //'nu_sesion',
            //'dirección:ntext',
            //'teléfono:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
