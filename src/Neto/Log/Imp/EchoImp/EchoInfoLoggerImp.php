<?php
namespace Neto\Log\Imp\EchoImp;

use Neto\Log\InfoLoggerImp;
use Neto\Log\Imp\InfoLoggerTrait;

class EchoInfoLoggerImp implements InfoLoggerImp
{
    use InfoLoggerTrait;

    /*
     * (non-PHPdoc) @see \Neto\Log\AlertLoggerImp::alert()
     */
    public function info($message, array $context = array())
    {
        echo '[Info]: ', $message, PHP_EOL;
    }
}