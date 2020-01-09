<?php

namespace kouosl\oneri\controllers\frontend;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\oneri\models\oner;

/**
 * SeaSearch represents the model behind the search form of `kouosl\oneri\models\oner`.
 */
class SeaSearch extends oner
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'userid', 'puan'], 'integer'],
            [['filmisim', 'tur1', 'tur2', 'yorum'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = oner::find();

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
            'userid' => $this->userid,
            'puan' => $this->puan,
        ]);

        $query->andFilterWhere(['like', 'filmisim', $this->filmisim])
            ->andFilterWhere(['like', 'tur1', $this->tur1])
            ->andFilterWhere(['like', 'tur2', $this->tur2])
            ->andFilterWhere(['like', 'yorum', $this->yorum]);

        return $dataProvider;
    }
}