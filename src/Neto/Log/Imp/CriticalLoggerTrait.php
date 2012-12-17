<?php
namespace Neto\Log\Imp;

use Neto\Log\Level;

trait CriticalLoggerTrait
{
    /*
     * (non-PHPdoc) @see \Neto\Log\CriticalLoggerImp::critical()
    */
    public abstract function critical($message, array $context = array());

    /*
     * (non-PHPdoc) @see \Neto\Log\LoggerImp::log()
     */
    public function log($message, $level = Level::ALL, array $context = array())
    {
        $this->critical($message, $context);
    }
}