<?php
namespace Neto\Log\Imp\EchoImp;

use Neto\Log\ErrorLoggerImp;
use Neto\Log\Imp\ErrorLoggerTrait;

class EchoErrorLoggerImp implements ErrorLoggerImp
{
    use ErrorLoggerTrait;

    /*
     * (non-PHPdoc) @see \Neto\Log\AlertLoggerImp::alert()
     */
    public function error($message, array $context = array())
    {
        echo '[Error]: ', $message, PHP_EOL;
    }
}