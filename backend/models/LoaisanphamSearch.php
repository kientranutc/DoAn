<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Loaisanpham;

/**
 * LoaisanphamSearch represents the model behind the search form about `backend\models\Loaisanpham`.
 */
class LoaisanphamSearch extends Loaisanpham
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MaLSP', 'Trangthai'], 'integer'],
            [['Tenloaisp', 'Mota', 'Image'], 'safe'],
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
        $query = Loaisanpham::find();

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
            'MaLSP' => $this->MaLSP,
            'Trangthai' => $this->Trangthai,
        ]);

        $query->andFilterWhere(['like', 'Tenloaisp', $this->Tenloaisp])
            ->andFilterWhere(['like', 'Mota', $this->Mota])
            ->andFilterWhere(['like', 'Image', $this->Image]);

        return $dataProvider;
    }
}
