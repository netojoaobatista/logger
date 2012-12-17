<?php
namespace Neto\Log\Imp\EchoImp;

use Neto\Log\EmergencyLoggerImp;
use Neto\Log\Imp\EmergencyLoggerTrait;

class EchoEmergencyLoggerImp implements EmergencyLoggerImp
{
    use EmergencyLoggerTrait;

    /*
     * (non-PHPdoc) @see \Neto\Log\AlertLoggerImp::alert()
     */
    public function emergency($message, array $context = array())
    {
        echo '[Emergency]: ', $message, PHP_EOL;
    }
}