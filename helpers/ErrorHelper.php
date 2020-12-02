<?php 

namespace app\helpers;

use Yii;
use yii\web\BadRequestHttpException;
use yii\base\Model;

use app\exceptions\ModelValidateException;
use app\exceptions\ParamException;

class ErrorHelper { 

	public static function throwAllErrors(Model $model)
	{
        foreach ($model->errors as $attribute => $arrOfErrors) {
            foreach ($arrOfErrors as $message) {
                throw new ModelValidateException($message);
            }
        }
        throw new ModelValidateException();
	}
}