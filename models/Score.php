<?php 

namespace app\models;

class Score extends \yii\db\ActiveRecord 
{
    public static function tableName()
    {
        return 'score';
    }

    public function rules()
    {
        return [
        	[['ip'], 'ip'],
        	[['score'], 'integer', 'min' => 0, 'max' => 5],
        	[['created_at'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ip' => 'IP',
            'score' => 'Оценка',
            'created_at' => 'Создано',
        ];
    }

    public static function getByIp(string $ip, string $destination)
    {
    	return self::findOne(['ip' => $ip, 'destination' => $destination]);
    }

    public static function getGlobalScoreAvg(string $destination, int $roundToSign = 1)
    {
    	$globalScore = self::find()
            ->where(['destination' => $destination])
            ->average('score'); 
    	
    	return round($globalScore, $roundToSign);
    }


    public static function getStatisticByDestination(string $destination)
    {
        return round(self::getDestinationSumScore($destination) / self::getAllSumScore() * 100, 1); 
    }

    public static function getDestinationSumScore(string $destination, int $roundToSign = 1)
    {
        $globalScore = self::find()
            ->where(['destination' => $destination])
            ->sum('score'); 
        
        return round($globalScore, $roundToSign);
    }

    public static function getAllSumScore(int $roundToSign = 1)
    {
        $globalScore = self::find()
            ->sum('score'); 
        
        return round($globalScore, $roundToSign);
    }
}