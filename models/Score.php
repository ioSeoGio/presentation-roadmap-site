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

    public static function getByIp(string $ip)
    {
    	return self::findOne(['ip' => $ip]);
    }

    public static function getGlobalScore($roundToSign = 1)
    {
    	$globalScore = self::find()->average('score'); 
    	
    	return round($globalScore, $roundToSign);
    }
}