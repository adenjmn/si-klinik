<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pegawai".
 *
 * @property int $id_pegawai
 * @property string $nama
 * @property string $nik
 * @property string $no_telp
 * @property string|null $alamat
 * @property string|null $jabatan
 * @property string|null $pendidikan
 * @property string|null $id_wilayah
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'nik', 'no_telp'], 'required'],
            [['alamat'], 'string'],
            [['nama'], 'string', 'max' => 255],
            [['nik', 'no_telp'], 'string', 'max' => 20],
            [['jabatan', 'pendidikan', 'id_wilayah'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pegawai' => 'Id Pegawai',
            'nama' => 'Nama',
            'nik' => 'Nik',
            'no_telp' => 'No Telp',
            'alamat' => 'Alamat',
            'jabatan' => 'Jabatan',
            'pendidikan' => 'Pendidikan',
            'id_wilayah' => 'Id Wilayah',
        ];
    }
}
