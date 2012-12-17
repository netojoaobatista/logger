<?php
namespace Neto\Log\Imp\EchoImp;

use Neto\Log\WarningLoggerImp;
use Neto\Log\Imp\WarningLoggerTrait;

class EchoWarningLoggerImp implements WarningLoggerImp
{
    use WarningLoggerTrait;

    /*
     * (non-PHPdoc) @see \Neto\Log\AlertLoggerImp::alert()
     */
    public function warning($message, array $context = array())
    {
        echo '[Warning]: ', $message, PHP_EOL;
    }
}