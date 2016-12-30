<?php

namespace common\models\rules;

use Yii;

/**
 * This is the model class for table "rules_category".
 *
 * @property integer $rules_category_id
 * @property string $name
 *
 * @property Rules[] $rules
 */
class RulesCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rules_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 80],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rules_category_id' => 'Rules Category ID',
            'name' => 'Categoría',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRules()
    {
        return $this->hasMany(Rules::className(), ['rules_category_id' => 'rules_category_id']);
    }
}
