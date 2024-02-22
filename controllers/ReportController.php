<?php

namespace app\controllers;

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
        
        // // Membuat query menggunakan Query Builder
        // $query = $db->createCommand('SELECT * FROM tindakan');
        
        // // Eksekusi query dan ambil semua data
        // $dataProvider = $query->queryAll();
        
        // $dataProvider = (new \yii\db\Query())->from('tindakan')->count();
        return $this->render('index',[
            // 'dataProvider' => $dataProvider
        ]);
    }

}
