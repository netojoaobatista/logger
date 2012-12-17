<?php
namespace Neto\Log\Imp;

use Neto\Log\Level;

trait ErrorLoggerTrait
{
    /*
     * (non-PHPdoc) @see \Neto\Log\LoggerImp::log()
     */
    public function log($message, $level = Level::ALL, array $context = array())
    {
        $this->error($message, $context);
    }
}