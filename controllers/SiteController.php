<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;

use app\models\Score;
use app\helpers\ErrorHelper;

class SiteController extends \yii\web\Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Ajax endpoint
     */
    public function actionScore(int $mark)
    {
        $userIP = Yii::$app->request->userIP;
        $model = Score::getByIp($userIP);

        if ($model) {
            $model->score = $mark;
            if ($model->save())
                return Score::getGlobalScore();    
        } else {
            $model = new Score([
                'ip' => $userIP,
                'score' => $mark,
            ]);
            if ($model->save())
                return Score::getGlobalScore();  
        }

        ErrorHelper::throwAllErrors($model);
    }
    
    /**
     * Ajax endpoint
     */
    public function actionGetGlobalScore()
    {
        return Score::getGlobalScore();
    }

    protected function findScoreModel($id)
    {
        $model = Score::findOne($id);
        if ($model !== null)
            return $model;

        throw new \yii\web\HttpNotFoundException();
    }
}
