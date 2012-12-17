<?php
namespace Neto\Log\Imp;

use Neto\Log\Level;

trait WarningLoggerTrait
{
    /*
     * (non-PHPdoc) @see \Neto\Log\WarningLoggerImp::warning()
     */
    public abstract function warning($message, array $context = array());

    /*
     * (non-PHPdoc) @see \Neto\Log\LoggerImp::log()
     */
    public function log($message, $level = Level::ALL, array $context = array())
    {
        $this->warning($message, $context);
    }
}