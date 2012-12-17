<?php
namespace Neto\Log;

interface WarningLoggerImp extends LoggerImp
{
    public function warning($message, array $context = array());
}