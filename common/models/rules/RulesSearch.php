<?php

namespace common\models\rules;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\rules\Rules;

/**
 * RulesSearch represents the model behind the search form of `common\models\rules\Rules`.
 */
class RulesSearch extends Rules
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rules_id', 'rule_number', 'rules_category_id'], 'integer'],
            [['description'], 'safe'],
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
        $query = Rules::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'rules_id' => $this->rules_id,
            'rule_number' => $this->rule_number,
            'rules_category_id' => $this->rules_category_id,
        ]);

        $query->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
