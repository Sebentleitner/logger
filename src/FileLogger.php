<?php

namespace Sebentleitner\Logger;


class FileLogger
{

    private $handle = null;

    function __construct(string $filename)
    {
        $this->handle = fopen($filename, "a");
    }
   public function logEnty($line)
   {
       fwrite($this->handle, $line . "\n");
   }

   public function __destruct()
   {
       fclose($this->handle);
   }

}