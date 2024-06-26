<?php

declare(strict_types=1);

namespace Udavikhin\UselessFactsApiClient;

use GuzzleHttp\Client;

class UselessFactsApiClient
{
    private $httpClient;

    public function __construct()
    {
        $this->httpClient = new Client([
            'base_uri' => 'https://uselessfacts.jsph.pl/api/v2/facts/',
        ]);
    }

    public function getRandomFact()
    {
        return $this->httpClient
            ->get('random')
            ->getBody()
            ->getContents();
    }

    public function getTodaysFact()
    {
        return $this->httpClient->get('today')
            ->getBody()
            ->getContents();
    }
}
