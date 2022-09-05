<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property int $id_mahasiswa
 * @property string $nim
 * @property string $nama
 * @property int $id_jk
 * @property int $id_jurusan
 * @property int $id_angkatan
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
            [['nim', 'nama', 'id_jk', 'id_jurusan', 'id_angkatan'], 'required'],
            [['id_jk', 'id_jurusan', 'id_angkatan'], 'integer'],
            [['nim'], 'string', 'max' => 10],
            [['nama'], 'string', 'max' => 255],
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
            'nama' => 'Nama Lengkap',
            'id_jk' => 'Jenis Kelamin',
            'id_jurusan' => 'Jurusan',
            'id_angkatan' => 'Angkatan',
        ];
    }

    public function getJk()
    {
        return $this->hasOne(Jk::className(), ['id_jk' => 'id_jk']);
    }

    public function getAngkatan()
    {
        return $this->hasOne(Angkatan::className(), ['id_angkatan' => 'id_angkatan']);
    }

    public function getJurusan()
    {
        return $this->hasOne(Jurusan::className(), ['id_jurusan' => 'id_jurusan']);
    }
}
