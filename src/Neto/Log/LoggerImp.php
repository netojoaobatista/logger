<?php
namespace Neto\Log;

interface LoggerImp
{
    public function log($message, $level = Level::ALL, array $context = array());
}