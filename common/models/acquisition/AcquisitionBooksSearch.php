<?php

namespace common\models\acquisition;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\acquisition\AcquisitionBooks;

/**
 * AcquisitionBooksSearch represents the model behind the search form of `common\models\acquisition\AcquisitionBooks`.
 */
class AcquisitionBooksSearch extends AcquisitionBooks
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['acquisition_books_id','acquisition_format_id', 'quantity'], 'integer'],
            [['title', 'author_name','publishing_house', 'edition', 'publishing_year', 'another_material'], 'safe'],
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
        $query = AcquisitionBooks::find();

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
            'acquisition_books_id' => $this->acquisition_books_id,
            'quantity' => $this->quantity,
            'acquisition_format_id' => $this->acquisition_format_id,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'author_name', $this->author_name])
            ->andFilterWhere(['like', 'publishing_house', $this->publishing_house])
            ->andFilterWhere(['like', 'edition', $this->edition])
            ->andFilterWhere(['like', 'publishing_year', $this->publishing_year])
            ->andFilterWhere(['like', 'another_material', $this->another_material]);

        return $dataProvider;
    }
}
