<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pasien;

/**
 * PasienSearch represents the model behind the search form of `app\models\Pasien`.
 */
class PasienSearch extends Pasien
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pasien'], 'integer'],
            [['nama', 'nik', 'id_tindakan', 'id_obat', 'alamat', 'id_wilayah', 'jenis_kelamin'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Pasien::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_pasien' => $this->id_pasien,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'nik', $this->nik])
            ->andFilterWhere(['like', 'id_tindakan', $this->id_tindakan])
            ->andFilterWhere(['like', 'id_obat', $this->id_obat])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'id_wilayah', $this->id_wilayah])
            ->andFilterWhere(['like', 'jenis_kelamin', $this->jenis_kelamin]);

        return $dataProvider;
    }
}
