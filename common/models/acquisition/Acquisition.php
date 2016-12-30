<?php

namespace common\models\acquisition;

use Yii;

/**
 * This is the model class for table "acquisition_format".
 *
 * @property integer $acquisition_format_id
 * @property string $name
 * @property string $request_date
 * @property string $academic_program
 * @property string $email
 *
 * @property AcquisitionBooks[] $acquisitionBooks
 */
class Acquisition extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'acquisition_format';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'request_date', 'academic_program'], 'required'],
            [['request_date'], 'safe'],
            [['email'], 'email'],
            [['name'], 'string', 'max' => 80],
            [['academic_program'], 'string', 'max' => 160],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'acquisition_format_id' => 'Id',
            'name' => 'Solicitante',
            'request_date' => 'Fecha de solicitud',
            'academic_program' => 'Programa Académico',
            'email' => 'Correo Electrónico',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcquisitionBooks()
    {
        return $this->hasMany(AcquisitionBooks::className(), ['acquisition_format_id' => 'acquisition_format_id']);
    }
}
