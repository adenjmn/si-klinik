<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tagihan".
 *
 * @property int $id_tagihan
 * @property string|null $id_obat
 * @property string|null $id_tindakan
 * @property string|null $total_bayar
 * @property string|null $status_pembayaran
 */
class Tagihan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tagihan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_obat', 'id_tindakan'], 'string', 'max' => 20],
            [['total_bayar', 'status_pembayaran'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tagihan' => 'Id Tagihan',
            'id_obat' => 'Id Obat',
            'id_tindakan' => 'Id Tindakan',
            'total_bayar' => 'Total Bayar',
            'status_pembayaran' => 'Status Pembayaran',
        ];
    }
}
