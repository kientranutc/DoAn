<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Demo1;

/**
 * Demo1Search represents the model behind the search form about `backend\models\Demo1`.
 */
class Demo1Search extends Demo1
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MaT2', 'MaT1'], 'integer'],
            [['TenT2'], 'safe'],
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
        $query = Demo1::find();

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
            'MaT2' => $this->MaT2,
            'MaT1' => $this->MaT1,
        ]);

        $query->andFilterWhere(['like', 'TenT2', $this->TenT2]);

        return $dataProvider;
    }
}
