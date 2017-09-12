<?php

namespace app\models\projects;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\projects\Projects;

/**
 * ProjectsSearch represents the model behind the search form about `app\models\projects\Projects`.
 */
class ProjectsSearch extends Projects
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'slug_id', 'status'], 'integer'],
            [['meta_title', 'meta_keywords', 'meta_description', 'data', 'title'], 'safe'],
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
        $query = Projects::find();

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
            'slug_id' => $this->slug_id,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'meta_title', $this->meta_title])
            ->andFilterWhere(['like', 'meta_keywords', $this->meta_keywords])
            ->andFilterWhere(['like', 'meta_description', $this->meta_description])
            ->andFilterWhere(['like', 'data', $this->data])
            ->andFilterWhere(['like', 'preview_img', $this->preview_img])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'photo_1', $this->photo_1])
            ->andFilterWhere(['like', 'photo_2', $this->photo_2])
            ->andFilterWhere(['like', 'photo_3', $this->photo_3])
            ->andFilterWhere(['like', 'photo_4', $this->photo_4]);

        return $dataProvider;
    }
}
