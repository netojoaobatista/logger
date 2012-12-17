<?php
namespace Neto\Log;

interface EmergencyLoggerImp extends LoggerImp
{
    public function emergency($message, array $context = array());
}