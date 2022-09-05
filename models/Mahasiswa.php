<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property int $id_mahasiswa
 * @property string $nim
 * @property string $nama
 * @property int $jk
 * @property string $jurusan
 * @property int $angkatan
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'jk', 'jurusan', 'angkatan'], 'required'],
            [['jk', 'angkatan'], 'integer'],
            [['nim'], 'string', 'max' => 10],
            [['nama', 'jurusan'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_mahasiswa' => 'Id Mahasiswa',
            'nim' => 'Nim',
            'nama' => 'Nama',
            'jk' => 'Jk',
            'jurusan' => 'Jurusan',
            'angkatan' => 'Angkatan',
        ];
    }
}
