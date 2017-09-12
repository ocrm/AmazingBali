<?php

namespace app\models\map;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\map\Map;

/**
 * MapSearch represents the model behind the search form about `app\models\map\Map`.
 */
class MapSearch extends Map
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status_id', 'zoom'], 'integer'],
            [['city', 'text'], 'safe'],
            [['x', 'y', 'lat', 'lng'], 'number'],
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
        $query = Map::find();

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
            'x' => $this->x,
            'y' => $this->y,
            'lat' => $this->lat,
            'lng' => $this->lng,
            'zoom' => $this->zoom,
            'status_id' => $this->status_id,
        ]);

        $query->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'text', $this->text]);

        return $dataProvider;
    }
}
