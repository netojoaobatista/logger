<?php
namespace Neto\Log;

interface ErrorLoggerImp extends LoggerImp
{
    public function error($message, array $context = array());
}