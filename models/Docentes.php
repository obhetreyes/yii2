<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "docentes".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $paterno
 * @property string $materno
 *
 * @property Alumnos[] $alumnos
 */
class Docentes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'docentes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'paterno'], 'required'],
            [['nombre', 'paterno', 'materno'], 'string'],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlumnos()
    {
        return $this->hasMany(Alumnos::className(), ['nu_docente' => 'id']);
    }
    public static function getAll(){
        $docentes[] = 'Seleccione la carrera';
        
        foreach (Docentes::find()->all() as $registro){
            $docentes[$registro->id] = $registro->nombre;
        }
        return $docentes;
    }
}
