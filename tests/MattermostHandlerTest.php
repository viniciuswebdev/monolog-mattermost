<?php

namespace MattermostHandler;

use GuzzleHttp\Client;
use Monolog\Logger;

class MattermostHandlerTest extends \PHPUnit_Framework_TestCase
{
    public function testShouldBuildTheRequestCorrectly()
    {
        $client = $this->getMockBuilder(Client::class)
            ->disableOriginalConstructor()
            ->getMock();

        $client->expects($this->once())
            ->method('request')
            ->with(
                'POST',
                'https://my-mattermost.company.com.br',
                [
                    'form_params' => [
                        'payload' => '{"text":"Hello!"}'
                    ]
                ]
            );

        $matterMostHandler = new MattermostHandler(
            'https://my-mattermost.company.com.br',
            Logger::DEBUG,
            true,
            $client
        );

        $matterMostHandler->write(['formatted' => 'Hello!']);
    }
}
