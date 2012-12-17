<?php
namespace Neto\Log;

interface CriticalLoggerImp extends LoggerImp
{
    public function critical($message, array $context = array());
}