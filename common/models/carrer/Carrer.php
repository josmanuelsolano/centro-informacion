<?php

namespace common\models\carrer;

use Yii;

/**
 * This is the model class for table "carrer".
 *
 * @property integer $carrer_id
 * @property string $name
 *
 * @property Book[] $books
 */
class Carrer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'carrer';
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
            'carrer_id' => 'Id',
            'name' => 'Carrera',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasMany(Book::className(), ['carrer_carrer_id' => 'carrer_id']);
    }
}
