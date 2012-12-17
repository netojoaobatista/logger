<?php
namespace Neto\Log;

interface AlertLoggerImp extends LoggerImp
{
    public function alert($message, array $context = array());
}