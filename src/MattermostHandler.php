<?php

namespace MattermostHandler;

use GuzzleHttp\Client;
use Monolog\Logger;
use Monolog\Handler\AbstractProcessingHandler;

class MattermostHandler extends AbstractProcessingHandler
{
    private $webHookUrl;
    private $client;

    public function __construct($webHookUrl, $level = Logger::DEBUG, $bubble = true, $client = null)
    {
        parent::__construct($level, $bubble);

        $this->webHookUrl = $webHookUrl;
        $this->client = ($client) ?: new Client();
    }

    public function write(array $record)
    {
        $this->client->request('POST', $this->webHookUrl, [
            'form_params' => [
                'payload' => json_encode(['text' => $record['formatted']])
            ]
        ]);
    }
}
