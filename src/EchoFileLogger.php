<?php

namespace Sebentleitner\Logger;

use Sebentleitner\Logger\ILogger;

class EchoFileLogger implements ILogger
{

    private $loggers = [];

    public function addLogger(ILogger $logger){
        $this->loggers[] = $logger;
    }
    public function logEntry($line)
    {
        foreach ($this->loggers as $logger) {
            $logger->logEntry($line);
        }
    }


}