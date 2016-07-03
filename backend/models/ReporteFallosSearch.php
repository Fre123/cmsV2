<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ReporteFallos;

/**
 * ReporteFallosSearch represents the model behind the search form about `backend\models\ReporteFallos`.
 */
class ReporteFallosSearch extends ReporteFallos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_USER', 'ESTADO', 'ID_COPIADORA'], 'integer'],
            [['CEDULA_USER', 'ID_REPORTE', 'NOVEDADES'], 'safe'],
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
        $query = ReporteFallos::find();

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
            'ID_USER' => $this->ID_USER,
            'ESTADO' => $this->ESTADO,
            'ID_COPIADORA' => $this->ID_COPIADORA,
        ]);

        $query->andFilterWhere(['like', 'CEDULA_USER', $this->CEDULA_USER])
            ->andFilterWhere(['like', 'ID_REPORTE', $this->ID_REPORTE])
            ->andFilterWhere(['like', 'NOVEDADES', $this->NOVEDADES]);

        return $dataProvider;
    }
}
