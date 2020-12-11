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
        if (Yii::$app->request->get()) {
            return true;
        }
    }

    public function actionRoadmap()
    {
        return $this->render('roadmap');
    }

    public function actionStatistic()
    {
        $first = "университет";
        $second = "форт";
        $third = "крепость";
        $fourth = "музей";
        $fifth = "хатынь";
        $sixth = "курган";

        return $this->render('statistic', [
            'first' => Score::getStatisticByDestination($first),
            'second' => Score::getStatisticByDestination($second),
            'third' => Score::getStatisticByDestination($third),
            'fourth' => Score::getStatisticByDestination($fourth),
            'fifth' => Score::getStatisticByDestination($fifth),
            'sixth' => Score::getStatisticByDestination($sixth),
        ]);
    }

    public function actionAuthor()
    {
        return $this->render('author');
    }

    public function actionView($destination)
    {
        switch ($destination) {
            case 'fortress':
                $destination = 'крепость';
                $page = 'fortress';
                break;
            case 'fort':
                $destination = 'форт';
                $page = 'fort';
                break;
            case 'university':
                $destination = 'университет';
                $page = 'university';
                break;
            case 'museum':
                $destination = 'музей';
                $page = 'museum';
                break;
            case 'khatyn':
                $destination = 'хатынь';
                $page = 'khatyn';
                break;
            case 'glory':
                $destination = 'курган';
                $page = 'glory';
                break;

            default:
                $destination = 'крепость';
                $page = 'fortress';
                break;
        }

        $userIP = Yii::$app->request->userIP;
        $model = Score::getByIp($userIP, $destination);

        $score = $model ? $model->score : 0;

        return $this->render($page, [
            'score' => $score,
        ]);

    }

    /**++
     * Ajax endpoint
     */
    public function actionScore(int $mark, string $destination)
    {
        $userIP = Yii::$app->request->userIP;
        $model = Score::getByIp($userIP, $destination);

        if ($model) {
            $model->score = $mark;
            if ($model->save())
                return Score::getGlobalScoreAvg($destination);
        } else {
            $model = new Score([
                'ip' => $userIP,
                'score' => $mark,
                'destination' => $destination,
            ]);
            if ($model->save())
                return Score::getGlobalScoreAvg($destination);
        }

        ErrorHelper::throwAllErrors($model);
    }

    /**
     * Ajax endpoint
     */
    public function actionGetGlobalScore(string $destination)
    {
        return Score::getGlobalScoreAvg($destination);
    }

    protected function findScoreModel($id)
    {
        $model = Score::findOne($id);
        if ($model !== null)
            return $model;

        throw new \yii\web\HttpNotFoundException();
    }
}
