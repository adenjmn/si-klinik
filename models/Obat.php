<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "obat".
 *
 * @property int $id_obat
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
            [['nama_obat', 'dosis', 'harga'], 'required'],
            [['nama_obat', 'dosis'], 'string', 'max' => 20],
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
            'nama_obat' => 'Nama Obat',
            'dosis' => 'Dosis',
            'harga' => 'Harga',
        ];
    }
}
