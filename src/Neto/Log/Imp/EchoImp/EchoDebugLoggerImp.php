<?php
namespace Neto\Log\Imp\EchoImp;

use Neto\Log\DebugLoggerImp;
use Neto\Log\Imp\DebugLoggerTrait;

class EchoDebugLoggerImp implements DebugLoggerImp
{
    use DebugLoggerTrait;

    /*
     * (non-PHPdoc) @see \Neto\Log\AlertLoggerImp::alert()
     */
    public function debug($message, array $context = array())
    {
        echo '[Debug]: ', $message, PHP_EOL;
    }
}