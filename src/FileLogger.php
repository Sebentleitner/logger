<?php

namespace Sebentleitner\Logger;

use Sebentleitner\Logger\ILogger;


class FileLogger implements ILogger
{

    private $handle = null;

    function __construct(string $filename)
    {
        $this->handle = fopen($filename, "a");
    }

    public function logEntry($line)
    {
        fwrite($this->handle, $line . "\n");
    }

    public function __destruct()
    {
        fclose($this->handle);

    }


}
