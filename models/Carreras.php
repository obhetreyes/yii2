<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "carreras".
 *
 * @property integer $id
 * @property string $carrera
 * @property string $semestre
 *
 * @property Alumnos[] $alumnos
 */
class Carreras extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'carreras';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['carrera', 'semestre'], 'required'],
            [['carrera', 'semestre'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'carrera' => Yii::t('app', 'Carrera'),
            'semestre' => Yii::t('app', 'Semestre'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlumnos()
    {
        return $this->hasMany(Alumnos::className(), ['nu_carrera' => 'id']);
    }

    public static function getAll(){
        $carreras[] = 'Seleccione la carrera';
        
        foreach (Carreras::find()->all() as $registro){
            $carreras[$registro->id] = $registro->nombre;
        }
        return $carreras;
    }
    
}
