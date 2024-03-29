<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pasien".
 *
 * @property int $id_pasien
 * @property string $nama
 * @property string $nik
 * @property string|null $id_tindakan
 * @property string|null $id_obat
 * @property string|null $alamat
 * @property string|null $id_wilayah
 * @property string $jenis_kelamin
 */
class Pasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'nik', 'jenis_kelamin'], 'required'],
            [['alamat'], 'string'],
            [['nama'], 'string', 'max' => 255],
            [['nik', 'id_tindakan', 'id_obat'], 'string', 'max' => 20],
            [['id_wilayah', 'jenis_kelamin'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pasien' => 'Id Pasien',
            'nama' => 'Nama',
            'nik' => 'Nik',
            'id_tindakan' => 'Id Tindakan',
            'id_obat' => 'Id Obat',
            'alamat' => 'Alamat',
            'id_wilayah' => 'Id Wilayah',
            'jenis_kelamin' => 'Jenis Kelamin',
        ];
    }
}
