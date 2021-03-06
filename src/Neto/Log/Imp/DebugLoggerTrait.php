<?php
namespace Neto\Log\Imp;

use Neto\Log\Level;

trait DebugLoggerTrait
{
    /*
     * (non-PHPdoc) @see \Neto\Log\DebugLoggerImp::debug()
     */
    public abstract function debug($message, array $context = array());

    /*
     * (non-PHPdoc) @see \Neto\Log\LoggerImp::log()
     */
    public function log($message, $level = Level::ALL, array $context = array())
    {
        $this->debug($message, $context);
    }
}