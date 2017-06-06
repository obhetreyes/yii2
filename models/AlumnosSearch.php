<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Alumnos;

/**
 * AlumnosSearch represents the model behind the search form about `app\models\Alumnos`.
 */
class AlumnosSearch extends Alumnos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'edad', 'nu_carrera', 'nu_grupo', 'nu_docente', 'nu_sesion'], 'integer'],
            [['nombre', 'paterno', 'materno', 'genero', 'semestre', 'diagnostico', 'direccion', 'telefono'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Alumnos::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'edad' => $this->edad,
            'nu_carrera' => $this->nu_carrera,
            'nu_grupo' => $this->nu_grupo,
            'nu_docente' => $this->nu_docente,
            'nu_sesion' => $this->nu_sesion,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'paterno', $this->paterno])
            ->andFilterWhere(['like', 'materno', $this->materno])
            ->andFilterWhere(['like', 'genero', $this->genero])
            ->andFilterWhere(['like', 'semestre', $this->semestre])
            ->andFilterWhere(['like', 'diagnostico', $this->diagnostico])
            ->andFilterWhere(['like', 'direccion', $this->direccion])
            ->andFilterWhere(['like', 'telefono', $this->telefono]);

        return $dataProvider;
    }
}
