<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jk".
 *
 * @property int $id_jk
 * @property string $jenisKelamin
 */
class Jk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jenisKelamin'], 'required'],
            [['jenisKelamin'], 'string', 'max' => 9],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_jk' => 'Id Jk',
            'jenisKelamin' => 'Jenis Kelamin',
        ];
    }
}
