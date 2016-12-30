<?php

namespace common\models\acquisition;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\acquisition\Acquisition;

/**
 * AcquisitionSearch represents the model behind the search form of `common\models\acquisition\Acquisition`.
 */
class AcquisitionSearch extends Acquisition
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['acquisition_format_id'], 'integer'],
            [['name', 'request_date', 'academic_program', 'email'], 'safe'],
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
        $query = Acquisition::find();

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
            'acquisition_format_id' => $this->acquisition_format_id,
            'request_date' => $this->request_date,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'academic_program', $this->academic_program])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
