<?php
namespace Neto\Log\Imp\EchoImp;

use Neto\Log\NoticeLoggerImp;
use Neto\Log\Imp\NoticeLoggerTrait;

class EchoNoticeLoggerImp implements NoticeLoggerImp
{
    use NoticeLoggerTrait;

    /*
     * (non-PHPdoc) @see \Neto\Log\AlertLoggerImp::alert()
     */
    public function notice($message, array $context = array())
    {
        echo '[Notice]: ', $message, PHP_EOL;
    }
}