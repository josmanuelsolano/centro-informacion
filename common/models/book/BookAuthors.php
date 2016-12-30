<?php

namespace common\models\book;

use Yii;

/**
 * This is the model class for table "book_authors".
 *
 * @property integer $book_author_id
 * @property integer $book_book_id
 * @property integer $author_author_id
 *
 * @property Author $authorAuthor
 * @property Book $bookBook
 */
class BookAuthors extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'book_authors';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['book_book_id', 'author_author_id'], 'required'],
            [['book_book_id', 'author_author_id'], 'integer'],
            [['author_author_id'], 'exist', 'skipOnError' => true, 'targetClass' => Author::className(), 'targetAttribute' => ['author_author_id' => 'author_id']],
            [['book_book_id'], 'exist', 'skipOnError' => true, 'targetClass' => Book::className(), 'targetAttribute' => ['book_book_id' => 'book_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'book_author_id' => 'Book Author ID',
            'book_book_id' => 'Book Book ID',
            'author_author_id' => 'Author Author ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthorAuthor()
    {
        return $this->hasOne(Author::className(), ['author_id' => 'author_author_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookBook()
    {
        return $this->hasOne(Book::className(), ['book_id' => 'book_book_id']);
    }
}
