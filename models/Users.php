<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $nama
 * @property string $nik
 * @property string|null $alamat
 * @property string|null $pekerjaan
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'nik'], 'required'],
            [['alamat'], 'string'],
            [['nama'], 'string', 'max' => 255],
            [['nik'], 'string', 'max' => 20],
            [['pekerjaan'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'nik' => 'Nik',
            'alamat' => 'Alamat',
            'pekerjaan' => 'Pekerjaan',
        ];
    }
}
