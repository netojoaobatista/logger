<?php
namespace Neto\Log\Imp;

use Neto\Log\Level;

use Neto\Log\LoggerImp;
use Neto\Log\AlertLoggerImp;
use Neto\Log\CriticalLoggerImp;
use Neto\Log\DebugLoggerImp;
use Neto\Log\EmergencyLoggerImp;
use Neto\Log\ErrorLoggerImp;
use Neto\Log\InfoLoggerImp;
use Neto\Log\NoticeLoggerImp;
use Neto\Log\WarningLoggerImp;

abstract class AbstractLoggerCreator implements LoggerImp,
                                                AlertLoggerImp,
                                                CriticalLoggerImp,
                                                DebugLoggerImp,
                                                EmergencyLoggerImp,
                                                ErrorLoggerImp,
                                                InfoLoggerImp,
                                                NoticeLoggerImp,
                                                WarningLoggerImp
{
    /**
     * Creates an instance of LoggerImp for specified log level
     * @param integer $level
     * @return LoggerImp
     */
    public abstract function createLoggerImp($level);

    /*
     * (non-PHPdoc) @see \Neto\Log\WarningLoggerImp::warning()
     */
    public function warning($message, array $context = array())
    {
        $this->log($message, Level::WARNING, $context);
    }

    /*
     * (non-PHPdoc) @see \Neto\Log\NoticeLoggerImp::notice()
     */
    public function notice($message, array $context = array())
    {
        $this->log($message, Level::NOTICE, $context);
    }

    /*
     * (non-PHPdoc) @see \Neto\Log\CriticalLoggerImp::critical()
     */
    public function critical($message, array $context = array())
    {
        $this->log($message, Level::CRITICAL, $context);
    }

    /*
     * (non-PHPdoc) @see \Neto\Log\AlertLoggerImp::alert()
     */
    public function alert($message, array $context = array())
    {
        $this->log($message, Level::ALERT, $context);
    }

    /*
     * (non-PHPdoc) @see \Neto\Log\EmergencyLoggerImp::emergency()
     */
    public function emergency($message, array $context = array())
    {
        $this->log($message, Level::EMERGENCY, $context);
    }

    /*
     * (non-PHPdoc) @see \Neto\Log\DebugLoggerImp::debug()
     */
    public function debug($message, array $context = array())
    {
        $this->log($message, Level::DEBUG, $context);
    }

    /*
     * (non-PHPdoc) @see \Neto\Log\ErrorLoggerImp::error()
     */
    public function error($message, array $context = array())
    {
        $this->log($message, Level::ERROR, $context);
    }

    /*
     * (non-PHPdoc) @see \Neto\Log\InfoLoggerImp::info()
     */
    public function info($message, array $context = array())
    {
        $this->log($message, Level::INFO, $context);
    }

    /*
     * (non-PHPdoc) @see \Neto\Log\LoggerImp::log()
     */
    public function log($message, $level = Level::ALL, array $context = array())
    {
        $levels = array(Level::ALERT, Level::CRITICAL, Level::DEBUG,
                        Level::EMERGENCY, Level::ERROR, Level::INFO,
                        Level::NOTICE, Level::WARNING);

        foreach ($levels as $currentLevel) {
            if ($level & $currentLevel) {
                $this->createLoggerImp($currentLevel)->log($message, $level, $context);
            }
        }
    }
}