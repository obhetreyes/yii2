<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sesiones".
 *
 * @property integer $id
 * @property string $sesión
 *
 * @property Alumnos[] $alumnos
 */
class Sesiones extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sesiones';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sesion'], 'required'],
            [['sesion'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'sesion' => Yii::t('app', 'Sesion'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlumnos()
    {
        return $this->hasMany(Alumnos::className(), ['nu_sesion' => 'id']);
    }
    public static function getAll(){
        $sesiones[] = 'Seleccione la carrera';
        
        foreach (Sesiones::find()->all() as $registro){
            $sesiones[$registro->id] = $registro->nombre;
        }
        return $sesiones;
    }
}
