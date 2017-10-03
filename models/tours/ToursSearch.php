<?php

namespace app\models\tours;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\tours\Tours;

/**
 * ToursSearch represents the model behind the search form about `app\models\tours\Tours`.
 */
class ToursSearch extends Tours
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status_id'], 'integer'],
            [['meta_title', 'meta_keywords', 'meta_description', 'title'], 'safe'],
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
        $query = Tours::find()->orderBy(['sort' => SORT_DESC]);

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
            'status_id' => $this->status_id,
        ]);

        $query->andFilterWhere(['like', 'meta_title', $this->meta_title])
            ->andFilterWhere(['like', 'meta_keywords', $this->meta_keywords])
            ->andFilterWhere(['like', 'meta_description', $this->meta_description])
            ->andFilterWhere(['like', 'title', $this->title]);

        return $dataProvider;
    }
}
