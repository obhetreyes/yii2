<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "alumnos".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $paterno
 * @property string $materno
 * @property integer $edad
 * @property integer $nu_carrera
 * @property integer $nu_grupo
 * @property string $genero
 * @property string $semestre
 * @property integer $nu_docente
 * @property string $diagnostico
 * @property integer $nu_sesion
 * @property string $direccion
 * @property string $telefono
 *
 * @property Carreras $nuCarrera
 * @property Docentes $nuDocente
 * @property Grupos $nuGrupo
 * @property Sesiones $nuSesion
 */
class Alumnos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'alumnos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'paterno', 'genero', 'semestre', 'diagnostico'], 'required'],
            [['nombre', 'paterno', 'materno', 'genero', 'semestre', 'diagnostico', 'direccion', 'telefono'], 'string'],
            [['edad', 'nu_carrera', 'nu_grupo', 'nu_docente', 'nu_sesion'], 'integer'],
            [['nu_carrera'], 'exist', 'skipOnError' => true, 'targetClass' => Carreras::className(), 'targetAttribute' => ['nu_carrera' => 'id']],
            [['nu_docente'], 'exist', 'skipOnError' => true, 'targetClass' => Docentes::className(), 'targetAttribute' => ['nu_docente' => 'id']],
            [['nu_grupo'], 'exist', 'skipOnError' => true, 'targetClass' => Grupos::className(), 'targetAttribute' => ['nu_grupo' => 'id']],
            [['nu_sesion'], 'exist', 'skipOnError' => true, 'targetClass' => Sesiones::className(), 'targetAttribute' => ['nu_sesion' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nombre' => Yii::t('app', 'Nombre'),
            'paterno' => Yii::t('app', 'Paterno'),
            'materno' => Yii::t('app', 'Materno'),
            'edad' => Yii::t('app', 'Edad'),
            'nu_carrera' => Yii::t('app', 'Nu Carrera'),
            'nu_grupo' => Yii::t('app', 'Nu Grupo'),
            'genero' => Yii::t('app', 'Genero'),
            'semestre' => Yii::t('app', 'Semestre'),
            'nu_docente' => Yii::t('app', 'Nu Docente'),
            'diagnostico' => Yii::t('app', 'Diagnostico'),
            'nu_sesion' => Yii::t('app', 'Nu Sesion'),
            'direccion' => Yii::t('app', 'Direccion'),
            'telefono' => Yii::t('app', 'Telefono'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNuCarrera()
    {
        return $this->hasOne(Carreras::className(), ['id' => 'nu_carrera']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNuDocente()
    {
        return $this->hasOne(Docentes::className(), ['id' => 'nu_docente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNuGrupo()
    {
        return $this->hasOne(Grupos::className(), ['id' => 'nu_grupo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNuSesion()
    {
        return $this->hasOne(Sesiones::className(), ['id' => 'nu_sesion']);
    }
}
