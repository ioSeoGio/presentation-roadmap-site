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

    public function actionTest()
    {
        if(Yii::$app->request->get())
        {
            return true;
        }
    }

    public function actionRoadmap()
    {
        return $this->render('roadmap');
    }

    public function actionStatistic()
    {
        return $this->render('statistic');
    }

    public function actionAuthor()
    {
        return $this->render('author');
    }

    public function actionView()
    {
        return $this->render('view');
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
