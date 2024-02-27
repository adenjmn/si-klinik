<?php

namespace app\controllers;

use app\models\Pasien;
use app\models\PasienSearch;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class ReportController extends \yii\web\Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'access' => [
                    'class' => AccessControl::class,
                    'only' => ['logout','index','create','update','delete'],
                    'rules' => [
                        [
                            'allow' => true,
                            'roles' => ['@'],
                        ],
                    ],
                ],
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }
    public function actionIndex()
    {
        // // Mendapatkan instance dari komponen DB
        // $db = Yii::$app->db;
        
        $searchModel = new PasienSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        // $dataProvider->query->where(['jenis_kelamin'=>'Laki-Laki']);
        // $dataProvider = (new \yii\db\Query())->from('tindakan')->count();
        return $this->render('index',[
            'dataProvider' => $dataProvider
        ]);
    }

}
