<?php
namespace Neto\Log\Imp\EchoImp;

use Neto\Log\Imp\AlertLoggerTrait;
use Neto\Log\AlertLoggerImp;

class EchoAlertLoggerImp implements AlertLoggerImp
{
    use AlertLoggerTrait;

    /*
     * (non-PHPdoc) @see \Neto\Log\AlertLoggerImp::alert()
     */
    public function alert($message, array $context = array())
    {
        echo '[Alert]: ', $message, PHP_EOL;
    }
}