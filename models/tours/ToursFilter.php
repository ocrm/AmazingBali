<?php

namespace app\models\tours;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\tours\Tours;
use app\models\Status;

/**
 * ToursSearch represents the model behind the search form about `app\models\tours\Tours`.
 */
class ToursFilter extends Tours
{
    /**
     * @inheritdoc
     */

    public $sort;

    public function rules()
    {
        return [
            [['type_id', 'destination_id', 'new_price', 'sort'], 'safe'],
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
    public function filter($params)
    {
        $query = Tours::find()->andFilterWhere(['status_id' => Status::STATUS_ACTIVE]);

        $this->load($params);

        if (!$this->validate()) {

            return $query;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'destination_id' => $this->destination_id,
        ]);

        if ($this->type_id) {
            foreach ($this->type_id as $type) {
                $query->andWhere('FIND_IN_SET("' . $type . '",`tours`.`type_id`)');
            }
            //$query->andWhere('FIND_IN_SET("' . $type . '",`tours`.`type_id`)');
        }
        $query->andFilterWhere(['between', 'new_price', $this->new_price[0], $this->new_price[1]]);

        if($this->sort == 'newest'){

            $query->orderBy(['id' => SORT_DESC]);
            
        }elseif ($this->sort == 'popularity'){

            $query->orderBy(['stars' => SORT_DESC]);
            
        }else{
            
            $query->orderBy(['sort' => SORT_DE]);
            
        }

        return $query;
    }
}
