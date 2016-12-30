<?php

namespace common\models\book;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property integer $book_id
 * @property string $acquisition
 * @property string $title
 * @property string $classification
 * @property integer $carrer_carrer_id
 *
 * @property Carrer $carrerCarrer
 * @property BookAuthors[] $bookAuthors
 * @property Loan[] $loans
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'classification', 'carrer_carrer_id'], 'required'],
            [['carrer_carrer_id'], 'integer'],
            [['acquisition', 'classification'], 'string', 'max' => 40],
            [['title'], 'string', 'max' => 240],
            [['carrer_carrer_id'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\carrer\Carrer::className(), 'targetAttribute' => ['carrer_carrer_id' => 'carrer_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'book_id' => 'Id',
            'acquisition' => 'Adquisición',
            'title' => 'Título',
            'classification' => 'Clasificación',
            'carrer_carrer_id' => 'Carrera',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarrerCarrer()
    {
        return $this->hasOne(\common\models\carrer\Carrer::className(), ['carrer_id' => 'carrer_carrer_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookAuthors()
    {
        return $this->hasMany(BookAuthors::className(), ['book_book_id' => 'book_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLoans()
    {
        return $this->hasMany(Loan::className(), ['book_book_id' => 'book_id']);
    }
}
