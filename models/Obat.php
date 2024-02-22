<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "obat".
 *
 * @property int $id_obat
 * @property string $id_pasien
 * @property string $nama_obat
 * @property string $dosis
 * @property string $harga
 */
class Obat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'obat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pasien', 'nama_obat', 'dosis', 'harga'], 'required'],
            [['id_pasien', 'nama_obat', 'dosis'], 'string', 'max' => 20],
            [['harga'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_obat' => 'Id Obat',
            'id_pasien' => 'Id Pasien',
            'nama_obat' => 'Nama Obat',
            'dosis' => 'Dosis',
            'harga' => 'Harga',
        ];
    }
}
