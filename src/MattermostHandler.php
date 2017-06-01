<?php

namespace MattermostHandler;

use Monolog\Logger;
use Monolog\Handler\AbstractProcessingHandler;

class MattermostHandler extends AbstractProcessingHandler
{
    public function __construct($level = Logger::DEBUG, $bubble = true)
    {
        parent::__construct($level, $bubble);
    }

    protected function write(array $record)
    {

    }
}
