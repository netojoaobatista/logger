<?php
namespace Neto\Log;

interface DebugLoggerImp extends LoggerImp
{
    public function debug($message, array $context = array());
}