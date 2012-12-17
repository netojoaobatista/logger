<?php
namespace Neto\Log;

interface NoticeLoggerImp extends LoggerImp
{
    public function notice($message, array $context = array());
}