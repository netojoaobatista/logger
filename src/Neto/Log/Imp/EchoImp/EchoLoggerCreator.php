<?php
namespace Neto\Log\Imp\EchoImp;

use Neto\Log\Level;
use Neto\Log\Imp\AbstractLoggerCreator;

class EchoLoggerCreator extends AbstractLoggerCreator
{
    private $cache = array();

    /*
     * (non-PHPdoc) @see \Neto\Log\Imp\AbstractLoggerCreator::createLoggerImp()
     */
    public function createLoggerImp($level)
    {
        if (isset($this->cache[$level])) {
            return $this->cache[$level];
        }

        $logger = null;

        switch ($level) {
            case Level::ALERT:
                $logger = new EchoAlertLoggerImp();
                break;
            case Level::CRITICAL:
                $logger = new EchoCriticalLoggerImp();
                break;
            case Level::DEBUG:
                $logger = new EchoDebugLoggerImp();
                break;
            case Level::EMERGENCY:
                $logger = new EchoEmergencyLoggerImp();
                break;
            case Level::ERROR:
                $logger = new EchoErrorLoggerImp();
                break;
            case Level::INFO:
                $logger = new EchoInfoLoggerImp();
                break;
            case Level::NOTICE:
                $logger = new EchoNoticeLoggerImp();
                break;
            case Level::WARNING:
                $logger = new EchoWarningLoggerImp();
                break;
        }

        if ($logger !== null) {
            $this->cache[$level] = $logger;

            return $logger;
        }

        throw new \UnexpectedValueException('Unexpected log level ' . $level);
    }
}