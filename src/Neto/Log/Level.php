<?php
namespace Neto\Log;

class Level
{
    const NONE = 0;
    const INFO = 1;
    const NOTICE = 2;
    const WARNING = 4;
    const ERROR = 8;
    const CRITICAL = 16;
    const ALERT = 32;
    const EMERGENCY = 64;
    const DEBUG = 128;
    const ALL = 255;
}