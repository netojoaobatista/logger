<?php
namespace Neto\Log\Imp\EchoImp;

use Neto\Log\CriticalLoggerImp;
use Neto\Log\Imp\CriticalLoggerTrait;

class EchoCriticalLoggerImp implements CriticalLoggerImp
{
    use CriticalLoggerTrait;

    /*
     * (non-PHPdoc) @see \Neto\Log\AlertLoggerImp::alert()
     */
    public function critical($message, array $context = array())
    {
        echo '[Critical]: ', $message, PHP_EOL;
    }
}