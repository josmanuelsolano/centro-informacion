<?php

namespace common\models\loan;

use Yii;

/**
 * This is the model class for table "loan".
 *
 * @property integer $loan_id
 * @property string $borrowed_control
 * @property string $borrowed_date
 * @property string $delivery_date
 * @property integer $book_book_id
 * @property integer $status_status_id
 *
 * @property Book $bookBook
 * @property Status $statusStatus
 */
class Loan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'loan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['borrowed_control', 'borrowed_date', 'book_book_id', 'status_status_id'], 'required'],
            [['borrowed_date'], 'safe'],
            [['book_book_id', 'status_status_id'], 'integer'],
            [['borrowed_control'], 'string', 'max' => 16],
            [['delivery_date'], 'string', 'max' => 45],
            [['book_book_id'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\book\Book::className(), 'targetAttribute' => ['book_book_id' => 'book_id']],
            [['status_status_id'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\status\Status::className(), 'targetAttribute' => ['status_status_id' => 'status_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'loan_id' => 'Loan ID',
            'borrowed_control' => 'Borrowed Control',
            'borrowed_date' => 'Borrowed Date',
            'delivery_date' => 'Delivery Date',
            'book_book_id' => 'Book Book ID',
            'status_status_id' => 'Status Status ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookBook()
    {
        return $this->hasOne(\common\models\book\Book::className(), ['book_id' => 'book_book_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatusStatus()
    {
        return $this->hasOne(\common\models\status\Status::className(), ['status_id' => 'status_status_id']);
    }
}
