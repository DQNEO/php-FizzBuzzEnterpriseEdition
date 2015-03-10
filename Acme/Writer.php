<?php
namespace Acme;
class Writer
{
    public $buf = "";

    public function write($string)
    {
        echo $string;
        $this->buf .= $string;
    }
}
