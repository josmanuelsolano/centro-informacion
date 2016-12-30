<?php

namespace common\models\loan;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\loan\Loan;

/**
 * LoanSearch represents the model behind the search form of `common\models\loan\Loan`.
 */
class LoanSearch extends Loan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['loan_id', 'book_book_id', 'status_status_id'], 'integer'],
            [['borrowed_control', 'borrowed_date', 'delivery_date'], 'safe'],
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
        $query = Loan::find();

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
            'loan_id' => $this->loan_id,
            'borrowed_date' => $this->borrowed_date,
            'book_book_id' => $this->book_book_id,
            'status_status_id' => $this->status_status_id,
        ]);

        $query->andFilterWhere(['like', 'borrowed_control', $this->borrowed_control])
            ->andFilterWhere(['like', 'delivery_date', $this->delivery_date]);

        return $dataProvider;
    }
}
