<?php

namespace Litipk\PyPhpOn\Tests;

use Litipk\PyPhpOn\FastPyPhpOn as FastPyPhpOn;


class ExtendedFastPyPhpOn extends FastPyPhpOn
{
    public $public_property = 1;
    private $private_property = 2;

    public function __construct()
    {
        parent::__construct();
    }

    public function publicFunction ($arg)
    {
        return [
            "public" => $this->public_property,
            "arg" => $arg
        ];
    }

    private function privateFunction ()
    {
        return [
            "private" => $this->private_property
        ];
    }
}
