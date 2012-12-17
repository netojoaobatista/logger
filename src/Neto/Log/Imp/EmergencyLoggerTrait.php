<?php
namespace Neto\Log\Imp;

use Neto\Log\Level;

trait EmergencyLoggerTrait
{
    /*
     * (non-PHPdoc) @see \Neto\Log\LoggerImp::log()
     */
    public function log($message, $level = Level::ALL, array $context = array())
    {
        $this->emergency($message, $context);
    }
}