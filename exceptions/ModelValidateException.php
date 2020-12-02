<?php

namespace common\exceptions;

class ModelValidateException extends \yii\web\HttpException {

    public function __construct(string $message = "Validating error.", int $code = 0, \Exception $previous = null)
    {
        parent::__construct(409, $message, $code, $previous);
    }

    public function __toString() {
        return $this->message;
    }
}