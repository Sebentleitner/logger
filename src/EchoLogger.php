<?php

namespace Sebentleitner\Logger;

class EchoLogger implements ILogger
{
    public function logEntry($line){
        echo $line."\n";
    }
}