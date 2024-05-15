<?php

namespace Sebentleitner\Logger;
use Sebentleitner\ILogger;

class EchoLogger
{
public function logEntry($line){
    echo $line."\n";
}
}