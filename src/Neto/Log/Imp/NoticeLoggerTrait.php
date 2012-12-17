<?php
namespace Neto\Log\Imp;

use Neto\Log\Level;

trait NoticeLoggerTrait
{
    /*
     * (non-PHPdoc) @see \Neto\Log\NoticeLoggerImp::notice()
     */
    public abstract function notice($message, array $context = array());

    /*
     * (non-PHPdoc) @see \Neto\Log\LoggerImp::log()
     */
    public function log($message, $level = Level::ALL, array $context = array())
    {
        $this->notice($message, $context);
    }
}