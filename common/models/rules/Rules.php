<?php

namespace common\models\rules;

use Yii;

/**
 * This is the model class for table "rules".
 *
 * @property integer $rules_id
 * @property integer $rule_number
 * @property string $description
 * @property integer $rules_category_id
 *
 * @property RulesCategory $rulesCategory
 */
class Rules extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rules';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rule_number', 'description', 'rules_category_id'], 'required'],
            [['rule_number', 'rules_category_id'], 'integer'],
            [['description'], 'string'],
            [['rule_number'], 'unique'],
            [['rules_category_id'], 'exist', 'skipOnError' => true, 'targetClass' => RulesCategory::className(), 'targetAttribute' => ['rules_category_id' => 'rules_category_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rules_id' => 'Id del reglamento',
            'rule_number' => 'Número de Artículo',
            'description' => 'Descripción',
            'rules_category_id' => 'Categoría',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRulesCategory()
    {
        return $this->hasOne(RulesCategory::className(), ['rules_category_id' => 'rules_category_id']);
    }
}
