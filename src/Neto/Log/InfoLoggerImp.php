<?php
namespace Neto\Log;

interface InfoLoggerImp extends LoggerImp
{
    public function info($message, array $context = array());
}