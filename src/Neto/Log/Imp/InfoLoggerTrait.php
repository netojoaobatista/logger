<?php
namespace Neto\Log\Imp;

use Neto\Log\Level;

trait InfoLoggerTrait
{
    /*
     * (non-PHPdoc) @see \Neto\Log\InfoLoggerImp::info()
     */
    public abstract function info($message, array $context = array());

    /*
     * (non-PHPdoc) @see \Neto\Log\LoggerImp::log()
     */
    public function log($message, $level = Level::ALL, array $context = array())
    {
        $this->info($message, $context);
    }
}