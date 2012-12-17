<?php
namespace Neto\Log;

class Logger
{
    private static $defaultLevel = Level::ALL;
    private $level;
    private $loggerImp;

    public function __construct()
    {
        $this->level = Logger::$defaultLevel;
    }

    public function log($message, $level = Level::ALL, array $context = array())
    {
        if ($level & $this->level) {
            $this->loggerImp->log($message, $level, $context);
        }
    }

    public static function setDefaultLevel($defaultLevel)
    {
        Logger::$defaultLevel = (int) $defaultLevel;
    }

    public function setLevel($level)
    {
        $this->level = (int) $level;
    }

    public function setLogger(LoggerImp $loggerImp)
    {
        $this->loggerImp = $loggerImp;
    }
}