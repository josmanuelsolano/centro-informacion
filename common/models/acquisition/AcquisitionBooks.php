<?php

namespace common\models\acquisition;

use Yii;

/**
 * This is the model class for table "acquisition_books".
 *
 * @property integer $acquisition_books_id
 * @property string $title
 * @property string $author_name
 * @property string $publishing_house
 * @property string $edition
 * @property string $publishing_year
 * @property integer $quantity
 * @property string $another_material
 * @property integer $acquisition_format_id
 *
 * @property Acquisition $acquisition
 */
class AcquisitionBooks extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'acquisition_books';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'author_name', 'publishing_house', 'edition', 'publishing_year', 'quantity', 'acquisition_format_id'], 'required'],
            [['quantity', 'acquisition_format_id'], 'integer'],
            [['another_material'], 'string'],
            [['title', 'author_name', 'publishing_house'], 'string', 'max' => 240],
            [['edition'], 'string', 'max' => 45],
            [['publishing_year'], 'string','min'=> 2, 'max' => 4],
            [['acquisition_format_id'], 'exist', 'skipOnError' => true, 'targetClass' => Acquisition::className(), 'targetAttribute' => ['acquisition_format_id' => 'acquisition_format_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'acquisition_books_id' => 'Id',
            'title' => 'Título del material',
            'author_name' => 'Nombre de Autor',
            'publishing_house' => 'Editorial',
            'edition' => 'Edición',
            'publishing_year' => 'Año',
            'quantity' => 'Cantidad',
            'another_material' => 'Otro Material',
            'acquisition_format_id' => 'Acquisition Format ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcquisition()
    {
        return $this->hasOne(Acquisition::className(), ['acquisition_format_id' => 'acquisition_format_id']);
    }
}
