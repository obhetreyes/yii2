<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "grupos".
 *
 * @property integer $id
 * @property string $grupo
 *
 * @property Alumnos[] $alumnos
 */
class Grupos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'grupos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['grupo'], 'required'],
            [['grupo'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'grupo' => Yii::t('app', 'Grupo'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlumnos()
    {
        return $this->hasMany(Alumnos::className(), ['nu_grupo' => 'id']);
    }
    public static function getAll(){
        $grupos[] = 'Seleccione la carrera';
        
        foreach (Grupos::find()->all() as $registro){
            $grupos[$registro->id] = $registro->nombre;
        }
        return $grupos;
    }
}
