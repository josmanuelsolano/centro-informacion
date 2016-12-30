<?php

namespace common\models\book;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\book\Book;

/**
 * BookSearch represents the model behind the search form of `common\models\book\Book`.
 */
class BookSearch extends Book
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['book_id'], 'integer'],
            [['acquisition', 'title', 'classification', 'carrer_carrer_id'], 'safe'],
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
        $query = Book::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 25,
            ],
        ]);

        $query->joinWith('carrerCarrer');

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'book_id' => $this->book_id,
        ]);

        $query->andFilterWhere(['like', 'acquisition', $this->acquisition])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'classification', $this->classification])
            ->andFilterWhere(['like', 'carrer.name', $this->carrer_carrer_id]);

        return $dataProvider;
    }
}
